<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 24/08/2017
 * Time: 13:54
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Front_end extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load_lang();
    }

    protected function load_lang()
    {
        if ($this->uri->segment(1)== 'en' ||
            $this->uri->segment(1)== 'fr' ||
            $this->uri->segment(1)== 'es'
        ){
            $this->session->set_userdata("lang",$this->uri->segment(1));
            redirect(base_url());
        }
        if ($this->session->userdata('lang')=="es"){
            $lang = "spanish";
            $this->config->set_item('language',$lang);
            $this->session->userdata("lang",'es');
        }
        elseif($this->session->userdata('lang')=="en"){
            $lang = "english";
            $this->config->set_item('language',$lang);
            $this->session->userdata("lang",'en');
        }
        else{
            $lang = "french";
            $this->config->set_item('language',$lang);
            $this->session->userdata("lang",'fr');
        }

    }
}