<?= doctype("html5")."\n"?>
<html lang="fr">
<head>
    <title><?= isset($title) ? $title. ' | Eduque-Moi' : 'Eduque-Moi | More than your Expetations'; ?></title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->
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
            'content' => 'printing, katanga, mdpriting, impression, lubumbashi'
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
        '<!-- Bootstrap-CSS -->'."\n".
        link_tag("assets/eleve/css/bootstrap.min.css").
        '<!-- Font-awesome-CSS -->'."\n".
        link_tag("assets/eleve/css/font-awesome.css").
        '<!-- Flex-slider-CSS -->'."\n".
        link_tag("assets/eleve/css/style.css").
        link_tag("assets/eleve/css/lines.css").
        link_tag("assets/eleve/css/custom.css").
        '<!--//web-fonts-->'."\n".
        link_tag("http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900")
    ?>
    <!-- jQuery -->
    <script src="<?=base_url("assets/eleve/js/jquery.min.js")?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url("assets/eleve/js/metisMenu.min.js")?>"></script>
    <script src="<?=base_url("assets/eleve/js/custom.js")?>"></script>
    <!-- Graph JavaScript -->
    <script src="<?=base_url("assets/eleve/js/d3.v3.js")?>"></script>
    <script src="<?=base_url("assets/eleve/js/rickshaw.js")?>"></script>
    <!-- chart -->
    <script src="<?=base_url("assets/eleve/js/Chart.js")?>"></script>
    <!-- //chart -->
</head>
<body>
<div id="wrapper">
