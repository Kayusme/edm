<?php
	$cours = selectAllCours();

//	 var_dump($cours);die();
?>

	<!-- Portfolio Starts Here -->
	<div class="portfolios" id="portfolio">
		<div class="container">
			<h3 class="top-head w_hd"><?=ucfirst($title);?></h3>
			<span class="line w_l_1">
				<span class="sub-line w_l_1"></span>
			</span>
			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="1 card icon logo web">Tous</span></li>
                <?php foreach ($cours as $c){?>
				    <li><span class="filter" data-filter="<?=$c['idSalle']?>"><?=$c['nom']?></span></li>
<!--				<li><span class="filter" data-filter="card">2 ème Années</span></li>-->
<!--				<li><span class="filter" data-filter="icon">3 ème Années</span></li>-->
<!--				<li><span class="filter" data-filter="logos">4 ème Années</span></li>-->
                <?php }?>
			</ul>
			<div id="portfoliolist">
                <?php foreach ($cours as $c){?>
				<div class="portfolio <?=$c['idSalle']?> mix_all" data-cat="<?=$c['idSalle']?>" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper">		
						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						<div class="port-1">
							<h5><?=$c['nom']?></h5>
							<p><?=$c['description']?></p>
							<div class="port-bttn">
								<a href="#">Lire Plus</a>
							</div>
						</div>
							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
							</div></a>
					</div>
				</div>
                <?php }?>
<!--				<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE ARABE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>		-->
<!--				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--						<div class="port-1">-->
<!--							<h5>LANGUE DU BENGALE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>				-->
<!--				<div class="portfolio logos mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE ANGLAISE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>	-->
<!--				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE CHINOISE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>			-->
<!--				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE JAPONAISE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>	-->
<!--				<div class="portfolio logos mix_all" data-cat="app" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE FRANCAISE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE ESPAGNOLE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="portfolio 1 mix_all" data-cat="1" style="display: inline-block; opacity: 1;">-->
<!--					<div class="portfolio-wrapper">		-->
<!--						<a href="index.html" class="b-link-stripe b-animate-go  thickbox">-->
<!--							<div class="port-1">-->
<!--							<h5>LANGUE PORTUGAISE</h5>-->
<!--							<p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.Eum cu tantas legere complectitur, hinc utamur ea eam.</p>-->
<!--							<div class="port-bttn">-->
<!--								<a href="#">Lire Plus</a>-->
<!--							</div>-->
<!--						</div>-->
<!--							<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>-->
<!--							</div></a>-->
<!--					</div>-->
<!--				</div>-->
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<!-- Portfolio Ends Here -->