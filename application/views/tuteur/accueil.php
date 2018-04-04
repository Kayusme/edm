	<h1 class="agile-head"><?=ucfirst($title);?></h1>
	<div class="agile-wi">
		<!-- logIn Form -->
		<div class="signin-form">
			<form id="signin" action="#" method="post">
				<h3>Messagerie</h3>
<!--				<p>User Name </p>-->
<!--				<input type="text" name="User Name" placeholder="" required=""/>-->
<!--				<p>Password</p>-->
<!--				<input type="password" name="Password" placeholder="" required=""/>	 -->
<!--				<input type="checkbox" id="brand" name="checkbox" value="">-->
<!--				<label for="brand"><span></span> Remember me ?</label> -->
<!--				<div class="signin-agileits-bottom"> -->
<!--					<p><a href="#">Forgot password ?</a></p>    -->
<!--				</div> -->
<!--				<div class="clear"> </div>-->
<!--				<input type="submit" name="submit" value="Login">-->
<!--				<div class="social-icons">-->
<!--					<ul>  -->
<!--						<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> -->
<!--						<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  -->
<!--					</ul> -->
<!--					<div class="clear"> </div>-->
<!--				</div>	-->
			</form>
		</div>       
		<!-- //logIn Form -->
		
		<!-- Profile-form -->
			<div class="top-grids" id="myprofil">
				<div class="profile-agile">
					<h2>Profile Widget</h2>
					<div class="profile-w3">
						<img src="<?=base_url("assets/tuteur/images/bgp.jpg")?>" alt="">
					</div>
					<div class="w3layouts"> 
						<img src="<?=base_url("assets/tuteur/images/pro.jpg")?>" alt=" " />
						<h3>Lisa Kristina</h3>
						<label class="line"></label>
						<p>Maecenas khnt loream. </p>
					</div>
					<div class="agileits-w3layouts">
						<div class="w3l">
							<h4>Cours Dispensés</h4>
							<h5>5</h5>
						</div>
						<div class="w3-agile">
							<h4><a href="javascript:afficherListe()" style="color:black;">Eleves Affectés</a></h4>
							<h5>7</h5>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
            <?php include ('liste.php');?>
			<!-- //Profile-form -->
		<!-- calendar -->
		<div class="top-grids-3">
			<div class="w3l-calendar-left w3-agile-width">
				<h3>Calendrier</h3>
				<div class="calendar-heading">
									
				</div>
				<div class="monthly" id="mycalendar"></div>
			</div>
		</div>
		<div class="clear"></div> 
	<!-- //calendar -->