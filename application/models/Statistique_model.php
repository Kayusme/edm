<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique_model extends CI_Model
{
    public $id_matiere;
    public $id_cours_dispense;
    public $id_periode;

    public function cours_dispense($id_matiere)
    {
        $this->db->select('id');
        $this->db->where('idMatiere',$id_matiere);
        $this->db->from('dispenser');
        
        return $this->db->get();
    }

    public function valeur_maximale($id_matiere)
    {
        $this->db->select('maxi');
        $this->db->where('idMatiere',$id_matiere);
        $this->db->from('dispenser');
        
        return $this->db->get();
    }

    public function valeur_minimale($id_cours_dispense)
    {
        $this->db->select('cote');
        $this->db->where('idDispenser', $id_cours_dispense);
        $this->db->from('dispenser');
        
        return $this->db->get();
    }

    public function pourcentage($id_matiere)
    {
        $id_cours_dispense = cours_dispense($id_matiere);
        $valeur_sans_pourcentage = valeur_minimale($id_cours_dispense) / valeur_maximale($id_matiere);
        $valeur_avec_pourcentage = $valeur_sans_pourcentage * 100;

        return $valeur_avec_pourcentage;
    }

}