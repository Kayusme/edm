	<!--start-admissions-->
	<div class="admission">
		<div class="container">
			<div class="admi-top">
				<h3><?=ucfirst($title);?></h3>
				<div class="admi-main">
					<div class="col-md-7 admi-main-left">
						<div  id="top" class="callbacks_container">
			      		<ul class="rslides" id="slider4">

                            <?php
                            $resultats = imgFromDir("ecole/images/admission");
                            foreach ($resultats as $resultat) {
                                ?>
                            <li>
                                    <img src="<?=base_url($resultat)?>" alt="Agileits W3layouts" class="zoom-img">

                                <?php
                            }
                            ?>
<!--								<img src="--><?//=base_url("assets/statics/ecole/images/admi-1.jpg")?><!--" alt="">-->
						</li>
<!--						<li>-->
<!--							<img src="--><?//=base_url("assets/statics/ecole/images/admi-2.jpg")?><!--" alt="">-->
<!--						</li>-->
<!--						<li>-->
<!--							<img src="--><?//=base_url("assets/statics/ecole/images/admi-3.jpg")?><!--" alt="">-->
<!--						</li>-->
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
					</div>
                    <div class="col-md-5 admi-main-right">
                        <h4>Formulaire d'admission</h4><br>
                        <form action="" method="POST">
                        	<input type="text" name="nom" placeholder="Nom : "><br><br>
                        	<input type="text" name="post_nom" placeholder="Post-om : "><br><br>
                        	<input type="text" name="prenom" placeholder="Prenom : "><br><br>
                        	Genre : F <input type="radio" name="sex">
                        	M <input type="radio" name="sex"><br><br>
                        	Date de naissance : 
                        	JJ <select>
                        		<?php for($i = 1; $i <= 31; $i++) {?>
                        		<option><?=$i ?></option>
                        		<?php } ?>
                        	</select>
                        	MM <select>
                        		<option>janvier</option>
                        		<option>fevrier</option>
                        		<option>mars</option>
                        		<option>avril</option>
                        		<option>mai</option>
                        		<option>juin</option>
                        		<option>juillet</option>
                        		<option>aout</option>
                        		<option>octobre</option>
                        		<option>novembre</option>
                        		<option>decembre</option>
                        	</select>
                        	AA <select>
                        		<?php for($i = 1900; $i <= date('Y'); $i++) {?>
                        		<option><?=$i ?></option>
                        		<?php } ?>
                        	</select>
                        </form>
                        
                    </div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-admissions-->
	<!--Slider-Starts-Here-->
			<script src="<?=base_url('assets/statics/ecole/js/responsiveslides.min.js')?>"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->