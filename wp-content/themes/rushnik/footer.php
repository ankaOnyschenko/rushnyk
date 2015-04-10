<div class="clear"></div>
 <div class="footer">
        <div class="wrap">
            <div class="menu-foot">
                <ul>
            <?php wp_nav_menu(array(
                'theme_location'  => 'mymenu',
                'menu_class'      => 'header-navigation',
                'container'       => false
            )); ?>


                </ul>
            </div>

            <div class="social-foot">
                <ul>
                    <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/fb.png" alt=""
                                         onmouseout="this.src='<?php bloginfo('template_url') ?>/images/fb.png'"
                                         onmouseover="this.src='<?php bloginfo('template_url') ?>/images/fb-hover.png'"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/vk.png" alt=""
                                         onmouseout="this.src='<?php bloginfo('template_url') ?>/images/vk.png'"
                                         onmouseover="this.src='<?php bloginfo('template_url') ?>/images/vk-hover.png'"></a></li>
                </ul>
            </div>


            <p class="copyright">


                © Copyright <?php echo date('Y')?>

            </p>
        </div>
    </div>
</div>
<div id="popup1" class="popup_block">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail();?>
		<?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/winmodal.js"></script>



<script type="text/javascript"  src="<?php bloginfo('template_url') ?>/js/jquery.carouFredSel-5.2.3-packed.js"></script>
<script type="text/javascript">
    $(function () {

        $('#carousel ul').carouFredSel({
            prev: '#prev',
            next: '#next',

            auto: true,
            scroll: 1000,
            pauseOnHover: true
        });

    });
</script>


<script src="<?php bloginfo('template_url') ?>/js/slides.min.jquery.js"></script>
<script>
    $(function(){
        $('#products').slides({
            preload: true,
            preloadImage: 'img/loading.gif',
            effect: 'slide, fade',
            crossfade: true,
            slideSpeed: 200,
            fadeSpeed: 500,
            generateNextPrev: true,
            generatePagination: false
        });
    });
</script>
</body>
</html>