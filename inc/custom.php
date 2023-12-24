<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
}

function Poston_custom_posts()
{
    // Register CPT feature 
    register_post_type('poston-author', array(
        'labels'     => array(
            'name'             => esc_html(__('Author List', 'hrshanto')),
            'singular_name'    => esc_html(__('Author', 'hrshanto')),
            'add_new'          => esc_html(__('Add New Author', 'hrshanto')),
            'not_found'        => esc_html(__('not Author found', 'hrshanto')),
            'add_new_item'     => esc_html(__('Add New Author', 'hrshanto')),
            'edit_item'        => esc_html(__('Edit Author', 'hrshanto')),
            'featured_image'   => esc_html(__('Author Image', 'hrshanto')),
            'set_featured_image' => esc_html(__('Set Author Image', 'hrshanto')),
            'remove_featured_image' => esc_html(__('Remove Author Image', 'hrshanto')),

        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'authors'
        ),
        'menu_icon'  =>  'dashicons-universal-access',
        'supports'     =>  array('title','thumbnail'),

    ));
};
add_action('init', 'Poston_custom_posts');
