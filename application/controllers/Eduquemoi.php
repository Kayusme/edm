<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eduquemoi extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('eduquemoi_model');
    }
    public function index()
    {
        $this->session->set_userdata(['jo'=>"Jonthan","ljo"=>'LJOBOY']);
        $data['title'] = 'eduque-moi';
        $this->load->view('eduquemoi/_global/header',$data);
        $this->load->view('eduquemoi/_global/navbar');
        $this->load->view('eduquemoi/index',$data);
        $this->load->view("eduquemoi/liens");
        $this->load->view('eduquemoi/_global/footer');

    }
    function create($file){
        $this->db->set('ne_lang',$this->input->post('ne__lang'));
        $id = $this->db->insert_id();
        return $id;
    }
    public function about()
    {
        
        echo "<pre>";
        print_r ($this->session);
        echo "</pre>";
        die;
        $data['title'] = 'a Propos';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/about',$data);
        $this->load->view('eduquemoi/_global/footer');
    }
    public function gallery()
    {
        $data['title'] = 'gallerie';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/gallery',$data);
        $this->load->view('eduquemoi/_global/footer');
    }
    public function ecoles()
    {
        $data['title'] = 'Lites d\'ecoles';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/ecoles',$data);
        $this->load->view('eduquemoi/_global/footer');
    }
    public function contact()
    {
        $data['title'] = 'contact';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/contact',$data);
        $this->load->view('eduquemoi/_global/footer');
    }
    public function single()
    {
        $data['title'] = 'single';
        $this->load->view('eduquemoi/_global/header2',$data);
        $this->load->view('eduquemoi/single',$data);
        $this->load->view('eduquemoi/_global/footer');
    }
      
    //Inscription a la newsletter
    public function newsletter()
    {
        $this->form_validation->set_rules('mail', 'Mail', 'required', array('required' => 'Le login est invalide'));
        
        if ($this->form_validation->run()) {
            $mail = $this->input->post("mail");
            
            $result = $this->eduquemoi_model->newsletter($mail);
            if($result)
               echo 'Success';
            redirect('eduquemoi/index');

        }
    }
}