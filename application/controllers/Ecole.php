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
    public function pre_inscription()
    {
        $nom = $this->input->post("nom");
        $post_nom = $this->input->post("post_nom");
        $prenom =$this->input->post("prenom");
        $sex = $this->input->post("sex");
        $dt = array($this->input->post("jj"), $this->input->post("mm"), $this->input->post("aa"));
        $lieu = $this->input->post("lieu");
        $nationalite = $this->input->post("nationalite");
        $classe = $this->input->post("classe");
        $ecole = $this->input->post("ecole_provenance");
        $pourc = $this->input->post("resultat");
        if (isset($nom) and isset($post_nom) and isset($prenom) and isset($sex) and isset($dt) and isset($lieu) and isset($nationalite) and isset($classe) and isset($ecole) and isset($pourc)) {
            $this->load->model("ecole_model");
            $validation = $this->ecole_model->admission($nom, $post_nom, $prenom, $sex, $dt, $lieu, $nationalite, $classe, $ecole, $pourc);
            $this->index();
        }
        else{
            $this->admissions();
        }
    }
    public function courses()
    {
        $this->load->model('ecole_model');
        $this->load->model('classe_model');
        $this->load->model('dispenser_model');
        $this->load->model('matiere_model');

        $data["classes"] = $this->classe_model->selectClasses();

        
        foreach ($data["classes"] as $classe) {            
            $matieres[$classe["id"]] = $this->matiere_model->selectCours($classe["id"]);
        }  

        $data["matieres"] = $matieres;

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