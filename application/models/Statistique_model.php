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

        $lignes = $this->db->get();
        
        foreach ($lignes->result() as $ligne) {
            return $ligne->id;
        }

    }

    public function valeur_maximale($id_matiere)
    {
        $this->db->select('maxi');
        $this->db->where('idMatiere',$id_matiere);
        $this->db->from('dispenser');
        
        $lignes = $this->db->get();

        foreach ($lignes->result() as $ligne) {
            return $ligne->maxi;
        }
    }

    public function valeur_minimale($id_cours_dispense)
    {
        $this->db->select('cote');
        $this->db->where('idDispenser', $id_cours_dispense);
        $this->db->from('cote');
        
        $lignes = $this->db->get();
        
        foreach ($lignes->result() as $ligne) {
            return $ligne->cote;
        }

    }

    public function pourcentage($id_matiere)
    {
        $id_cours_dispense = $this->cours_dispense($id_matiere);
        $valeur_sans_pourcentage = $this->valeur_minimale($id_cours_dispense) / $this->valeur_maximale($id_matiere);
        $valeur_avec_pourcentage = $valeur_sans_pourcentage * 100;

        return $valeur_avec_pourcentage;
    }

}