	<!--start-admissions-->
	<div class="admission">
		<div class="container">
			<div class="admi-top">
				<h3><?=ucfirst($title);?></h3>
				<div class="admi-main">
					<div class="col-md-5 admi-main-left">
						<div  id="top" class="callbacks_container">
			      		<ul class="rslides" id="slider4">

                            <?php
                            $resultats = imgFromDir("assets/ecole/images/admission");
                            foreach ($resultats as $resultat) {
                                ?>
                            <li>
                                    <img src="<?=base_url($resultat)?>" alt="Agileits W3layouts" class="zoom-img">

                                <?php
                            }
                            ?>
<!--								<img src="--><?//=base_url("assets/ecole/images/admi-1.jpg")?><!--" alt="">-->
						</li>
<!--						<li>-->
<!--							<img src="--><?//=base_url("assets/ecole/images/admi-2.jpg")?><!--" alt="">-->
<!--						</li>-->
<!--						<li>-->
<!--							<img src="--><?//=base_url("assets/ecole/images/admi-3.jpg")?><!--" alt="">-->
<!--						</li>-->
			      </ul>
			    </div>
			    <style type="text/css">
			    	input[type="text"]{
			    		width: 75%;
			    		padding: 1.5% 2%;
			    	}
			    	input[type="radio"]{
			    		width: 5%;
			    		padding: 1.5% 2%;
			    	}
			    	select[name="aa"] {
			    		width: 15%;
			    		padding: 1.5% 0.1%;
			    	}
			    	select[name="mm"], select[name="sex"] {
			    		width: 16%;
			    		padding: 1.5% 0.1%;
			    	}
			    	select[name="jj"] {
			    		width: 8%;
			    		padding: 1.5% 0.1%;
			    	}
			    	input[type="submit"] {
			    		border: none;
			    		background-color: rgb(0, 162, 232);
			    		padding: 1.5% 2%;
			    		width: 25%;
			    		color: #fff;
			    	}
			    	input[type="reset"] {
			    		position: absolute;
			    		left: 48%;
			    		border: none;
			    		background-color: rgb(0, 162, 232);
			    		padding: 1.5% 2%;
			    		width: 25%;
			    		color: #fff;
			    	}
			    	input[type="submit"]:hover, input[type="reset"]:hover
			    	{
			    		width: 23%;
			    		border : solid;
			    		border-color: rgb(0, 162, 232);
			    		background-color: transparent;
			    		color: rgb(0, 162, 232);
			    	}
			    </style>
			    <div class="clearfix"> </div>
					</div>
                    <div class="col-md-7 admi-main-right">
                        <h4>Formulaire de pre-inscription</h4><br>
                                                <?php echo form_open('ecole/pre_inscription')?>
                        	<input type="text" name="nom" placeholder="Nom : " required=""><br><br>
                        	<input type="text" name="post_nom" placeholder="Post-nom : " required=""><br><br>
                        	<input type="text" name="prenom" placeholder="Prenom : " required=""><br><br>
                        	Genre :  <select name="sex">
                        		<option>M</option>
                        		<option>F</option>
                        	</select><br><br>
                        	Date de naissance : 
                        	JJ <select name="jj">
                        		<?php for($i = 1; $i <= 31; $i++) {?>
                        		<option><?=$i ?></option>
                        		<?php } ?>
                        	</select>
                        	MM <select  name="mm">
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
                        	AA <select name="aa">
                        		<?php for($i = 1900; $i <= date('Y'); $i++) {?>
                        		<option><?=$i ?></option>
                        		<?php } ?>
                        	</select><br><br>
                        	<input type="text" name="lieu" placeholder="Lieu de naissance : " required=""><br><br>
                        	<input type="text" name="nationalite" placeholder="Nationalite : " required=""><br><br>
                        	<input type="text" name="classe" placeholder="Classe : " required=""><br><br>
                        	<input type="text" name="ecole_provenance" placeholder="Ecole de provenace : " required=""><br><br>
                        	<input type="text" name="resultat" placeholder="Pourcentage obtenu : " required=""><br><br>
                        	<input type="submit" value="valider">
                        	<input type="reset" value="annuler">
                        </form>
                        
                    </div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-admissions-->
	<!--Slider-Starts-Here-->
			<script src="<?=base_url('assets/ecole/js/responsiveslides.min.js')?>"></script>
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