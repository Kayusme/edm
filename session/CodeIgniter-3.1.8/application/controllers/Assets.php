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
        redirect(base_url());
    }

    public function statics(string $first = null, string $second = null,string $third = null, string $fourth = null)
    {
        $this->load->helper("file");
        if ($fourth != null)
            $last = $fourth;
        else
            $last = $third;
        $mime = get_mime_by_extension($last);
        if ($mime){
            header("Content-type: ".$mime);
            $p = $first."/".$second."/".$third;
            $p = ($fourth != null) ? $p."/".$fourth : $p;
            $this->load->view($p);
        }else{
            redirect(base_url());
        }
    }
}