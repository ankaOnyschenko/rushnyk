<?php get_header(); ?>

<div class="wrap-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
<div class="block-ryshnuk">
    <a href="#?w=360" rel="popup1" class="poplight"><?php the_post_thumbnail();?>
	<span class="img2"><?php
    if (class_exists('MultiPostThumbnails')) : 
        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
    endif;
	?></span>
	</a>
        <p><?php the_content() ?></p>
       <div class="symbol">
           <h3>Символи використані в вишивці</h3>
            <div class="map"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>
				<?php endif; ?>
			</div>
        <div>

           </div>

       </div>
			<?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
</div>
    </div>
	
<?php get_footer(); ?>