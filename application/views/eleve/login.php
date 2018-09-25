<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?= BASE_URL() ?>assets/statics/eleve/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?= BASE_URL() ?>assets/statics/eleve/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery -->
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="<?= BASE_URL() ?>assets/statics/eleve/images/logo.png" alt="" style="max-height: 200px;"/></a>
  </div>
  <h2 class="form-heading">connexion</h2>
  <div class="app-cam">
	  <?php echo form_open('eleve/login')?>
		<input type="text" class="text" name="matricule" placeholder="Matricule">
		<input type="password" name="password" placeholder="Mot de Passe">
		<input type="submit" value="Connecter">
		<ul class="new center">
			<li class="new_left"><p><a href="#">Mot de passe Oublié ?</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
  <script src="<?= BASE_URL() ?>assets/statics/eleve/js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?= BASE_URL() ?>assets/statics/eleve/js/bootstrap.min.js"></script>
</body>
</html>