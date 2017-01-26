<?php

// REGISTER GALLERY POST TYPE

add_action('init', 'posttype_gallery');

function posttype_gallery() {
        $labels = array(
                'name' => __('Galleries', 'gxg_textdomain'),
                'singular_name' => __('Gallery', 'gxg_textdomain'),
                'add_new' => __('Add Gallery', 'gxg_textdomain'),
                'add_new_item' => __('Add New Gallery', 'gxg_textdomain'),
                'edit_item' => __('Edit Gallery', 'gxg_textdomain'),
                'new_item' => __('New Gallery', 'gxg_textdomain'),
                'view_item' => __('View Details', 'gxg_textdomain'),
                'search_items' => __('Search Galleries', 'gxg_textdomain'),
                'not_found' =>  __('No Gallery were found with that criteria', 'gxg_textdomain'),
                'not_found_in_trash' => __('No Gallery found in the Trash with that criteria', 'gxg_textdomain'),
                'view' =>  __('View Gallery', 'gxg_textdomain')
        );

        $imagepath =  get_stylesheet_directory_uri() . '/images/posttypeimg/';

        $args = array(
                'labels' => $labels,
                'description' => 'This is the holding location for all Galleries',
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'rewrite' => true,
                'hierarchical' => true,
                'menu_position' => 5,
                'menu_icon' => $imagepath . '/gal.png',
                'supports' => array('thumbnail','title', 'comments','revisions'),
                /*'taxonomies' => array( 'post_tag', 'category')*/
        );

register_post_type('gallery',$args);
}

?>