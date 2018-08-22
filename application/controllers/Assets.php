<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 21/08/2018
 * Time: 22:29 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller
{
    public function index()
    {
        redirect(base_url());//TODO: import Font-Awesome from internet
    }

    public function statics(string $first = null, string $second = null,string $third = null)
    {
        $this->load->helper("file");
        $mime = get_mime_by_extension($third);
        if ($mime){
            header("Content-type: ".$mime);
            $this->load->view($first."/".$second."/".$third);
        }else{
            redirect(base_url());
        }
    }
}