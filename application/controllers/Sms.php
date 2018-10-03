<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 22/08/2017
 * Time: 22:25
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller
{

    public function synthaxe_requete($requete)
    {
        $message = explode(" ",$requete);

        if (count($message) == 2) {
            $matricule = $message[0];
            $periode = $message[1];
        }elseif (count($message) == 3) {
            $matricule = $message[0];
            $horaire = $message[1];
            $jour = $message[2];
        }

        print_r($message);
    }

    public function index()
    {
        $this->synthaxe_requete("12dj34 1P");
    }

}