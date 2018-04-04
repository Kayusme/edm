<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 22/08/2017
 * Time: 22:08
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Ecole  extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Accueil';
        $this->load->view('ecole/_global/header',$data);
        $this->load->view('ecole/index',$data);
        $this->load->view('ecole/_global/footer');
    }
    public function about()
    {
        $data['title'] = 'A Propos';
        $this->load->view('ecole/_global/header2',$data);
        $this->load->view('ecole/about',$data);
        $this->load->view('ecole/_global/footer');
    }
    public function academics()
    {
        $data['title'] = 'Academie';
        $this->load->view('ecole/_global/header2',$data);
        $this->load->view('ecole/academics',$data);
        $this->load->view('ecole/_global/footer');
    }
    public function admissions()
    {
        $data['title'] = 'Admissions';
        $this->load->view('ecole/_global/header2',$data);
        $this->load->view('ecole/admissions',$data);
        $this->load->view('ecole/_global/footer');
    }
    public function courses()
    {
        $data['title'] = 'Cours';
        $this->load->view('ecole/_global/header2',$data);
        $this->load->view('ecole/courses',$data);
        $this->load->view('ecole/_global/footer');
    }
    public function contact()
    {
        $data['title'] = 'Contact';
        $this->load->view('ecole/_global/header2',$data);
        $this->load->view('ecole/contact',$data);
        $this->load->view('ecole/_global/footer');
    }
}