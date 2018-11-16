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

    private $numero_telephone = $_POST['From'];
    private $message = $_POST['Body'];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('eleve_model');
        $this->load->model('statistique_model');
        $this->load->model('cote_model');
        $this->load->model('dispenser_model');
        $this->load->model('parcourt_model');
        $this->load->model('matiere_model');  
        
    }

    public function statistic_out($id_eleve)
    { 

        //La valeur de l'id de l'élève qui vient de la session sera placée là. 
        $data["eleve"] = $id_eleve;

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
        $cote["periode1"] = 0; $max["periode1"] = 0;
        $cote["periode2"] = 0; $max["periode2"] = 0;
        $cote["periode3"] = 0; $max["periode3"] = 0;
        $cote["periode4"] = 0; $max["periode4"] = 0;
        $cote["examen1"] = 0; $max["examen1"] = 0;
        $cote["examen2"] = 0; $max["examen2"] = 0;
        foreach ($data["id_cours_dispenses"] as $id_cours_dispense) {
            $cote["periode1"] += $this->cote_model->selectCote1($id_cours_dispense,1,$data["eleve"]);
            $cote["periode2"] += $this->cote_model->selectCote1($id_cours_dispense,2,$data["eleve"]);
            $cote["periode3"] += $this->cote_model->selectCote1($id_cours_dispense,3,$data["eleve"]);
            $cote["periode4"] += $this->cote_model->selectCote1($id_cours_dispense,4,$data["eleve"]);
            $cote["examen1"] += $this->cote_model->selectCote1($id_cours_dispense,5,$data["eleve"]);
            $cote["examen2"] += $this->cote_model->selectCote1($id_cours_dispense,6,$data["eleve"]);
        }

        foreach ($data["matieres"] as $matiere) {
            $max["periode1"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $max["periode2"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $max["periode3"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $max["periode4"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere);
            $max["examen1"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere) * 2;
            $max["examen2"] += $this->dispenser_model->selectMaximum($data["classe"],$matiere) * 2;
        }

        $data["periode1"] = $this->statistique_model->pourcentage($cote["periode1"], $max["periode1"]);
        $data["periode2"] = $this->statistique_model->pourcentage($cote["periode2"], $max["periode2"]);
        $data["periode3"] = $this->statistique_model->pourcentage($cote["periode3"], $max["periode3"]);
        $data["periode4"] = $this->statistique_model->pourcentage($cote["periode4"], $max["periode4"]);
        $data["examen1"] = $this->statistique_model->pourcentage($cote["examen1"], $max["examen1"]);
        $data["examen2"] = $this->statistique_model->pourcentage($cote["examen2"], $max["examen2"]);
        
        return $data;
    }


    public function synthaxe_requete($requete)
    {
        $message = explode(" ",$requete);
        if (count($message) == 2) {
            $matricule = strtolower($message[0]);
            $periode = strtolower($message[1]);
            $this->message_resultat($matricule, $periode);          
        }elseif (count($message) == 3) {
            $matricule = $message[0];
            $horaire = $message[1];
            $jour = $message[2];
        }else {
            $this->message_erreur();  
        }
    }

    public function message_horaire($matricule, $horaire, $jour)
    {
        
    }
    
    public function message_resultat($matricule, $periode)
    {
        if ($periode == "p1" || $periode = "1p") {
            $eleve = $this->eleve_model->selectEleveByMatricule($matricule)[0];
            $resultat = $this->statistic_out($eleve["id"])["periode1"];
            $this->text_resultat($eleve,$resultat);
        }elseif ($periode == "p2" || $periode = "2p") {
            $eleve = $this->eleve_model->selectEleveByMatricule($matricule)[0];
            $resultat = $this->statistic_out($eleve["id"])["periode2"];
            $this->text_resultat($eleve,$resultat);
        }elseif ($periode == "p3" || $periode = "3p") {
            $eleve = $this->eleve_model->selectEleveByMatricule($matricule)[0];
            $resultat = $this->statistic_out($eleve["id"])["periode3"];
            $this->text_resultat($eleve,$resultat);
        }elseif ($periode == "e1" || $periode = "1e") {
            $eleve = $this->eleve_model->selectEleveByMatricule($matricule)[0];
            $resultat = $this->statistic_out($eleve["id"])["examen1"];
            $this->text_resultat($eleve,$resultat);
        }elseif ($periode == "e2" || $periode = "2e") {
            $eleve = $this->eleve_model->selectEleveByMatricule($matricule)[0];
            $resultat = $this->statistic_out($eleve["id"])["examen2"];
            $this->text_resultat($eleve,$resultat);
        }else {
            echo "Erreur";
            $this->message_erreur();
        }
    }

    public function text_resultat($eleve,$resultat)
    {
        $AUTH_ID = 'MAMMU2MDRMNGE1Y2Y0YT';
        $AUTH_TOKEN = 'MjA1MzBkODE5ZTljZDI0NzViMTk4YTkwYjE2ZmE0';
        $src = '+243991888702';
        $dst = $this->numero_telephone;
        $text = "L'eleve ".$eleve["nom"]." ".$eleve["postnom"]." ".$eleve["prenom"]." a obtenu ".$resultat." %";
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
    }

    public function message_erreur()
    {
        echo "Erreur";
        $AUTH_ID = 'MAMMU2MDRMNGE1Y2Y0YT';
        $AUTH_TOKEN = 'MjA1MzBkODE5ZTljZDI0NzViMTk4YTkwYjE2ZmE0';
        $src = '+243991888702';
        $dst = $this->numero_telephone;
        $text = 'Erreur dans la syntaxe. Veuillez recommencer avec les informations correctes';
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
    }

    public function index()
    {        
        $this->synthaxe_requete($this->message);
    }

}