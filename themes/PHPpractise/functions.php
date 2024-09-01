<?php

/**
 * Enqueues custom styles for the theme.
 *
 * @since  1.0.0
 * @return void
 */
function My_Custom_Theme_Enqueue_styles()
{
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'My_Custom_Theme_Enqueue_styles')

?>
