<?php
add_action('wp_enqueue_scripts', 'styles_enqueue');

function styles_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');


function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}

add_action('init', 'wpb_custom_new_menu');

add_image_size("post_image", 1100, 550, false);

function mytheme_add_woocommerce_support(){
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "mytheme_add_woocommerce_support");