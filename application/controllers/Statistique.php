<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Statistiques';
        
        $this->load->model('statistique_model');
        $this->load->model('cote_model');
        $this->load->model('dispenser_model');
        $this->load->model('parcourt_model');
        $this->load->model('matiere_model');

        $data["eleve"] = 1;
        $data["matiere"] = 2;
        $data["dispenser"] = 1;

        //Reccupère la dernière classe de l'élève
        $data["classe"] = $this->parcourt_model->selectClasseEleve($data["eleve"]);

        //Tableaux contenant tous les id de la table
        $data["id_cours_dispenses"] = $this->dispenser_model->selectIdDispenser($data["classe"]);

        //Tableaux contenant tous les id des matieres
        $data["matieres"] = $this->dispenser_model->selectIdMatiereDispenserByClasse($data["classe"]);

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
                //echo $cote[$i]." / ".$max[$i]." * 100 = ";
                $data["periode1"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]).", ";
            } else {
                $data["periode1"] = $this->statistique_model->pourcentage($cote[$i], $max[$i]);
            }         

        }

        for ($i=0; $i < count($data["matieres"]); $i++) { 

            if ($i != count($data["matieres"]) - 1) {
                //echo $cote[$i]." / ".$max[$i]." * 100 = ";
                echo $this->matiere_model->selectNomMatiere($data["matieres"][$i]).", ";
            } else {
                echo $this->matiere_model->selectNomMatiere($data["matieres"][$i]);
            }         

        }
        
        

    }
}