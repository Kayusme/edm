<div id="page-wrapper" style="background-color: #A5A3A3">
	<div class="row">
		<div class="col-md-2"></div>
    <div class="col-md-8"  style="background-color: white; margin-top: 5%">
       <div class="row">
       		<div class="col-lg-5">
				<br /><br /><img src="<?= $infos['img'] ?>" class="img-rounded" alt="Cinque Terre" 	width="300" height="300">
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-6">
				<br /><br /><br /><p>Nom : <?= strtoupper($infos['nom']);?></p><br />
				<p>Post-nom : <?= strtoupper($infos['postnom']);?></p><br />
				<p>Prénom : <?= ucfirst($infos['prenom']);?></p><br />
				<p>Matricule : <?= ucfirst($infos['matricule']);?></p><br />
				<p>Promotion : 5è</p><br />
				<p>Option : BIO-CHIMIE</p><br />
				<p>Ecole : KIZITO</p><br />
				<p>Sex : <?= strtoupper($infos['genre']);?></p><br />
				<p>Lieu de naissance :  <?= strtoupper($infos['lieuNaissance']);?></p><br />
				<p>Date de naissance :  <?= strtoupper($infos['dateNaissance']);?></p><br />
				<p>Nationnalité : <?= strtoupper($infos['nationnaliter']);?>   </p><br />
				<p>Ville : Lubumbashi</p><br />
				<p>Adresse : <?= strtoupper($infos['adresse']);?> </p><br />
			</div>	
		</div>
    </div>
    <div class="col-md-2"></div>
	</div>
    
</div>