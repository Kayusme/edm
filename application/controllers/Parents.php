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
        $data['title'] = 'eduque-moi';
        $this->load->view('parents/_global/header');
        $this->load->view('parents/_global/navbar');
        $this->load->view('parents/index',$data);
        $this->load->view('parents/_global/footer');
    }
}