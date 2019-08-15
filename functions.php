<?php

define('SIMPLE_CACTUS_VERSION', '0.1.1');

/**
 * require any widgets
 */

foreach (glob(__DIR__ . '/widgets/*Widget.php') as $widget) {
    require $widget;
}

function update_jquery() {

    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js', false, null);
        wp_enqueue_script('jquery');
        wp_deregister_script('jquery-migrate');
        wp_register_script('jquery-migrate', 'https://cdn.bootcss.com/jquery-migrate/3.0.0/jquery-migrate.min.js', false, null);
        wp_enqueue_script('jquery-migrate');
    }
}

function theme_options()
{
    require __DIR__ . '/setting/theme_options.php';
}

add_action('wp_enqueue_scripts', 'update_jquery', 11);

register_sidebar([
    'name' => 'Homepage any blocks display',
    'id' => 'homepage_block'
]);

add_action('widgets_init', function() {
    register_widget('BlockWidget');
});

add_action('admin_menu', function() {
    add_theme_page(
        __('Simple Cactus theme setting', 'simple_cactus'),
        __('Theme Options', 'simple_cactus'),
        'edit_theme_options',
        'theme-options',
        'theme_options'
    );
});