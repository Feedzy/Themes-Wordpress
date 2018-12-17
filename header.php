<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Themes de Lamine</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style.css"/>


    <?php wp_head();?>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1 style="color: #ffffff;">Keloumak </h1>
    <p>Cultivez votre passion pour en faire un metier</p>
</div>
<div class="header">
    <div class="container">
        <nav id="navigation-principale" role="navigation">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-principal' )); ?>
        </nav>
    </div>
</div>

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
        </h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' );?></p>
    </div>