<?php
if (!function_exists('selectEleve')){
    function selectEleve($id){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->prepare("SELECT * FROM eleve AS e WHERE e.id =?");
        $q->execute([$id]);
        $eleve = [];
        while($e = $q->fetch()){
            $eleve[] = $e;
        }
        // var_dump($eleve);die();
        return $eleve[0];
    }
}