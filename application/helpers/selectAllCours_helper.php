<?php
if (!function_exists('selectAllCours')){
    function selectAllCours(){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->query("SELECT * FROM matiere AS m,dispenser As d,classe As c WHERE (m.id = d.idMatiere AND c.id = d.idClasse)");
        $cours = [];
        while($c = $q->fetch()){
            $cours[] = $c;
        }
//        var_dump($cours);die();
        return $cours;
    }
}
