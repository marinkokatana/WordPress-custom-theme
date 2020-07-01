<?php
    function basic_tema_setup() {
        // Navigacija
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
        // izdvojena slika - featured image_add_caption
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'basic_tema_setup');


//Widgeti
    function sidebar($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init', 'sidebar');


//Excerpt
function set_excerpt_length() {
    return 40;
}
add_filter ('excerpt_length', 'set_excerpt_length');

