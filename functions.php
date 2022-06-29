<?php

// Register Custom Post Type Car
function create_car_cpt()
{

    $labels = array(
        'name' => _x('Cars', 'Post Type General Name', 'cartheme'),
        'singular_name' => _x('Car', 'Post Type Singular Name', 'cartheme'),
        'menu_name' => _x('Cars', 'Admin Menu text', 'cartheme'),
        'name_admin_bar' => _x('Car', 'Add New on Toolbar', 'cartheme'),
        'archives' => __('Car Archives', 'cartheme'),
        'attributes' => __('Car Attributes', 'cartheme'),
        'parent_item_colon' => __('Parent Car:', 'cartheme'),
        'all_items' => __('All Cars', 'cartheme'),
        'add_new_item' => __('Add New Car', 'cartheme'),
        'add_new' => __('Add New', 'cartheme'),
        'new_item' => __('New Car', 'cartheme'),
        'edit_item' => __('Edit Car', 'cartheme'),
        'update_item' => __('Update Car', 'cartheme'),
        'view_item' => __('View Car', 'cartheme'),
        'view_items' => __('View Cars', 'cartheme'),
        'search_items' => __('Search Car', 'cartheme'),
        'not_found' => __('Not found', 'cartheme'),
        'not_found_in_trash' => __('Not found in Trash', 'cartheme'),
        'featured_image' => __('Featured Image', 'cartheme'),
        'set_featured_image' => __('Set featured image', 'cartheme'),
        'remove_featured_image' => __('Remove featured image', 'cartheme'),
        'use_featured_image' => __('Use as featured image', 'cartheme'),
        'insert_into_item' => __('Insert into Car', 'cartheme'),
        'uploaded_to_this_item' => __('Uploaded to this Car', 'cartheme'),
        'items_list' => __('Cars list', 'cartheme'),
        'items_list_navigation' => __('Cars list navigation', 'cartheme'),
        'filter_items_list' => __('Filter Cars list', 'cartheme'),
    );
    $args = array(
        'label' => __('Car', 'cartheme'),
        'description' => __('A type of Car having model, price, company etc', 'cartheme'),
        'labels' => $labels,
        'menu_icon' => '',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('car', $args);
}
add_action('init', 'create_car_cpt', 0);

//Register Styles to project
function register_styles()
{
    // Register styles.

    wp_register_style('main-css', get_template_directory_uri() . "/assets/css/main.css", filemtime(get_template_directory() . '/assets/css/main.css'), 'all');

    // Enqueue Styles.
    wp_enqueue_style('main-css');
}

add_action("wp_enqueue_scripts", 'register_styles');