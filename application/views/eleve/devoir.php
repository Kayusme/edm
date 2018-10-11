<div id="page-wrapper">
    <div class="graphs">
        <h2 class="text-center"><?=$title?></h2>
        <div class="container-fluid">
            <?php
                foreach ($resultats as $resultat) {
            ?>
                <div class="wid_blog-desc alert alert-success">
		   	 		<div class="wid_blog-right">
		   	 			<h2><?= ucfirst($resultat['nom']);?></h2>
		   	 			<p style="color:black;"><?= ucfirst($resultat['questionnaire'])?></p>
		   	 			<ul class="list-unstyled list-inline">
                            <li><span href="#" class="text-muted"><sup>Du</sup> <?= $resultat['date_debut']?></span></li>
                            <li><span href="#" class="text-muted"><sup>Au</sup> <?= $resultat['date_depot']?></span></li>
                            <li><a href="#" class="text-muted"><?= $resultat['link']?></a></li>
                       </ul>
		   	 		</div>
		   	 		<div class="clearfix"> </div>
                </div>
                    <br>
            <?php }?>
    </div>


