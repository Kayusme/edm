<?php
if (!function_exists('selectCours')){
    function selectCours($idClass){
        global $db;
        $q = $db->prepare("SELECT * FROM dispenser,matiere,agent,classe WHERE 
                (dispenser.idMatiere = matiere.id AND dispenser.idAgent = agent.id AND dispenser.idClasse = classe.id) AND classe.id =?");
        $q->execute([$idClass]);
        $cours = $q->fetch();
        return $cours;
    }
}