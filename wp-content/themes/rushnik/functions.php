<?php
	add_theme_support( 'menus' ); // add menus to dashboard
	add_theme_support( 'post-thumbnails' );
	register_sidebar (array(
		'name' => 'Виджеты',
		'id' => 'sidebar',
		'description' => 'поле',
	));

	if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
    ) );
}

if (function_exists("_p2p_load")) {
function vp_post_to_post()
{
p2p_register_connection_type(array(
'name' => 'post_to_post',
'from' => 'post',
'to' => 'post'
));
}
 
add_action('p2p_init', 'vp_post_to_post');
}
 