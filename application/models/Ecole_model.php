<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecole_model extends CI_Model
{
	function selectClass()
	{
		$this->db->select('*');
		$this->db->from('classe');
		
		return $this->db->get()->result_array();
	}
	function selectAllCours()
	{
		$this->db->select('*');
		$this->db->from('matiere');

		return $this->db->get()->result_array();
	}
}