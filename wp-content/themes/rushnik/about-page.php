<?php
/*
	Template Name: Про нас
*/
?>
<?php get_header(); ?>
    <div class="wrap-content">
        <h2>Про нас</h2>
    <ul class='timeline'>    
<?php $categories = get_categories('child_of=24'.$cat_ID);
    if($categories) :
      foreach($categories as $category) {
         $posts = get_posts("category=".$category->term_id."&numberposts=-1"); ?>
    	      <li class="year"><?php echo $category->name; ?></li>
    	      
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                <li class='event offset-first'>
                    <span class="date1"><?php the_title(); ?></span>
     
                    <p><?php the_content() ?></p>
                </li>
            <?php endforeach; wp_reset_postdata();
      };
    endif; ?>
     </ul>   


		
    </div>    
<?php get_footer(); ?>	