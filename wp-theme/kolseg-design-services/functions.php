<?php
require_once get_template_directory() . '/inc/customizer.php';

function kolseg_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'kolseg-design-services'),
        )
    );
}
add_action('after_setup_theme', 'kolseg_theme_setup');

function kolseg_enqueue_assets() {
    wp_enqueue_style(
        'kolseg-fonts',
        'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'kolseg-main',
        get_template_directory_uri() . '/assets/css/styles.css',
        array('kolseg-fonts'),
        filemtime(get_template_directory() . '/assets/css/styles.css')
    );
    wp_enqueue_script(
        'kolseg-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'kolseg_enqueue_assets');

function kolseg_get_theme_image($setting, $fallback) {
    $image = get_theme_mod($setting);
    if (!empty($image)) {
        return $image;
    }
    return get_template_directory_uri() . '/assets/images/' . $fallback;
}

function kolseg_primary_menu_fallback() {
    echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    echo '<a href="' . esc_url(home_url('/services/')) . '">Services</a>';
    echo '<a href="' . esc_url(home_url('/portfolio/')) . '">Portfolio</a>';
    echo '<a href="' . esc_url(home_url('/about/')) . '">About</a>';
    echo '<a href="' . esc_url(home_url('/contact/')) . '" class="nav-cta">Contact</a>';
}

