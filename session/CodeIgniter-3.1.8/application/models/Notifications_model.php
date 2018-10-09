<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_model extends CI_Model
{
    public function selectNotifications()
    {
        $this->db->select('*');
        $this->db->from('notifications');
        $this->db->order_by('date','DESC');
		
		return $this->db->get()->result_array();
    }
    public function unreadNotifications()
    {
        $this->db->select('*');
        $this->db->from('notifications');
        $this->db->where('read_n',0);
        $this->db->order_by('date','DESC');
		
		return $this->db->get()->result_array();
    }
    public function readNotification($id)
    {
        $this->db->from('notifications');
        $this->db->update('read_n',1);
        $this->db->where('id',$id);
		
		return $this->db->get()->result_array();
    }

}