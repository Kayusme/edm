
<!-- about -->
	<div class="about-w3layouts">
		<div class="container">
			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<div class="gallery-grid-images agileits w3layouts">
                    <?php
                    $resultats = imgFromDir("eduquemoi/images/a");
                    foreach ($resultats as $resultat) {
                    ?>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-1 history-grid-image">
						<img src="<?=base_url($resultat)?>" alt="Agileits W3layouts" class="zoom-img">
					</div>
                        <?php
                    }
                    ?>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2 wow slideInRight">
				<h2 class="tittle-agileits-w3layouts">A Propos de Eduque-moi</h2>
				<h5>Notre VISION</h5>
				<p class="para-w3-agile">Etre reconnu comme chef de file de l’innovation dans les pratiques de modernisation de l’enseignement congolais.</p>
                <h5>Notre MISSION</h5>
				<p class="para-w3-agile">Moderniser, développer la transmission des informations dans le secteur de l’enseignement.</p>
				<a href="<?=site_url('eduquemoi/single')?>" class="button-w3layouts hvr-rectangle-out">en savoir plus</a>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!-- //about -->

<!--/services-->
<div class="services-w3-agileits w3agileits-ref">
	<div class="col-md-6 services-left">
		<div class="service-grid1">
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-language" aria-hidden="true"></i>
				<h5>Cours de langue</h5>
				<p></p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-users" aria-hidden="true"></i>
				<h5>Enseignants qualifiés</h5>
				<p></p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				<h5>Formation continue</h5>
				<p></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="service-grid2">
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-book" aria-hidden="true"></i>
				<h5>Bibliothèque en ligne</h5>
				<p></p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-percent" aria-hidden="true"></i>
				<h5>Bulletin Electronique</h5>
				<p></p>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
				<h5>A votre service</h5>
				<p></p>
			</div>
			<div class="clearfix"></div>
		</div>		
	</div>
	<div class="col-md-6  services-right">
		<div class="services-info">
			<h3 class="tittle-agileits-w3layouts white-w3ls">Nos meilleurs services</h3>
			<p class="para-w3-agile white-w3ls"></p>
			<a href="<?=site_url('eduquemoi/single')?>" class="button-w3layouts hvr-rectangle-out">Apprendre plus</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--//services-->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="tittle-agileits-w3layouts">Testimonials</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
                         <?php
                         $i=0;
                         $nom[]="Ben Sulumu"; $nom[]="Noemie Campbell";
                         $details[]='Parent d\'eleves'; $details[]='Encadreur';
                         $resultats = imgFromDir("eduquemoi/images/testimonials");
                         foreach ($resultats as $resultat) {
                         ?>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"></p>
										<h4><?=$nom[$i]?></h4>
										<span><?=$details[$i]?></span>
									</div>	
									<div class="col-md-4 test-grid2">
                                        <img src="<?=base_url($resultat)?>" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
                             <?php
                             $i++;
                         }
                         ?>
<!--							<div class="agile">-->
<!--							   	<div class="test-grid">-->
<!--							   		<div class="col-md-8 test-grid1">-->
<!--										<p class="para-w3-agile">-->
<!--										</p>-->
<!--										<h4>Andery</h4>-->
<!--										<span></span>-->
<!--									</div>	-->
<!--									<div class="col-md-4 test-grid2">-->
<!--                                        <img src="--><?//=base_url("assets/eduquemoi/images/t2.jpg")?><!--" alt="" class="img-r">-->
<!--									</div>-->
<!--								</div>	-->
<!--								<div class="clearfix"></div>-->
<!--							</div>-->
<!--							<div class="agile">-->
<!--							   	<div class="test-grid">-->
<!--							   		<div class="col-md-8 test-grid1">-->
<!--										<p class="para-w3-agile">-->
<!--										    </p>-->
<!--										<h4>williams</h4>-->
<!--										<span></span>-->
<!--									</div>	-->
<!--									<div class="col-md-4 test-grid2">-->
<!--                                        <img src="--><?//=base_url("assets/eduquemoi/images/t3.jpg")?><!--" alt="" class="img-r">-->
<!--									</div>-->
<!--								</div>	-->
<!--								<div class="clearfix"></div>-->
<!--							</div>-->
<!--							<div class="agile">-->
<!--							   	<div class="test-grid">-->
<!--							   		<div class="col-md-8 test-grid1">-->
<!--										<p class="para-w3-agile">-->
<!--										    </p>-->
<!--										<h4>Shane Smith</h4>-->
<!--										<span>Lorem Ipsum</span>-->
<!--									</div>	-->
<!--									<div class="col-md-4 test-grid2">-->
<!--                                        <img src="--><?//=base_url("assets/eduquemoi/images/t4.jpg")?><!--" alt="" class="img-r">-->
<!--									</div>-->
<!--								</div>	-->
<!--								<div class="clearfix"></div>-->
<!--							</div>	-->
					</div>
				</div>	
		</div>
	</div>
</div>
<!-- //agile_testimonials -->