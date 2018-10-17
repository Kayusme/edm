<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve_model extends CI_Model
{

    function login($matricule, $password)
    {
        $this->db->select('*');
        $this->db->where('matricule',$matricule);
        $this->db->from('eleve');
        $q = $this->db->get();

        $user = $q->row_array();
        if($user['pwd']){
            if(password_verify($password, $user['pwd'])){
                return $user;
            }
            // else{
            //     print_r("***Mot de passe non-Concordants(password_verify failed)*** ");
            // }

        }
        return null;
    }
    
    function selectHoraire($idClass, $idJour){
        $this->db->select('*,matiere.nom as ncours');
        $this->db->from('horaire');
        $this->db->join('classe','horaire.idClasse = classe.id');
        $this->db->join('matiere','horaire.idMatiere = matiere.id');
        $this->db->join('jour','horaire.idJour = jour.id');
        $this->db->where('classe.id',$idClass);
        $this->db->where('horaire.idJour',$idJour);
        $res = $this->db->get()->result_array();

        return $res;
    }

    function selectCours($idClass){
        $this->db->select('*,m.nom as nomCours,m.description as descriptionCours', false);
        $this->db->from('dispenser as d');
        $this->db->join('matiere as m','d.idMatiere = m.id');
        $this->db->join('agent as a','d.idAgent = a.id');
        $this->db->join('classe as c','d.idClasse = c.id');
        $this->db->where('c.id',$idClass);
        $res = $this->db->get()->result_array();
        // var_dump($res = $this->db->get());die();

        return $res;
    }
    function selectEleve($idEleve){
        $this->db->select('*');
        $this->db->from('eleve');
        $this->db->where('id',$idEleve);
        $res = $this->db->get()->result_array();

        return $res;
    }
}