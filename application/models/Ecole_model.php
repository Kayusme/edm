<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecole_model extends CI_Model
{

	function __construct(){

		parent::__construct();
	}


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
	function admission($nom, $post_nom, $prenom, $sex, $dt, $lieu, $nation, $classe, $ecole, $pourc)
	{
		$this->db->set("nom", $nom);
		$this->db->set("post_nom", $post_nom);
		$this->db->set("prenom", $prenom);
		$this->db->set("genre", $sex);
		$this->db->set("dtnaissance", "$dt[0]-$dt[1]-$dt[2]");
		$this->db->set("lieu", $lieu);
		$this->db->set("nationalite", $nation);
		$this->db->set("classe", $classe);
		$this->db->set("ecole", $ecole);
		$this->db->set("pourc", $pourc);
		return $this->db->insert("preinscription"); 
	}
}