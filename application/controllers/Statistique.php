<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Statistiques';
        
        $this->load->model('statistique_model');
        $this->load->model('cote_model');
        $this->load->model('dispenser_model');

        $data["cote"] = $this->cote_model->selectCote(1,1,2);
        $data["maximum"] = $this->dispenser_model->selectMaximum(1,2);

        $data['pourcentage'] = $this->statistique_model->pourcentage($data["cote"], $data["maximum"]);

        //$this->load->view('eleve/_global/header',$data);
        $this->load->view('eleve/test',$data);
        //$this->load->view('eleve/_global/footer');
    }
}