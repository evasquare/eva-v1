<?php
/*
* Plugin Name: Eva Custom Plugin
* Description: Adds necessary features to my blog.
* Version: 0.0.1
* Author: Eva
* Author URI: https://evasquare.com
* Text Domain: eva-custom
* Domain Path: /languages
* Requires Plugins:
*/

function eva_custom_post_types()
{
    register_post_type('song', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
        ),
        'rewrite' => array('slug' => 'songs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Songs',
            'add_new_item' => 'Add New Song',
            'edit_item' => 'Edit Song',
            'all_items' => 'All Songs',
            'singular_name' => 'Song'
        ),
        'menu_icon' => 'dashicons-format-audio',
    ));
}

add_action('init', 'eva_custom_post_types');

function eva_custom_disable_gutenberg($gutenberg_filter, $post_type)
{
    if ($post_type === 'song') return false;
    return $gutenberg_filter;
}

add_filter('use_block_editor_for_post_type', 'eva_custom_disable_gutenberg', 10, 2);
