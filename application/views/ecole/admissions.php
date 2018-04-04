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
			    <div class="clearfix"> </div>
					</div>
                    <div class="col-md-5 admi-main-right">
                        <h4>Annonces</h4>
                        <div class="admi-right">
                            <div class="admi-right-left">
                                <h5>1</h5>
                            </div>
                            <div class="admi-right-right">
                                <h6>Anniversaire de l'école.</h6>
                                <p>Nov  29,2013</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="admi-right">
                            <div class="admi-right-left">
                                <h5>2</h5>
                            </div>
                            <div class="admi-right-right">
                                <h6>Rentrée scolaire</h6>
                                <p>oct  23,2013</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="admi-right">
                            <div class="admi-right-left">
                                <h5>3</h5>
                            </div>
                            <div class="admi-right-right">
                                <h6>Debut des Vacances de Noël</h6>
                                <p>dec  18,2013</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="admi-right">
                            <div class="admi-right-left">
                                <h5>4</h5>
                            </div>
                            <div class="admi-right-right">
                                <h6>Debut des Vacances de Pâques</h6>
                                <p>mar  13,2013</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="admi-right">
                            <div class="admi-right-left">
                                <h5>5</h5>
                            </div>
                            <div class="admi-right-right">
                                <h6>Fête de Nouvels an avec les enseignants</h6>
                                <p>jan  3,2013</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="admin-bottom">
				<div class="col-md-3 admin-bottom-left">
					<h4>Student's Area</h4>
					<ul>
						<li><a href="#">Student Profile</a></li>
						<li><a href="#">Time Table</a></li>
						<li><a href="#">Forms Download</a></li>
						<li><a href="#">Extra Class Form</a></li>
						<li><a href="#">Exam Seating Plan</a></li>
					</ul>
				</div>
				<div class="col-md-3 admin-bottom-left">
					<h4>Departments</h4>
					<ul>
						<li><a href="#">Computer Engineering</a></li>
						<li><a href="#">Soft Engineering</a></li>
						<li><a href="#">Management Science</a></li>
						<li><a href="#">Earth & Environmental Science</a></li>
						<li><a href="#">Computer Science</a></li>
						<li><a href="#">Information Technology</a></li>
						<li><a href="#">Electrical Engineering</a></li>
					</ul>
				</div>
				<div class="col-md-3 admin-bottom-left">
					<h4>Faculty Services</h4>
					<ul>
						<li><a href="#">Attendance System</a></li>
						<li><a href="#">Employee Profile</a></li>
						<li><a href="#">Employee Profile-Visiting Faculty</a></li>
					</ul>
				</div>
				<div class="col-md-3 admin-bottom-left">
					<h4>e-services</h4>
					<ul>
						<li><a href="#">e-classes</a></li>
						<li><a href="#">e-admission</a></li>
						<li><a href="#">e-alumni</a></li>
						<li><a href="#">e-mail</a></li>
						<li><a href="#">e-library</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
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