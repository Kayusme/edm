<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique_model extends CI_Model
{

    public function pourcentage($minimum, $maximum)
    {
        $valeur_sans_pourcentage = $minimum / $maximum;
        $valeur_avec_pourcentage = $valeur_sans_pourcentage * 100;

        return $valeur_avec_pourcentage;
    }

}