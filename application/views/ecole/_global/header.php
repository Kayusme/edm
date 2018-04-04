<?= doctype("html5")."\n"?>
<html lang="fr">
<head>
    <title><?= isset($title) ? ucfirst($title). ' | Eduque-Moi' : 'Eduque-Moi | Education pour tous'; ?></title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <?php
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    $meta = array(
        array(
            'name' => 'robots',
            'content' => 'no-cache'
        ),
        array(
            'name' => 'description',
            'content' => 'EduqueMoi'
        ),
        array(
            'name' => 'keywords',
            'content' => 'eduquemoi, katanga, eduque, eduque-moi, lubumbashi, epsp, eduque-epsp, rdc, education, enseignement, national, p-breakers'
        ),
        array(
            'name' => 'author',
            'content' => 'P-Breakers Corp'
        ),
        array(
            'name' => 'Content-type',
            'content' => 'text/html; charset=utf-8', 'type' => 'equiv'
        ),
        array(
            'name'=>'viewport',
            'content'=>'width=device-width, initial-scale=1'
        )
    );
    echo meta($meta).
        link_tag("assets/ecole/css/bootstrap.css").
        link_tag("assets/ecole/css/style.css").
        link_tag("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    ?>

    <script src="<?=base_url("assets/ecole/js/jquery.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("assets/ecole/js/jquery.mixitup.min.js")?>"></script>
    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function () {

                    // Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="<?=base_url("assets/ecole/js/move-top.js")?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>

    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="<?=base_url("assets/ecole/js/jquery.mousewheel.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("assets/ecole/js/jquery.contentcarousel.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("assets/ecole/js/easing.js")?>"></script>
</head>
<body>
<div class="banner" id="home">
    <div class="container">
        <div class="header">
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="<?=base_url("assets/ecole/images/menu-icon.png")?>" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li class="active"><?=anchor("ecole/index","Accueil")?></a></li>
                    <li><?=anchor("ecole/about","A Propos")?></li>
                    <li><?=anchor("ecole/academics","Academie")?></li>
                    <li><?=anchor("ecole/admissions","Admission")?></li>
                    <li><?=anchor("ecole/courses","Cours")?></li>
                    <li><?=anchor("ecole/contact","Contact")?></li>
                </ul>
                <!----start-top-nav-script---->
                <script type="text/javascript" src="<?=base_url("assets/ecole/js/responsive-nav.js")?>"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
                <!----//End-top-nav-script---->
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--/start-text-slider-->
        <div  class="testimonials" id="testimonials">
            <div class="wmuSlider example1">
                <div class="container-flueid">
                    <article style="position: absolute; width:64%; opacity: 0;">
                        <div class=" cont span_2_of_3 client-main">
                            <div class="logo">
                                <a href="#"><img src="<?=base_url("assets/ecole/images/logo.png")?>" alt=""></a>
                            </div>
                            <div class="slide-text">
                                <p>Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat.</p>
                                <span> </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width:64%; opacity: 0;">
                        <div class=" cont span_2_of_3  client-main">
                            <div class="logo">
                                <a href="#"><img src="<?=base_url('assets/ecole/images/logo.png')?>" alt=""></a>
                            </div>
                            <div class="slide-text">
                                <p>Suspendisse eget lobortis lacus, et elementum tortor. Praesent metus ligula, lacinia eu sodales sed,</p>
                                <span> </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width:64%; opacity: 0;">
                        <div class="cont span_2_of_3  client-main">
                            <div class="logo">
                                <a href="#"><img src="<?=base_url('assets/ecole/images/logo.png')?>" alt=""></a>
                            </div>
                            <div class="slide-text">
                                <p>Vitae pellentesque nec, pharetra a orci. Praesent nunc nunc, egestas eget elementum sed; rutrum!</p>
                                <span> </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>

                    <script src="<?=base_url('assets/ecole/js/jquery.wmuSlider.js')?>"></script>
                    <script>
                        $('.example1').wmuSlider();
                    </script>
                </div>
            </div>
        </div>
        <!--//text-slider-->
    </div>
</div>