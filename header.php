<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
                document.write('<script src="<?php bloginfo('template_directory');?>/bower_components/jquery/dist/jquery.min.js"><\/script>');
            }
   </script>
   <script src="<?php bloginfo('template_directory');?>/js/main.min.js"></script>
   <?php wp_head(); ?>
</head>

<body>

    <header class="main-header">
        <div class="container text-center">
            <div class="site-name text-center">
                <!-- <h1 class="logo">the BIG MOUTH forum!</h1> -->
            </div> <!-- site name and nav -->
        </div>

    </header> <!-- main header -->

<!-- <div class="container"> -->

    <div class="col-sm-3" id="sidebar" role="navigation" style="border-right:1px solid #eee;">
        <h2>Navigation</h2>
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'ul',
                'container_class'   => 'nav',
                'container_id'      => '',
                'menu_class'        => 'nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        </div>
    <div class="col-sm-9">
