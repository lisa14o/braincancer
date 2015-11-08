<?php
 
register_nav_menus(); 

add_theme_support('post-thumbnails'); 
set_post_thumbnail_size(200,200, true);
add_post_type_support( 'page', 'excerpt' );
add_filter( 'wp_title','braincancer_filter_wp_title', 10, 3 );
add_filter( 'wp_title', 'filter_function_name', 10, 2 );

?>