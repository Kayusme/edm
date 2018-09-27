<?php
if (!function_exists('selectHoraire')) {
    function selectHoraire($idClass)
    {
        $bdd = new PDO('mysql:host=localhost;dbname=edm', 'root', '');
        $q = $bdd->prepare("SELECT * FROM horaire,classe,matiere,jour WHERE(horaire.idClasse = classe.id AND horaire.idMatiere = matiere.id AND horaire.idJour = jour.id) AND classe.id = ?");
        $q->execute([$idClass]);
        $horaires = [];
        while ($d = $q->fetchAll()) {
            $horaires[] = $d;
        }
        return $horaires;
    }
}