<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
//        var_dump($this->session);die();
//        $maSession = $this->session->userdata('matricule');
        if ($this->session->has_userdata('matricule')){
            $data['title'] = "Page d'administration";
            $data['infos'] = $this->session->userdata;
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
        $this->load->helper('selectAllCours');
        $data['cours'] = selectAllCours();
        $data['title'] = "Statistiques";
        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/statistics",$data);
        $this->load->view("eleve/_global/footer");
    }
    public function cours()
    {
        $data['title'] = "Cours";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/cours",$data);
        $this->load->view("eleve/_global/footer");

    }

    public function inbox()
    {
        $data['title'] = "Messageries";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/inbox",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function horaire()
    {
        $data['title'] = "Horaire";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/horaire",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function blog()
    {
        $data['title'] = "Blog";

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

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/profile",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function compose()
    {
        $data['title'] = "Chat Box";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/compose",$data);
        $this->load->view("eleve/_global/footer");
    }
    public function devoir()
    {
        $data['title'] = "Devoir";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/devoir",$data);
        $this->load->view("eleve/_global/footer");
    }
}