<?php

function update_jquery() {

    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', "https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js", false, null);
        wp_enqueue_script('jquery');
        wp_deregister_script('jquery-migrate');
        wp_register_script('jquery-migrate', "https://cdn.bootcss.com/jquery-migrate/3.0.0/jquery-migrate.min.js", false, null);
        wp_enqueue_script('jquery-migrate');
    }
}

add_action("wp_enqueue_scripts", "update_jquery", 11);