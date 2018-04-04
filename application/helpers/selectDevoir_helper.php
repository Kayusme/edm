<?php
if (!function_exists('selectDevoir')){
    function selectDevoir($idClass){
        global $db;
        $q = $db->prepare("SELECT * FROM devoir,matiere,classe WHERE(devoir.idClass = classe.id AND devoir.idCours = matiere.id)AND classe.id =?");
        $q->execute([$idClass]);
        $cours = $q->fetch();
        return $cours;
    }
