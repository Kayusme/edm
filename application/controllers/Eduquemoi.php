<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eduquemoi extends CI_Controller {

    public function index()
    {
//        $this->load->helper('language');
//        $this->lang->load('fr','french');
        $data['title'] = 'eduque-moi';
        $this->load->view('eduquemoi/_global/header',$data);
        $this->load->view('eduquemoi/_global/navbar');
        $this->load->view('eduquemoi/index',$data);
        $this->load->view("eduquemoi/liens");
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');

    }
    function create($file){
        $this->db->set('ne_lang',$this->input->post('ne__lang'));
        $id = $this->db->insert_id();
        return $id;
    }
    public function about()
    {
        //$this->load->helper('language');
        $data['title'] = 'a Propos';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/about',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function gallery()
    {
        //$this->load->helper('language');
        $data['title'] = 'gallerie';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/gallery',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function blog()
    {
        //$this->load->helper('language');
        $data['title'] = 'blog';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/blog',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function contact()
    {
        //$this->load->helper('language');
        $data['title'] = 'contact';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/contact',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function single()
    {
        //$this->load->helper('language');
        $data['title'] = 'single';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/single',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function codes()
    {
        //$this->load->helper('language');
        $data['title'] = 'codes';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/codes',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }
    public function icons()
    {
        //$this->load->helper('language');
        $data['title'] = 'icones';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/icons',$data);
        $this->load->view("eduquemoi/_global/register");
        $this->load->view('eduquemoi/_global/footer');
    }

    //Verifie la connexion avant de le rediriger vers le bon endroit
    public function login()
    {
        var_dump($_SERVER);
    }
    
    //Inscription a la newsletter
    public function newsletter()
    {
        
    }
}