<?php 
/**
 * My Awesome WordPress Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage cctw
 * @since 1.0.0
 * @version 1.0.0
 */


if (!function_exists('cctw_scripts')):
    function cctw_scripts(){
        wp_register_style('style', get_stylesheet_uri(), array('bootstrap-style'), '1.0.0', 'all');
        wp_enqueue_style('style');
        wp_register_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.3.1', 'all' );
        wp_enqueue_style('bootstrap-style');
        wp_register_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap-style'), '4.7.0', 'all' );
        wp_enqueue_style('fontawesome');

        wp_register_script('script', get_template_directory_uri().'/script.js', array(), '1.0.0', true);
        wp_enqueue_script('script');
        wp_register_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '4.3.1',true);
        wp_enqueue_script('bootstrap-script');

        wp_enqueue_script('jquery');
    }
endif;
add_action('wp_enqueue_scripts', 'cctw_scripts');

// Imagen destacada
if (!function_exists('cctw_setup')):
    function cctw_setup() {
        add_theme_support('post-thumbnails');

        // Activando HTML5
        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ));
        add_theme_support('custom-logo',array(
            'height' => 100, //pixeles
            'width' => 100,
            // Permite redimencionar el logo
            'flex-height' => true,
            'flex-width' => true
        ));
    }
endif;
add_action('after_setup_theme','cctw_setup');

// Registro de Menus
if (!function_exists('cctw_menus')):
    function cctw_menus(){
        register_nav_menus(array(
            'main_menu' => __('Menú Principal', 'cctw'),
            'social_menu' => __('Menú Redes Sociales', 'cctw')
        ));
    }
endif;

add_action('init','cctw_menus');

// Widgets
if(!function_exists('cctw_register_sidebars')):
    function cctw_register_sidebars(){
        register_sidebar(array(
            'name' => __('Sidebar Principal', 'cctw'),
            'id' => 'main_sidebar',
            'description' => __('Este es el sidebar principal', 'cctw'),
            'before_widget' => '<article id="%1$s" class="Widget %2$s">',
            'after_widget' => '</article>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));
    }
endif;
add_action('widgets_init','cctw_register_sidebars');
