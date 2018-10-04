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

    public function synthaxe_requete($requete, $numero_telephone)
    {
        $message = explode(" ",$requete);

        if (count($message) == 2) {
            $matricule = $message[0];
            $periode = $message[1];
        }elseif (count($message) == 3) {
            $matricule = $message[0];
            $horaire = $message[1];
            $jour = $message[2];
        }else {
            $AUTH_ID = 'MAMMU2MDRMNGE1Y2Y0YT';
            $AUTH_TOKEN = 'MjA1MzBkODE5ZTljZDI0NzViMTk4YTkwYjE2ZmE0';
            $src = '+243991888702';
            $dst = $numero_telephone;
            $text = 'Erreur dans la syntaxe. Veuillez rééssayer ou dirigez-vous vers https://eduquemoi.org/parent/bulletin.html';
            $url = 'https://api.plivo.com/v1/Account/'.$AUTH_ID.'/Message/';
            $data = array("src" => "$src", "dst" => "$dst", "text" => "$text");
            $data_string = json_encode($data);
            $ch=curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_USERPWD, $AUTH_ID . ":" . $AUTH_TOKEN);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $response = curl_exec( $ch );
            curl_close($ch);
            
            return [];
        }
        return [];
    }

    public function message_horaire($matricule, $horaire, $jour)
    {
        
    }

    public function index()
    {
        //$this->synthaxe_requete("12dj34 1P");
        //$this->load->library("../controllers/eleve");
    }

}