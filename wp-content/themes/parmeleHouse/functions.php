<?php

function register_my_menus()
{
    register_nav_menus(
        array(
            'sidebar_menu' => __('Visitor Menu'),
            'sidebar_sub_menu' => __('More Information')
        )
    );
}

add_action('init', 'register_my_menus');