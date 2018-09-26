<?php
$idclass=1;
$resultats = selectDevoir($idclass);
//var_dump($resultats);die();
?>

<div id="page-wrapper">
    <div class="graphs">
        <h2 class="text-center">Devoir</h2>
        <div class="container-fluid">
            <?php
                $idclass=1;
                $resultats = selectDevoir($idclass);
                foreach ($resultats as $resultat) {
            ?>
            <div class="row">
                <h3><?= $resultat['matiere.nom']?></h3><br /><br />
                <div class="col-md-3">
                    <p>Du <?= $resultat['devoir.date_debut']?> Au <?= $resultat['devoir.date_depot']?></p>
                </div>
                <div class="col-md-9">
                    <p><?= $resultat['devoir.questionnaire']?></p>
                    <p><?= $resultat['devoir.link']?></p>
                </div>
            </div>
            </br>
            <?php }?>
    </div>


