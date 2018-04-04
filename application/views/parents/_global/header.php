<!DOCTYPE HTML>
<html>
<head>
    <title>Creative Ui Kit Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
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
//    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    echo meta($meta).
        '<!-- Bootstrap-CSS -->'."\n".
        link_tag("assets/parents/css/bootstrap.css").
        '<!-- Calender-CSS -->'."\n".
        link_tag("assets/parents/css/style.css").
        link_tag("assets/parents/css/clndr.css").
        '<!-- Other-CSS -->'."\n".
        link_tag("assets/parents/css/theme.css").
        '<!-- Index-Page-CSS -->'."\n".
        link_tag("assets/parents/css/audio.css").
        link_tag("assets/parents/css/form.css").
        '<!-- Headings-font -->'."\n".
        link_tag("//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800").
        '<!-- Body-font -->'."\n".
        link_tag("//fonts.googleapis.com/css?family=Lato:300,400,700").
        '<!--//web-fonts-->'."\n".'<!--//fonts-->'."\n".'<!-- js -->'."\n";
    ?>
    <script src="<?=base_url("assets/parents/js/jquery.min.js")?>"></script>
    <script src="<?=base_url("assets/parents/js/jquery.circlechart.js")?>"></script>
    <script src="<?=base_url("assets/parents/js/underscore-min.js")?>"></script>
    <script src= "<?=base_url("assets/parents/js/moment-2.2.1.js")?>"></script>
    <script src="<?=base_url("assets/parents/js/clndr.js")?>"></script>
    <script src="<?=base_url("assets/parents/js/site.js")?>"></script>
    <!----End Calender -------->

    <!----start audio ------->
    <script type="text/javascript" src="<?=base_url("assets/parents/js/mediaelement-and-player.min.js")?>"></script>
    <!-- --End audio ---- -->
    <script type="text/javascript" src="<?=base_url("assets/parents/js/jquery.jscrollpane.min.js")?>"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>

</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="<?=site_url("parents/index")?>">Eduque-Moi</a></h1>
        </div>

