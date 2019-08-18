<?php

define('SIMPLE_CACTUS_VERSION', '0.1.1');
define('SIMPLE_CACTUS_SETTING_GROUP', 'simple_cactus_theme');

/**
 * require any widgets
 */

foreach (glob(__DIR__ . '/widgets/*Widget.php') as $widget) {
    require $widget;
}

function update_jquery()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_register_script('jquery-migrate', 'https://cdn.bootcss.com/jquery-migrate/3.0.0/jquery-migrate.min.js', false, null);
    wp_enqueue_script('jquery-migrate');
}

function theme_options_page()
{
    require __DIR__ . '/setting/theme_options.php';
}

function simple_cactus_option_name($name)
{
    return SIMPLE_CACTUS_SETTING_GROUP . '[' . $name. ']';
}

function get_theme_settings($name, $default = null, $escaping = true)
{
    $options = get_option(SIMPLE_CACTUS_SETTING_GROUP);

    $value = $options[$name] ?? null;

    if (! $value) {
        $value = $default;
    }

    return $escaping ? esc_attr($value) : $value;
}

function theme_setting_is_checked($name, $condition = 1)
{
    $value = get_theme_settings($name);

    return $value == $condition ? ' checked' : '';
}

function active_theme()
{
    if (! get_option(SIMPLE_CACTUS_SETTING_GROUP)) {

        $default_options = [
            'color_scheme' => 'white',
            'site_logo_url' => '',
            'site_favicon_url' => '',
            'site_icp_number' => '',
            'find_me_through_github' => '',
            'custom_footer_text_style' => 'Copyright © %1$s %2$s',
            'display_footer_menu' => 0,
            'display_links_to_this_article' => 1,
            'display_categories' => 0,
            'display_tags' => 1
        ];

        update_option(SIMPLE_CACTUS_SETTING_GROUP, $default_options);
    }
}

add_action('after_setup_theme', 'active_theme');

add_action('wp_enqueue_scripts', 'update_jquery', 11);

register_sidebar([
    'name' => 'Homepage any blocks display',
    'id' => 'homepage_block'
]);

add_action('widgets_init', function() {
    register_widget('BlockWidget');
});

add_action('admin_menu', function() {

    register_setting(SIMPLE_CACTUS_SETTING_GROUP, SIMPLE_CACTUS_SETTING_GROUP);

    add_theme_page(
        __('Simple Cactus theme setting', 'simple_cactus'),
        __('Theme Options', 'simple_cactus'),
        'edit_theme_options',
        'theme-options',
        'theme_options_page'
    );
});