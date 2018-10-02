
<div id="page-wrapper">
  <div class="col-md-12 graphs">
      <div class="row">
          <div class="col-md-8">
          <table class="table">
            <tr>
              <th>
                
                    <p>Nom : <?=$eleve['nom']?></p><br />
                    <p>Post-nom : <?=$eleve['postnom']?></p><br />
                    <p>Prenom : <?=$eleve['prenom']?></p><br />
                    <p>Sexe : <?=$eleve['genre']?></p><br />
                    <p>Classe : <?=$Classe?></p><br />
              </th>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
          <h1></h1>
          <div class="col-md-4">
            <h3>Cours</h3>
            <?php
                foreach ($cours as $cour) {
            ?>
            <p><?= strtoupper($cour['nomCours'])?></p><br>
            <?php }?>
          </div>
          <div class="col-md-4">
            <h3>Cotes</h3>
            <?php
              $totcote= 0;
                foreach ($cote as $cotes) {
            ?>
            <p><?=$cotes?></p><br>
            <?php $totcote= $totcote + $cotes;
             }?>
          </div>
          <div class="col-md-4">
            <h3>Max</h3>
            <?php
              $totmax = 0;
                foreach ($max as $maxi) {
            ?>
            <p><?=$maxi?></p><br>
            <?php $totmax = $totmax + $maxi;
             }?>
          </div>
      </div>
      <?php $pourc = ($totcote / $totmax) * 100; ?>
      <div class="row">
        <div class="col-md-4">
          <p><b>Total</b></p>
        </div>
        <div class="col-md-4">
          <p><b><?=$totcote?></b></p>
        </div>
        <div class="col-md-4">
          <p><b><?=$totmax?></b></p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
            <p><b>Pourcentage</b></p>
          </div>
          <div class="col-md-4">
            <p><b><?php echo $pourc." % "; ?></b></p>
          </div>
          <div class="col-md-4"></div>
      </div>
      <div class="clearfix"></div>
         
</body>
</html>
