<?php 

add_action( 'wp_print_styles', 'new_theme_print_styles' );
add_action( 'wp_print_scripts', 'new_theme_print_scripts' );

function new_theme_print_styles() {
	wp_enqueue_style( 'new-theme', gp_url_base_root() .'plugins/new-default-theme/templates/css/base.css' );
}

function new_theme_print_scripts() {
	wp_enqueue_script( 'jquery' );
}