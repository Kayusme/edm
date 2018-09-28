<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcourt_model extends CI_Model
{
    public function selectClasseEleve($id_eleve)
    {
        $this->db->select('idClasse');
        $this->db->where('idEleve', $id_eleve);
        $this->db->order_by('idParcourt', 'DESC');
        $this->db->limit(1);
        $this->db->from('parcourt');
        
        $lignes = $this->db->get();
        
        foreach ($lignes->result() as $ligne) {
            return $ligne->idClasse;
        }
    }
}