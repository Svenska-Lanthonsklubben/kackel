<?php

function kackel_enqueue_style()
{
    wp_enqueue_style('kackel-style', get_stylesheet_uri());
    wp_enqueue_style('kackel-style-print', get_template_directory_uri() . '/css/print.css', false, array(), 'print');
}
add_action('wp_enqueue_scripts', 'kackel_enqueue_style');
add_theme_support('title-tag');
register_nav_menu('sidebar', __('Sidomeny'));