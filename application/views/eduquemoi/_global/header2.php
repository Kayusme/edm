<?=
doctype("html5")."\n"?>
    <html lang="fr">
    <head>
        <title><?= isset($title) ? ucfirst($title). ' | Eduque-Moi' : 'Eduque-Moi | More than your Expetations'; ?></title>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Meta-Tags -->
        <!-- Custom-Stylesheet-Links -->
        <?php
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

        header("Cache-Control: no-cache");
        header("Pragma: no-cache");
        echo meta($meta).
            '<!-- Bootstrap-CSS -->'."\n".
            link_tag("assets/eduquemoi/css/bootstrap.css").
            '<!-- Font-awesome-CSS -->'."\n".
            link_tag("assets/eduquemoi/css/font-awesome.css").
            '<!-- Flex-slider-CSS -->'."\n".
            link_tag("assets/eduquemoi/css/flexslider.css").
            '<!-- Owl-carousel-CSS -->'."\n".
            link_tag("assets/eduquemoi/css/owl.carousel.css").
            link_tag("assets/eduquemoi/css/lsb.css").
            '<!-- Index-Page-CSS -->'."\n".
            link_tag("assets/eduquemoi/css/style.css").
            '<!-- //Custom-Stylesheet-Links -->'."\n".
            '<!--web-fonts-->'."\n".
            '<!-- Headings-font -->'."\n".
            link_tag("//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700").
            '<!-- Body-font -->'."\n".
            link_tag("//fonts.googleapis.com/css?family=Lato:300,400,700").
            '<!--//web-fonts-->'."\n".'<!--//fonts-->'."\n".'<!-- js -->'."\n";
        ?>
    </head>
    <body>
    <div class="banner inner-banner-w3-agileits" id="home">
        <div class="banner-overlay-agileinfo">
            <div class="top-header-agile">
                <h1><a class="col-md-4 navbar-brand" href="<?=base_url()?>">Eduque-Moi<span>Education pour tous</span></a></h1>
                <div class="col-md-4 top-header-agile-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 top-header-agile-left">
                    <ul class="num-w3ls">
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>+243 991 888 702</li>
                    </ul>
                    <div class="w3ls_search">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-3" id="link-effect-3">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=site_url('eduquemoi/index')?>" data-hover="Home">Accueil</a></li>
                                <li class="active"><a href="<?=site_url('eduquemoi/about')?>" data-hover="About Us">A Propos</a></li>
                                <li><a href="<?=site_url('eduquemoi/gallery')?>" data-hover="Gallery">Gallerie</a></li>
                                <li class="dropdown menu__item">
                                    <a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=site_url('eduquemoi/codes')?>">Codes</a></li>
                                        <li><a href="<?=site_url('eduquemoi/icons')?>">Icones</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=site_url('eduquemoi/blog')?>" data-hover="Blog">Blog</a></li>
                                <li><a href="<?=site_url('eduquemoi/contact')?>" data-hover="Mail Us">Contactez nous</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
