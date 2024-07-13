<?php
function av_twentyfour_enqueue_styles() {
    wp_enqueue_style('av_twentyfour-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'av_twentyfour_enqueue_styles');

// Register navigation menus
function av_twentyfour_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'av_twentyfour'),
        )
    );
}
add_action('init', 'av_twentyfour_register_menus');

// Register sidebar
function av_twentyfour_widgets_init() {
    register_sidebar(
        array(
            'name'          => __('Main Sidebar', 'av_twentyfour'),
            'id'            => 'main-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'av_twentyfour_widgets_init');
