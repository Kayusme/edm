<?php
if (!function_exists('selectAllCours')){
    function selectAllCours(){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->query("SELECT * FROM matiere,dispenser,classe WHERE (matiere.id = dispenser.idMatiere AND classe.id = dispenser.idClasse)");
        $cours = [];
        while($c = $q->fetch()){
            $cours[] = $c;
        }
        return $cours;
    }
}
