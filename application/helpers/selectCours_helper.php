<?php
if (!function_exists('selectCours')){
    function selectCours($idClass){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->prepare("SELECT * FROM dispenser As d,matiere As m,agent As a,classe As c WHERE 
                (d.idMatiere = m.id AND d.idAgent = a.id AND d.idClasse = c.id) AND c.id =?");
        $q->execute([$idClass]);
        $cours = [];
        while($c = $q->fetchAll()){
            $cours[] = $c;
        }
        return $cours[0];
    }
}