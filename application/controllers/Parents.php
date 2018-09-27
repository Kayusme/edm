<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 22/08/2017
 * Time: 22:08
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Parents  extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('parents/_global/header');
        $this->load->view('parents/login',$data);
        $this->load->view('parents/_global/footer');
    }
    public function accueil()
    {
        $data['title'] = 'eduque-moi';
        $this->load->view('parents/_global/header');
            $this->load->view('parents/_global/navbar');
        $this->load->view('parents/index',$data);
        $this->load->view('parents/_global/footer');
    }
    public function liste()
    {
        $data['title'] = 'eduque-moi';
        $this->load->view('parents/_global/header');
            $this->load->view('parents/_global/navbar');
        $this->load->view('parents/inbox',$data);
        $this->load->view('parents/_global/footer');
    }
}