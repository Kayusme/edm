<div id="page-wrapper">
    <div class="graphs">
	    <div class="widget_head"><h1>COURS</h1></div>
        <hr>
            <div class="widget_1">
            <?php
                foreach ($resultats as $resultat) {
            ?>
                <div class="col-sm-3 widget_1_box">
                    <div class="tile-progress bg-info">
                        <div class="content">
                            <h4><i class="fa fa-dashboard icon-sm"></i> <?= strtoupper($resultat['nomCours'])?></h4><br>
                            <!-- <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div> -->
                            <span><?= ucfirst($resultat['descriptionCours'])?></span>
                        </div>
                    </div>
                </div> 
            <?php }?>
                <div class="clearfix"> </div>
            </div>
		</div>
	</div>
</div>
