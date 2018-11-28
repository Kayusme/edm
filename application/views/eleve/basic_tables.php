
<div id="page-wrapper">
  <div class="col-md-12 graphs">
      <div class="row">
          <div class="col-md-8">
          <table class="table">
            <tr>
              <th>
                
                    <p>Nom : <?=strtoupper($el['nom'])?></p><br />
                    <p>Post-nom : <?=strtoupper($el['postnom'])?></p><br />
                    <p>Prenom : <?=strtoupper($el['prenom'])?></p><br />
                    <p>matricule : <?=strtoupper($el['matricule'])?></p><br />
                    <p>Sexe : <?=strtoupper($el['genre'])?></p><br />
                    <p>Classe : <?=strtoupper($classe)?></p><br />
              </th>
            </tr>
          </table>
        </div>
      </div>
      <style type="text/css">
        .b {
          border: solid 1px;
        }
        .b p, .a p, h3 {
          text-align: center;
        }
        .a {
          border-top: solid 1px;
        }
      </style>
      <div class="row">
          <h1></h1>
          <div class="col-md-4 b">
            <h3>Cours</h3>
            <?php
            $i=0;
                foreach ($cours as $cour) {
                  $i = $i + 1;
            ?>
            <p><?= strtoupper($cour['nomCours'])?></p><br>
            <?php }?>
          </div>
          <div class="col-md-1 a">
            <h3>Max</h3>
            <?php
              $totmax = 0;
              foreach ($max as $maxim) {
            ?>
            <p><?=$maxim?></p><br>
            <?php $totmax = $totmax + $maxim;
             } ?>
          </div>
          <div class="col-md-1 b">
            <h3>1e p</h3>
            <?php
              $totcote1= 0;
              $a = $i;
                if (empty($p1)) {
                  while ($a != 0) {?>
                    <p>-</p><br><?php
                    $a = $a -1;
                  }
                }
                else {
                  foreach ($p1 as $cotes) {?> 
                  <p><?=$cotes?></p><br>
                  <?php $totcote1= $totcote1 + $cotes;
                }
              }?>
          </div>
          <div class="col-md-1 b">
            <h3>2e p</h3>
            <?php
              $totcote2= 0;
              $a = $i;
              if (empty($p2)) {
                  while ($a != 0) {?>
                    <p>-</p><br><?php
                    $a = $a -1;
                  }
                }
                else {
                  foreach ($p2 as $cotes) {?> 
                  <p><?=$cotes?></p><br>
                  <?php $totcote2= $totcote2 + $cotes;
                }
              }?>
          </div>
          <div class="col-md-1 a">
            <h3>Max</h3>
            <?php
              $totmaxe = 0;
              foreach ($max as $maxim) {
            ?>
            <p><?=$maxim*2?></p><br>
            <?php $totmaxe = $totmaxe + $maxim*2;
             } ?>
          </div>
          <div class="col-md-1 b">
            <h3>ex 1</h3>
            <?php
              $totcote3= 0;
              $a = $i;
              if (empty($ex1)) {
                  while ($a != 0) {?>
                    <p>-</p><br><?php
                    $a = $a -1;
                  }
                }
                else {
                  foreach ($ex1 as $cotes) {?> 
                  <p><?=$cotes?></p><br>
                  <?php $totcote3= $totcote3 + $cotes;
                }
              }?> 
          </div>
          <div class="col-md-1 a">
            <h3>Max</h3>
            <?php
              $totmaxs = 0;
              foreach ($max as $maxim) {
            ?>
            <p><?=$maxim*4?></p><br>
            <?php $totmaxs = $totmaxs + $maxim*4;
             } ?>
          </div>
      </div>
      <?php if ($totcote1 != 0) {
              $pourc1 = ($totcote1 / $totmaxe) * 100;
              $pourc1 = $pourc1 * 2;
            } else { $pourc1= 0;}
            if ($totcote2 != 0) {
              $pourc2 = ($totcote2 / $totmaxe) * 100;
              $pourc2 = $pourc2 * 2;
            } else { $pourc2= 0;}
            if ($totcote3 != 0) {
              $pourc3 = ($totcote3 / $totmaxe) * 100;
              $pourc3 = $pourc3 * 2;
            } else { $pourc3= 0;}
       ?>
      <div class="row">
        <div class="col-md-4 b">
          <p><b>Total</b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totmax?></b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totcote1?></b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totcote2?></b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totmaxe?></b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totcote3?></b></p>
        </div>
        <div class="col-md-1 b">
          <p><b><?=$totmaxs?></b></p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 b">
            <p><b>Pourcentage</b></p>
          </div>
          <div class="col-md-1 b" style="background:black;">-</div>
          <div class="col-md-1 b">
            <p><b><?php echo $pourc1." % "; ?></b></p>
          </div>
          <div class="col-md-1 b">
            <p><b><?php echo $pourc2." % "; ?></b></p>
          </div>
          <div class="col-md-1 b" style="background:black;">-</div>
          <div class="col-md-1 b"><?php echo $pourc3." % "; ?></div>
          <div class="col-md-1 b" style="background:black;">-</div>
      </div>
      <div class="clearfix"></div>
