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

    public function selectMatiere($id_matiere)
    {
        $this->db->select('*');
        $this->db->where('id',$id_matiere);
		$this->db->from('matiere');
		
		return $this->db->get();
    }
