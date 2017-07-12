<?php

/*
@package sigtv
=====================================
       THEME SUPPORT FUNCTIONS
=====================================
*/

/*** ACTIVATE THEME SUPPORT
 ****************************************************************/
function sigtv_theme_setup() {
    
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio') );
    add_theme_support( 'html5', array( 'search-form') );
    add_theme_support( 'custom-logo' );
}
    add_action( 'init', 'sigtv_theme_setup' );

/*** ACTIVATE DINAMIC MENU
 ****************************************************************/
 function sigtv_register_my_menus() {
 	register_nav_menus (
 		array(
 			'header-menu' => __( 'Header Menu' ),
 			'footer-menu' => __( 'Footer Menu' )	
 		)
 	);
 }
 	add_action( 'init', 'sigtv_register_my_menus' );