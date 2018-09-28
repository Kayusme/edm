<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cote_model extends CI_Model
{
    public function selectCote($id_dispenser, $id_periode)
    {
        $this->db->select('cote');
        $this->db->where('idDispenser', $id_dispenser);
        $this->db->where('idPeriode', $id_periode);
        $this->db->from('cote');
        
        $lignes = $this->db->get();
        
        foreach ($lignes->result() as $ligne) {
            return $ligne->cote;
        }
    }

}