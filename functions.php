<?php
function myCarnewsMenu()
{
    if (function_exists('register_nav_menu')) {
        register_nav_menu('header_top_menu', __('header menu', 'carnews'));
        register_nav_menu('footer_menu_one', __('footer menu', 'carnews'));
    }
}
add_action('init', 'myCarnewsMenu');

add_theme_support('post-thumbnails', array('post', 'page'));
set_post_thumbnail_size(200, 200, true);

add_image_size('feature_image_one', 300, 500, true);


function widgets_sidebar()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar-widget-One', 'carnews'),
        'description'   => esc_html__('This is sidebar one description......', 'carnews'),
        'id'            => 'widget-home-one',
        'before_widget' => '<div class="siderbar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4> ',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer-widget-one', 'carnews'),
        'description'   => esc_html__('This is Footer-widget-one one description......', 'carnews'),
        'id'            => 'footer-one',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer-widget-two', 'carnews'),
        'description'   => esc_html__('This is Footer-widget-one one description......', 'carnews'),
        'id'            => 'footer-two',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer-widget-three', 'carnews'),
        'description'   => esc_html__('This is Footer-widget-one one description......', 'carnews'),
        'id'            => 'footer-three',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer-widget-four', 'carnews'),
        'description'   => esc_html__('This is Footer-widget-one one description......', 'carnews'),
        'id'            => 'footer-four',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ));
}
add_action('widgets_init', 'widgets_sidebar');


function santo_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields', 'santo_move_comment_field_to_bottom');


function remove_any_fields($fields)
{
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_any_fields');
