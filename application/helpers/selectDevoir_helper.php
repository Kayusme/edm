<?php
if (!function_exists('selectDevoir')) {
    function selectDevoir($idClass)
    {
        $bdd = new PDO('mysql:host=localhost;dbname=edm', 'root', '');
        $q = $bdd->prepare("SELECT * FROM devoir,matiere,classe WHERE(devoir.idClass = classe.id AND devoir.idMatiere = matiere.id)AND classe.id =?");
        $q->execute([$idClass]);
        $devoirs = [];
        while ($d = $q->fetchAll()) {
            $devoirs[] = $d;
        }
        return $devoirs;
    }
}