<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Classy User UI Kit a Responsive Widget Template :: w3layouts</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

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
        '<!-- Font-awesome-CSS -->'."\n".
        link_tag("assets/tuteur/css/font-awesome.css").
        '<!-- Flex-slider-CSS -->'."\n".
        link_tag("assets/tuteur/css/monthly.css").
        '<!-- Index-Page-CSS -->'."\n".
        link_tag("assets/tuteur/css/style.css").
        '<!-- Headings-font -->'."\n".
        link_tag("//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic").
        '<!-- Body-font -->'."\n".
        link_tag("//fonts.googleapis.com/css?family=Lato:300,400,700").
        '<!--//web-fonts-->'."\n".'<!--//fonts-->'."\n".'<!-- js -->'."\n";
    ?>
</head>
<body>