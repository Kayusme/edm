<?= doctype("html5")."\n"?>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Eduquemoi :: Parents</title>
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
            'content' => 'katanga, eduquemoi, education, lubumbashi'
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
        '<!-- Icon-CSS -->'."\n".
        link_tag("assets/parents/images/icone.png",'icon').
        '<!-- Argon-CSS -->'."\n".
        link_tag("assets/parents/css/argon.css?v=1.0.1").
        '<!-- Font-awesome-CSS -->'."\n".
       '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>'."\n".
        '<!-- Docs-CSS -->'."\n".
        link_tag("assets/parents/css/docs.min.css.css").
        link_tag("assets/parents/css/nucleo.css").
        '<!--//web-fonts-->'."\n".
        link_tag("hhttps://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700")
  ?>
</head>

<body>