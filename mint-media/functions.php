<?php

function mint_media_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mint_media_theme_setup' ),
    ) );
    
}
add_action('after_setup_theme', 'mint_media_theme_setup');

function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<article class="widget">',
        'after_widget' => '</article>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'sidebar');

function new_excerpt_text() {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');

function set_excerpt_length() {
    return 70;
}
add_filter('excerpt_length', 'set_excerpt_length');