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
        link_tag("assets/statics/eleve/css/bootstrap.min.css").
        '<!-- Font-awesome-CSS -->'."\n".
       '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>'."\n".
        '<!-- Flex-slider-CSS -->'."\n".
        link_tag("assets/statics/eleve/css/style.css").
        link_tag("assets/statics/eleve/css/lines.css").
        link_tag("assets/statics/eleve/css/custom.css").
        '<!--//web-fonts-->'."\n".
        link_tag("http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900")
    ?>
    <!-- jQuery -->
    <script src="<?=base_url("assets/statics/eleve/js/jquery.min.js")?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url("assets/statics/eleve/js/metisMenu.min.js")?>"></script>
    <script src="<?=base_url("assets/statics/eleve/js/custom.js")?>"></script>
    <!-- Graph JavaScript -->
    <script src="<?=base_url("assets/statics/eleve/js/d3.v3.js")?>"></script>
    <script src="<?=base_url("assets/statics/eleve/js/rickshaw.js")?>"></script>
    <!-- chart -->
    <script src="<?=base_url("assets/statics/eleve/js/Chart.js")?>"></script>
    <!-- //chart -->
</head>
<body>
<div id="wrapper">
