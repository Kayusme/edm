<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 22/08/2017
 * Time: 22:25
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Tuteur  extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'login';
        $this->load->view('tuteur/_global/header');
        $this->load->view('tuteur/login',$data);
        $this->load->view('tuteur/_global/footer');
    }
    public function accueil()
    {
        $data['title'] = 'eduque-moi';
        $this->load->view('tuteur/_global/header');
        $this->load->view('tuteur/accueil',$data);
        $this->load->view('tuteur/_global/footer');
    }
    public function liste()
    {
        $data['title'] = 'eduque-moi';
        $this->load->view('tuteur/_global/header');
        $this->load->view('tuteur/liste',$data);
        $this->load->view('tuteur/_global/footer');
    }
}