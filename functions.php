<?php

/**
 * --------------------------------------------------------------------------------
 * Theme Customization Options
 * --------------------------------------------------------------------------------
 */
require_once ( get_template_directory() . '/customize/customize.php' );

// Add Theme Support

function consenone_theme_support() {

    $defaults = array(
		'height'               => 100,
		'width'                => 500,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

    add_theme_support('title-tag');
    add_theme_support('custom-logo', $defaults);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
    add_theme_support('html5');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('starter-content');
    add_theme_support('wp-block-styles');

}

add_action('after_setup_theme', 'consenone_theme_support');

// Register Menu Locations
register_nav_menus(array(
    'main-menu' => esc_html__('Main Menu', 'textdomain'),
    'footer-menu' => esc_html__('Footer Menu', 'textdomain')

));

// Register Theme Styles & Scripts
function consenone_theme_styles() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css', [], '5.3.0', 'all');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", '5.13.0', 'all');
    wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4', 'all');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], '2.3.4', 'all');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', [], get_the_time(), 'all');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js', [], '5.3.0', 'all');
    wp_enqueue_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], '2.3.4', 'all');
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', ['owl-js'], get_the_time(), 'all');

}

// Add wp_theme_styles function to wp_enqueue_scripts action hook with a priority of 10
add_action('wp_enqueue_scripts', 'consenone_theme_styles', 10);


// Create a custom excerpt with a read more link
function consenone_custom_excerpt($excerpt) {
    $custom_excerpt = $excerpt;
    // Append a read more link using get_permalink as the url
    $custom_excerpt .= ' <a class="consen-nav" href="' . get_permalink() . '">';
    $custom_excerpt .= get_option( 'consenone_readmore_text', __( 'Read More', 'consenone' ) ) . ' &raquo;';
    $custom_excerpt .= '</a>';

    return $custom_excerpt;
}

add_filter('get_the_excerpt', 'consenone_custom_excerpt', 10);

// Register Sidebar Widgets
function consenone_widgets_init() {
    // Main Sidebar
    register_sidebar([
        'name'              => esc_html__('Main Sidebar', 'textdomain'),
        'id'                => 'main-sidebar',
        'description'       => esc_html__('Add widgets for sidebar here', 'textdomain'),
        'before_widgets'    => '<section class="widget">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>'
    ]);

    // Blog Sidebar Widgets
    register_sidebar([
        'name'              => esc_html__('Blog Sidebar', 'textdomain'),
        'id'                => 'blog-sidebar',
        'description'       => esc_html__('Add widgets for sidebar here', 'textdomain'),
        'before_widgets'    => '<section class="widget">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>'
    ]);
}

add_action('widgets_init', 'consenone_widgets_init');