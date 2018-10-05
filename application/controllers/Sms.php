<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 22/08/2017
 * Time: 22:25
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller
{

    public function statistic_out()
    {
        
        $this->load->model('eleve_model');
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
            $cote[$i] = $this->cote_model->selectCote1($id_cours_dispense,1,$data["eleve"]);
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
        return $data;
    }


    public function synthaxe_requete($requete, $numero_telephone)
    {
        $message = explode(" ",$requete);

        if (count($message) == 2) {
            $matricule = $message[0];
            $periode = $message[1];
        }elseif (count($message) == 3) {
            $matricule = $message[0];
            $horaire = $message[1];
            $jour = $message[2];
        }else {
            $AUTH_ID = 'MAMMU2MDRMNGE1Y2Y0YT';
            $AUTH_TOKEN = 'MjA1MzBkODE5ZTljZDI0NzViMTk4YTkwYjE2ZmE0';
            $src = '+243991888702';
            $dst = $numero_telephone;
            $text = 'Erreur dans la syntaxe. Veuillez rééssayer ou dirigez-vous vers https://eduquemoi.org/parent/bulletin.html';
            $url = 'https://api.plivo.com/v1/Account/'.$AUTH_ID.'/Message/';
            $data = array("src" => "$src", "dst" => "$dst", "text" => "$text");
            $data_string = json_encode($data);
            $ch=curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_USERPWD, $AUTH_ID . ":" . $AUTH_TOKEN);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $response = curl_exec( $ch );
            curl_close($ch);
            
            return [];
        }
        return [];
    }

    public function message_horaire($matricule, $horaire, $jour)
    {
        
    }

    public function message_resultat($matricule, $periode)
    {
        
    }

    public function index()
    {
        //$this->synthaxe_requete("12dj34 1P");
        //$this->load->library("../controllers/eleve");
        var_dump($this->statistic_out());die();
    }

}