<?php

function register_my_menus()
{
    register_nav_menus(
        array(
            'sidebar_menu' => __('Sidebar Menu')
        )
    );
}

add_action('init', 'register_my_menus');