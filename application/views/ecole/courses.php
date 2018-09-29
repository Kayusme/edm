<?php
//	$cours = selectAllCours();//FIXME: Transferer tous les Models dans modele

//	 var_dump($cours);die();
?>

	<!-- Portfolio Starts Here -->
	<div class="portfolios" id="portfolio">
		<div class="container">
			<h3 class="top-head w_hd"><?=ucfirst($title);?></h3>
			<span class="line w_l_1">
				<span class="sub-line w_l_1"></span>
			</span>
			<?php
			$cl = "";
			foreach ($classes as $class) {
				$cl .= $class['id']." ";
			}
			?>
			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="<?= $cl; ?>">Tous</span></li>
                <?php foreach ($classes as $c){?>
				    <li><span class="filter" data-filter="<?=$c['id']?>"><?=$c['nom']?></span></li>
                <?php }?>
			</ul>
			<div id="portfoliolist">
                <?php foreach ($cours as $c){?>
				<div class="portfolio <?=$c['id']?> mix_all" data-cat="<?=$c['id']?>" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						<div class="port-1">
<!--                            $c[1] est le nom du cours-->
                            <h5 class="text-center"><?= ucfirst($c['nom'])?></h5>
<!--                             $c[2] est la description du cours-->
							<p><?=ucfirst($c['description'])?></p>
						</div>
							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
							</div></a>
					</div>
				</div>
                <?php }?>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<!-- Portfolio Ends Here -->