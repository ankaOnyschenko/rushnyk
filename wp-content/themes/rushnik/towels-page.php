<?php
/*
	Template Name: Рушники
*/
?>
<?php get_header(); ?>
        <div class="wrap-content">
            <h2>Рушники</h2>

				<ul id="items">
			    <?php if ( have_posts() ) : query_posts('cat=2'); while (have_posts()) : the_post(); ?>
					<li style="display: list-item;">
					
					<a class="share-button" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/images/share-button.png" alt=""  onmouseout="this.src='<?php bloginfo('template_url') ?>/images/share-button.png'"
                                                         onmouseover="this.src='<?php bloginfo('template_url') ?>/images/share-button-hover.png'"/></a>					
						<a href="<?php the_permalink(); ?>">	
							<div class="rushnyk"><?php the_post_thumbnail();?></div>
							<h3 class="rushnik"><?php the_title(); ?></h3>
							<p>Полтавщина 1910 рік</p> 
							<span><?php if(function_exists('the_views')) { the_views(); } ?></span>
						</a>
                    </li>
               

                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
					
				</ul>			   
			   
           

        </div>

<?php get_footer(); ?>	