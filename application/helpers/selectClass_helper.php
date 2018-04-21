<?php
if (!function_exists('selectClass')){
    function selectClass(){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->query("SELECT * FROM classe");
        
        return $q;
    }
}