<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Statistiques';
        
        $this->load->model('statistique_model');
        $data['valeur_minimale'] = $this->statistique_model->valeur_minimale(1);
        $data['valeur_maximale'] = $this->statistique_model->valeur_maximale(2);

        $data['pourcentage'] = $this->statistique_model->pourcentage(2);

        $this->load->view('eleve/_global/header',$data);
        $this->load->view('eleve/statistics',$data);
        $this->load->view('eleve/_global/footer');
    }
}