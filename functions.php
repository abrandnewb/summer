<?php

    //enqueue style & scripts
    function enqueue_styles_scripts() {
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
        wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/responsive.css');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery', 'bootstrap-js'), null, true);
    }
    add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');

    //enable thumbnails in posts
    function enable_thumbnails_in_posts() {
        if(function_exists('add_theme_support')) {
            add_theme_support('post-thumbnails');
        }
    }
    add_action( 'admin_menu', 'enable_thumbnails_in_posts' );

    //
    function slider_post_type() {
        $args = [
            'labels' => array(
                'name'          => 'Slider',
                'singular_name' => 'Slider',
                'menu_name'     => 'Slider',
                'add_new'       => 'Add New Slider',
                'add_new_item'  => 'Add New Slider',
                'new_item'      => 'New Slider',
                'edit_item'     => 'Edit Slider',
                'view_item'     => 'View Slider',
                'all_items'     => 'All Slider',
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite' => array('slug' => 'slider'),
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        ];
    
        register_post_type( 'slider', $args );
    }
    
    add_action( 'init', 'slider_post_type' );

    //Register menu
    function register_menus(){
        register_nav_menu('primary_menu', __('Primary Menu'));
    }
    add_action( 'init', 'register_menus' );
    
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
