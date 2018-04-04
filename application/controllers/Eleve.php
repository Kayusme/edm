<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve  extends CI_Controller
{
    public function index()
    {
        //if (!empty($_SESSION['auth']['admin'])){
            $data['title'] = "Page d'administration";
            $this->load->view("eleve/_global/header",$data);
            $this->load->view("eleve/_global/nav");
            $this->load->view("eleve/index",$data);
            $this->load->view("eleve/_global/footer");
        /*}else{
            redirect("eduqueadmin/login");
        }*/

    }

    public function login()
    {
        $data['title'] = "Resultat";
        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/basic_tables",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function cours()
    {
        $data['title'] = "Cours";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/cours",$data);
        $this->load->view("eleve/_global/footer");

    }

    public function inbox()
    {
        $data['title'] = "Messageries";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/inbox",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function horaire()
    {
        $data['title'] = "Journal de classe";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/horaire",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function blog()
    {
        $data['title'] = "Journal de classe";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/blog",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function profile()
    {
        $data['title'] = "Journal de classe";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/profile",$data);
        $this->load->view("eleve/_global/footer");
    }

    public function compose()
    {
        $data['title'] = "Chat Box";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/compose",$data);
        $this->load->view("eleve/_global/footer");
    }
    public function devoir()
    {
        $data['title'] = "Devoir";

        $this->load->view("eleve/_global/header",$data);
        $this->load->view("eleve/_global/nav");
        $this->load->view("eleve/devoir",$data);
        $this->load->view("eleve/_global/footer");
    }
}