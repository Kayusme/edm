<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matiere_model extends CI_Model
{
    public function selectMatieres()
    {
        $this->db->select('*');
		$this->db->from('matiere');
		
		return $this->db->get();
    }

    public function selectNomMatiere($id_matiere)
    {
        $this->db->select('nom');
        $this->db->where('id',$id_matiere);
		$this->db->from('matiere');
		
        $lignes = $this->db->get();
        
        foreach ($lignes->result() as $ligne) {
            return $ligne->nom;
        }
    }
}