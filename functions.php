<?php
function myCarnewsMenu()
{
    if (function_exists('register_nav_menu')) {
        register_nav_menu('header_top_menu', __('header menu', 'carnews'));
        register_nav_menu('footer_menu_one', __('footer menu', 'carnews'));
    }
}
add_action('init', 'myCarnewsMenu');

add_theme_support( 'post-thumbnails', array( 'post', 'page') );
set_post_thumbnail_size( 200, 200, true );

add_image_size( 'feature_image_one', 300, 500, true );