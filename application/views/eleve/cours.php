<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="widget_head">COURS</div>
            <?php
                $idclass=1;
                $resultats = selectCours($idclass);
//                var_dump($resultats);die();
                foreach ($resultats as $resultat) {
            ?>
		   <div class="widget_1">
		 	 <div class="col-sm-3 widget_1_box">
                <div class="tile-progress bg-info">
                    <div class="content">
                        <h4><i class="fa fa-dashboard icon-sm"></i> <?= strtoupper($resultat[6])?></h4>
                        <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
                        <span><?= ucfirst($resultat[7])?></span>
                    </div>
                </div>
             </div>
              <div class="clearfix"> </div>
		   </div>
            <?php }?>

		   <div class="widget_1">
             <div class="col-sm-3 widget_1_box">
                <div class="tile-progress bg-info">
                    <div class="content">
                        <h4><i class="fa fa-dashboard icon-sm"></i> EDUCATION A LA VIE</h4>
                        <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
                        <span></span>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 widget_1_box">
                <div class="tile-progress bg-success">
                    <div class="content">
                        <h4><i class="fa fa-dashboard icon-sm"></i> EDUQUATION CIVIQUE</h4>
                        <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
                        <span></span>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 widget_1_box">
               <div class="tile-progress bg-danger">
                    <div class="content">
                        <h4><i class="fa fa-dashboard icon-sm"></i> GEOGRAPHIE</h4>
                        <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
                        <span></span>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 widget_1_box">
                <div class="tile-progress bg-secondary">
                    <div class="content">
                        <h4><i class="fa fa-dashboard icon-sm"></i> HISTOIRE</h4>
                        <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
                        <span></span>
                    </div>
                </div>
              </div>
              <div class="clearfix"> </div>
           </div>
		   	 <div class="clearfix"> </div>
		   </div>
	  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->

