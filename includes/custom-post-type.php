<?php

/*
@package sigtv
=====================================
        THEME CUSTOM POST TYPES
=====================================
*/

function sigtv_custom_post_types() {

    // PRODUTOS
    register_post_type('produtos',
        array(
            'labels'            => array(
                'name'          => __('Produtos'),
                'singular_name' => __('Produto') 
                ),

            'public'            => true,
            'has_archive'       => true,
            'menu_icon'         => 'dashicons-archive',
            'supports'          => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                )
            )
    );

    // CASES
    register_post_type('cases',
        array(
            'labels'            => array(
                'name'          => __('Cases'),
                'singular_name' => __('Case') 
                ),

            'public'            => true,
            'has_archive'       => true,
            'menu_icon'         => 'dashicons-groups',
            'supports'          => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                )
            )
    );
}
    add_action('init', 'sigtv_custom_post_types');
   