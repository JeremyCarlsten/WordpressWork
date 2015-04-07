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

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<td id="middle-col">';
}

function my_theme_wrapper_end() {
  echo '</td>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function right_sidebar_widget_init() {

	register_sidebar( array(
		'name'          => 'Home Right sidebar',
		'id'            => 'right-sidebar-widget',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'right_sidebar_widget_init' );