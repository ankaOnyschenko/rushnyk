<?php get_header(); ?>

<div class="wrap-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
<div class="tree-of-life">
    <div id="products_example">
        <div id="products">
            <div class="slides_container">
                <?php the_post_thumbnail();?>
                <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
                <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image'); endif; ?>

            </div>
            <ul class="pagination">
                <li><a href="#"><?php the_post_thumbnail();?></a></li>
                <li><a href="#"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?></a></li>
                <li><a href="#"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image'); endif; ?></a></li>

            </ul>
        </div>
    </div>
       <div class="description"> <h4>Короткий опис</h4>
        <p><?php the_content() ?></p>
       </div>
           <div class="clear"></div>	
</div>	
			<?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
</div>
	
	

<?php get_footer(); ?>