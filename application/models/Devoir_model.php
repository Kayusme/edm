<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devoir_model extends CI_Model
{
    function selectDevoir($idClass){
        $this->db->select('*');
        $this->db->from('devoir');
        $this->db->join('classe','devoir.idClass = classe.id');
        $this->db->join('matiere','devoir.idMatiere = matiere.id');
        $this->db->where('classe.id',$idClass);
        $res = $this->db->get()->result_array();

        return $res;
    }
}