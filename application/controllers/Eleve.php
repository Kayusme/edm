<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('eleve_model');
        $this->load->model('notifications_model');
    }
    public function index()
    {
//        var_dump($this->session);die();
//        $maSession = $this->session->userdata('matricule');
        if ($this->session->has_userdata('matricule')){
            $data['title'] = "Page d'administration";
            $data['infos'] = $this->session->userdata;
            $data['count'] = count($this->notifications_model->unreadNotifications());
            $this->load->view("eleve/_global/header",$data);
            $this->load->view("eleve/_global/nav");
            $this->load->view("eleve/index",$data);
            $this->load->view("eleve/_global/footer");
        }else{
            redirect("eleve/login");
        }
    }

    public function login()
    {
        if (!isset($_SESSION['user'])) {
//            $this->load->library('form_validation');
//            $this->load->library('session');
            $this->form_validation->set_rules('matricule', 'Login utilisateur', 'required', array('required' => 'Le login est obligatoire'));
            $this->form_validation->set_rules('password', 'Mot De Passe', 'required', array('required' => 'Saisissez Le mot de passe '));

            if ($this->form_validation->run()) {
                $this->load->model("eleve_model");

                $data = array(
                    "matricule" => $this->input->post("matricule"),
                    "password" => $this->input->post("password")
                );
                // var_dump($data);die();
                $res = $this->eleve_model->login($data['matricule'], $data['password']);
//                 var_dump($res);die();
                $user_data = $res;
//                 var_dump($user_data);die();

                $this->session->set_userdata($user_data);
//                 var_dump($res['prenom']);die();
                if ($res['matricule']) {
//                 var_dump($this->session);die();
                    redirect('eleve/index');
                } else {
                    $this->session->set_flashdata('error', 'Matricule ou Mot de Passe incorrect');
                    redirect('eleve/login');
                }

            }
//            else
//            {
//                 print_r("<span class=\"alert alert-danger col-xs-3 col-xs-offset-4\">
//                             <a href=\"#\" class=\"close\" data-dismiss = \"alert\" aria-label = \"close\">&times;</a>
//                             <strong>Aucune Connexion établie</strong>
//                         </span>");
//            }

            if (!isset($user_data['matricule'])) {
                $data['title'] = "Login";
                $this->load->view("eleve/login", $data);
            } else {
                redirect("eleve/index");
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('matricule');
        $this->session->sess_destroy();
        redirect('eleve/index');
    }

    public function bulletin()
    {
        $data['title'] = "Resultats";
        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/basic_tables",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function statistics()
    {
        $data['title'] = "Statistiques";
        
        $this->load->model('statistique_model');
        $this->load->model('cote_model');
        $this->load->model('dispenser_model');
        $this->load->model('parcourt_model');
        $this->load->model('matiere_model');

        //La valeur de l'id de l'élève qui vient de la session sera placée là. 
        $data["eleve"] = 1;

        //Reccupère la dernière classe de l'élève
        $data["classe"] = $this->parcourt_model->selectClasseEleve($data["eleve"]);

        //Tableaux contenant tous les id de la table dispenser
        $data["id_cours_dispenses"] = $this->dispenser_model->selectIdDispenser($data["classe"]);
        
        //Tableaux contenant tous les id des matieres
        $data["matieres"] = $this->dispenser_model->selectIdMatiereDispenserByClasse($data["classe"]);

        //Liste des matières
        for ($i=0; $i < count($data["matieres"]); $i++) { 

            if ($i != count($data["matieres"]) - 1) {
                $data["cours"] = '"'.$this->matiere_model->selectNomMatiere($data["matieres"][$i]).'",';
            } else {
                $data["cours"] .= '"'.$this->matiere_model->selectNomMatiere($data["matieres"][$i]).'"';
            }         

        }

        //Début de la reccupération des points de la période 1

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,1,$data["eleve"]);
            $i++;
        }

        $i = 0;

        foreach ($data["matieres"] as $matiere) {
            $max[$i] = $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                $data["periode1"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
                $resulat[$i] =  $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            } else {
                $data["periode1"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
                $resulat[$i] =  $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }
        $data["resultats"] = $resulat;

        //Fin de la reccupération des points de la période 1

        //Début de la reccupération des points de la période2

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,2,$data["eleve"]);
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                //echo $cote[$i]." / ".$max[$i]." * 100 = ";
                $data["periode2"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["periode2"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        //Fin de la reccupération des points de la période 2

        //Début de la reccupération des points de la période 3

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,3,$data["eleve"]);
            $i++;
        }

        $i = 0;

        foreach ($data["matieres"] as $matiere) {
            $max[$i] = $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                $data["periode3"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["periode3"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        //Fin de la reccupération des points de la période 3

        //Début de la reccupération des points de la période4

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,4,$data["eleve"]);
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                $data["periode4"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["periode4"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        //Fin de la reccupération des points de la période 4

        //Début de la reccupération des points de l'examen 1

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,5,$data["eleve"]);
            $i++;
        }

        $i = 0;

        foreach ($data["matieres"] as $matiere) {
            $max[$i] = $this->dispenser_model->selectMaximum($data["classe"],$matiere) * 2;
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                $data["examen1"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["examen1"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        //Fin de la reccupération des points de l'examen 1

        //Début de la reccupération des points de l'examen 2

        $i = 0;

        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote[$i] = $this->cote_model->selectCote($id_cours_dispense,6,$data["eleve"]);
            $i++;
        }

        for ($i=0; $i < count($max); $i++) { 

            if ($i != count($max) - 1) {
                //echo $cote[$i]." / ".$max[$i]." * 100 = ";
                $data["examen2"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["examen2"] .= $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        //Fin de la reccupération des points de l'examen 2
        
        $data['count'] = count($this->notifications_model->unreadNotifications());
        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/statistics",$data);
        $this->load->view("eleve/_global/footer");
    }
    public function cours()
    {
        $data['title'] = "Cours";
        $idclass = 1;
        $data['resultats'] = $this->eleve_model->selectCours($idclass);
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/cours",$data);
        $this->load->view("eleve/_global/footer");

    }

    public function inbox()
    {
        $data['title'] = "Notifications";
        $data['notifications'] = $this->notifications_model->selectNotifications();
        $data['count'] = count($this->notifications_model->unreadNotifications());
        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/inbox",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function horaire()
    {
        $data['title'] = "Horaire";
        $idclass = 1;
        $data['resultats'] = $this->eleve_model->selectHoraire($idclass);
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/horaire",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function blog()
    {
        $data['title'] = "Blog";
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/blog",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function profile()
    {
        $data['infos'] = $this->session->userdata;
        // var_dump($data['infos']);die();
//        $this->load->helper('selectEleve');
//        $data['eleve'] = selectEleve($data['infos']['id']);//On doit y recuperer la id de l'eleve par la SESSION
        
        $data['title'] = "Profil";
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/profile",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function compose()
    {
        $data['title'] = "Chat Box";
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/compose",$data);
        $this->load->view("eleve/_global/footer");
    }
    public function devoir()
    {
        $data['title'] = "Devoir";
        $data['count'] = count($this->notifications_model->unreadNotifications());

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/devoir",$data);
        $this->load->view("eleve/_global/footer");
    }
}