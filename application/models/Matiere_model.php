<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matiere_model extends CI_Model
{

    function selectCours($idClass){
        $this->db->select('*,m.nom as nomCours,m.description as descriptionCours', false);
        $this->db->from('dispenser as d');
        $this->db->join('matiere as m','d.idMatiere = m.id');
        $this->db->join('classe as c','d.idClasse = c.id');
        $this->db->where('c.id',$idClass);
        $res = $this->db->get()->result_array();
        // var_dump($res = $this->db->get());die();

        return $res;
    }

    public function selectMatieres()
    {
        $this->db->select('*');
		$this->db->from('matiere');
		
		return $this->db->get()->result_array();
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