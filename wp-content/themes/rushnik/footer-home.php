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


                    © Copyright 2015

                </p>
            </div>
        </div>
    </div>
</div>



<script src="<?php bloginfo('template_url') ?>/js/index.js"></script>

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
</body>
</html>