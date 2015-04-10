<?php
/*
	Template Name: Символи
*/
?>
<?php get_header(); ?>
   <div class="wrap-content">
        <h2>Символи</h2>

<div class="symbols-content">
    <input class="search" type="search" name="q" placeholder="">
    <ul class="alphabet">
        <li><a href="#a">а</a></li>
        <li><a href="#b">б</a></li>
        <li><a href="#v">в</a></li>
        <li><a href="#g">г</a></li>
        <li><a  href="g2">ґ </a></li>
        <li><a href="#d">д</a></li>
        <li><a href="#e">е</a></li>
        <li><a href="#ee">є</a></li>
        <li><a href="#zh">ж</a></li>
        <li><a href="#z">з</a></li>		
        <li><a href="">и</a></li>
        <li><a href="">і</a></li>
        <li><a href="">ї</a></li>
		<li><a href="">й</a></li>
        <li><a href="">к</a></li>
        <li><a href="">л</a></li>
        <li><a href="">м</a></li>
        <li><a href="">н</a></li>
        <li><a href="">о</a></li>
        <li><a href="">п</a></li>
        <li><a href="">р</a></li>
        <li><a href="">с</a></li>
        <li><a href="">т</a></li>
        <li><a href="">у</a></li>
        <li><a href="">ф</a></li>
        <li><a href="">х</a></li>
        <li><a href="">ц</a></li>
        <li><a href="">ч</a></li>
        <li><a href="">ш</a></li>
        <li><a href="">щ</a></li>
        <li><a href="">ю</a></li>
        <li><a href="">я</a></li>


    </ul>

    <h4><a name="a">А</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=11'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul>   

       <h4><a name="b">Б</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=12'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul>
  
       <h4><a name="v">В</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=13'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul>  
 
       <h4><a name="g">Г</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=14'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul>  
 
        <h4><a name="e">E</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=16'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul> 
   
        <h4><a name="ee">Є</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=17'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul> 
   
        <h4><a name="zh">Ж</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=18'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul> 

        <h4><a name="z">З</a></h4>

   <ul class="first-colom">
		<?php if ( have_posts() ) : query_posts('cat=20'); while (have_posts()) : the_post(); ?>   
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
   </ul>    
   
	
	
	<div>
	
	</div>
	
</div>

</div>

<?php get_footer(); ?>	