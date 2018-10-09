<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classe_model extends CI_Model
{

    public function selectClasses()
    {
        $this->db->select('*');
		$this->db->from('classe');
		
		return $this->db->get()->result_array();
    }

    public function selectClasse($nom_salle)
    {
        $this->db->select('*');
        $this->db->where('nom',$nom_salle);
        $this->db->from('classe');

        return $this->db->get();
    }
}