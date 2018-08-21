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
    private $badBot = 0;
    private $badIP;
    public function index()
    {
        $this->badBot++;
        if ($this->badBot == 3)
            echo "Attention !...";
        elseif ($this->badBot > 3)
            $this->badIP = $_SERVER["REMOTE_ADDR"];
        else
            redirect(base_url());
    }

    public function css()
    {
        
    }

    public function js()
    {
        
    }

    public function images()
    {
        
    }

    public function fonts()
    {
        
    }

    public function media()
    {
        
    }
}