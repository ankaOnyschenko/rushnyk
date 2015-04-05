<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Полотняний літопис України</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=latin,cyrillic-ext,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,300&amp;subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/timeline.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/styles/winmodal.css"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/global.css">

    <link type="text/css" rel="StyleSheet" href="<?php bloginfo('template_url') ?>/styles/Slider.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/easypaginate.js"></script>

    <script type="text/javascript">

        jQuery(function($){

            $('ul#items').easyPaginate({
                step:9
            });

        });

    </script>


    <!-- JS -->
    <script src="<?php bloginfo('template_url') ?>/js/intense.js"></script>

</head>
<body>


<div class="wrapper">



        <div id="header">
            <div class="logo-head">
                <div class="wrap-menu">


                    <h1>
                        <a href="/"><img class="logo" src="<?php bloginfo('template_url') ?>/images/logo.png" alt="#"/></a>
                    </h1>

                    <div class="menu">
                        <ul>
						<?php wp_nav_menu(array(
							'theme_location'  => 'mymenu',
							'menu_class'      => 'header-navigation',
							'container'       => false
						)); ?>

                        </ul>
                    </div>

                </div>
            </div>	