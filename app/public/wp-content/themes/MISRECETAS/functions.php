<?php

if (!function_exists('my_theme_setup')):
    function my_theme_setup() {

        // añadimos title de forma automática
        add_theme_support('title-tag');
        
        //añadimos imagen destacada :featured image
        add_theme_support('post-thumbnails');

        // añadimos soporte para menu wordpress
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'misrecetas')
            )
        ); 


    }
endif;
add_action('after_setup_theme', 'my_theme_setup');