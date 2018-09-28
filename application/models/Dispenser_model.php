<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispenser_model extends CI_Model
{
    public function selectIdMatiereDispenserByClasse($id_classe)
    {
        $this->db->select('id');
        $this->db->where('idClasse',$id_classe);
		$this->db->from('dispenser');
		
		return $this->db->get();
    }

    public function selectMaximum($id_classe, $id_matiere)
    {
        $this->db->select('maxi');
        $this->db->where('idClasse',$id_classe);
        $this->db->where('idMatiere',$id_matiere);
		$this->db->from('dispenser');
		
		$lignes = $this->db->get();

        foreach ($lignes->result() as $ligne) {
            return $ligne->maxi;
        }

    }

    public function selectIdMatiereDispenserByAgent($id_agent)
    {
        $this->db->select('id');
        $this->db->where('idClasse',$id_agent);
		$this->db->from('dispenser');
		
		return $this->db->get();
    }
}