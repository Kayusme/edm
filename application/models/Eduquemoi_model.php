<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eduquemoi_model extends CI_Model
{

    function newsletter($email)
    {
        $now = date('Y-m-d');
        $this->db->set('email',$email);
        $this->db->set('dateInscription',$now);

        return $this->db->insert('mails');
    }
}