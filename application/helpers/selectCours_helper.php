<?php
if (!function_exists('selectCours')){
    function selectCours($idClass){
        $bdd = new PDO('mysql:host=localhost;dbname=edm','root','');
        $q = $bdd->prepare("SELECT * FROM dispenser,matiere,agent,classe WHERE 
                (dispenser.idMatiere = matiere.id AND dispenser.idAgent = agent.id AND dispenser.idClasse = classe.id) AND classe.id =?");
        $q->execute([$idClass]);
        $cours = [];
        while($c = $q->fetchAll()){
            $cours[] = $c;
        }
        return $cours;
    }
}