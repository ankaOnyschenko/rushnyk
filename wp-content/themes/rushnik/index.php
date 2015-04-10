<?php
/*
	Template Name: Головна
*/
?>

<?php get_header('home'); ?>

        <div class="clear"></div>
    </div>

    <div class="section" id="section1">

        <div class="benefits">
            <h2>Наші переваги</h2>


            <ul>
                <li class="ddt"><img src="<?php bloginfo('template_url') ?>/images/icon1.png" alt=""/>
					<?php query_posts(array('post__in' => array(67))); while (have_posts()) { the_post(); ?>
					<?php the_content(''); ?>
					<?php } wp_reset_query(); ?></li> 

                <li class="odd"><img src="<?php bloginfo('template_url') ?>/images/icon2.png" alt=""/>
					<?php query_posts(array('post__in' => array(69))); while (have_posts()) { the_post(); ?>
					<?php the_content(''); ?>
					<?php } wp_reset_query(); ?></li> 

                <li><img src="<?php bloginfo('template_url') ?>/images/icon3.png" alt=""/>
					<?php query_posts(array('post__in' => array(71))); while (have_posts()) { the_post(); ?>
					<?php the_content(''); ?>
					<?php } wp_reset_query(); ?> </li>                 
            </ul>

        </div>
        <div class="clear"></div>
    </div>

    <div class="section" id="section2">
        <div class="symbols">

            <h2>Символи</h2>

			<?php query_posts(array('post__in' => array(33))); while (have_posts()) { the_post(); ?>
				<h3><?php the_title(); ?></h3>

				<?php the_content(''); ?>
			<?php } wp_reset_query(); ?>
            <div class="button-symbol"><a href="<?php echo get_permalink(22); ?>">Символи</a></div>

        </div>
        <div class="clear"></div>
    </div>

    <div class="section" id="section3">
        <div class="gallery">

            <h2> Рушники</h2>

            <div id="carousel">
                <ul>
				<?php if ( have_posts() ) : query_posts('cat=2'); while (have_posts()) : the_post(); ?>
                    <li><?php the_post_thumbnail();?><a href="<?php the_permalink(); ?>">Image1</a></li>
				<?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                </ul>
                <div class="clearfix"></div>
                <a id="prev" class="prev" href="#">&lt;</a>
                <a id="next" class="next" href="#">&gt;</a>

            </div>
            <div class="button-ryshnuku"><a href="<?php echo get_permalink(19); ?>">Всі рушники</a></div>



        </div>

    </div>

    <div class="section" id="section4">

        <div class="sponsors">
            <ul>
                <li><a href=""><img src="<?php bloginfo('template_url') ?>/images/sponsor1.png" alt=""/></a></li>
                <li><a href=""><img src="<?php bloginfo('template_url') ?>/images/sponsor2.png" alt=""/></a></li>
                <li><a href=""><img src="<?php bloginfo('template_url') ?>/images/sponsor3.png" alt=""/></a></li>
                <li class="last"><a href=""><img src="<?php bloginfo('template_url') ?>/images/sponsor4.png" alt=""/></a></li>

            </ul>
        </div>

        <div class="clear"></div>

<?php get_footer('home'); ?>
