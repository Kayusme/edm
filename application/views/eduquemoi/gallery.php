				<h2 class="inner-tittle-w3layouts"><?=ucfirst($title);?></h2>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- gallery -->
	<div class="welcome">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts">Notre <span class="green-w3">Gallerie</span></h3>
			<div class="w3layouts_gallery_grids">
                <?php
                $resultats = imgFromDir("g");
                foreach ($resultats as $resultat) {
                ?>
                    <div class="col-md-4 w3layouts_gallery_grid">
                        <a href="<?=base_url("$resultat")?>" class="lsb-preview" data-lsb-group="header">
                            <div class="w3layouts_news_grid">
                                <img src="<?=base_url($resultat)?>" alt=" " class="img-responsive">
                                <div class="w3layouts_news_grid_pos">
                                    <div class="wthree_text"><h3>Eduque-Moi</h3></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->