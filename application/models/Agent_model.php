<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model
{
    
    public function selectAgents()
    {
        $this->db->select('*');
		$this->db->from('agent');
		
		return $this->db->get();
    }

    public function selectAgent($id_agent)
    {
        $this->db->select('*');
        $this->db->where('id',$id_agent);
        $this->db->from('dispenser');

        return $this->db->get();
    }

}