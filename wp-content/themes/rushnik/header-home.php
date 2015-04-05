<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Полотняний літопис України</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=latin,cyrillic-ext,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,300&amp;subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/styles/jquery.fullPage.css"/>

    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log: function () {
            }
        };
    </script>
    <![endif]-->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/examples.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', 'lastPage'],
                sectionsColor: ['#fff', '#fff', '#fff'],
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['First page', 'Second page', '3rdPage', '4thPage', '5thPage', '6thPage', 'lastPage'],
                responsive: 900
            });
        });
    </script>
</head>
<body>


<div id="fullpage">

    <div class="section " id="section0">

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

                <div class="welcome">
					<?php query_posts(array('post__in' => array(31))); while (have_posts()) { the_post(); ?>
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(''); ?>
					<?php } wp_reset_query(); ?>
                    <div class="button-inform"><a href="<?php echo get_permalink(26); ?>">Повідомити</a></div>
                    <div class="button-encyclopedia"><a href="<?php echo get_permalink(19); ?>">Енциклопедія</a></div>
                </div>

        </div>