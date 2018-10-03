<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispenser_model extends CI_Model
{

    public function selectIdDispenser($id_classe)
    {
        $this->db->select('id');
        $this->db->where('idClasse',$id_classe);
		$this->db->from('dispenser');
		
        $lignes = $this->db->get();
        $i = 0;
        foreach ($lignes->result() as $ligne) {
            $retour[$i] = $ligne->id;
            $i++;
        }

        return $retour;

    }

    public function selectIdMatiereDispenserByClasse($id_classe)
    {
        $this->db->select('idMatiere');
        $this->db->where('idClasse',$id_classe);
		$this->db->from('dispenser');
		
        $lignes = $this->db->get();
        $i = 0;
        foreach ($lignes->result() as $ligne) {
            $retour[$i] = $ligne->idMatiere;
            $i++;
        }
        
        return $retour;

    }

    public function selectMomMatiereDispenserByClasse($id_classe)
    {
        $this->db->select('idMatiere');
        $this->db->where('idClasse',$id_classe);
		$this->db->from('dispenser');
		
        $lignes = $this->db->get();
        $i = 0;
        foreach ($lignes->result() as $ligne) {
            $retour[$i] = $ligne->idMatiere;
            $i++;
        }
        
        return $retour;

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