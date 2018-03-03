<?php namespace Onefastsnail\MyPlugin\PostTypes;

// https://developer.wordpress.org/resource/dashicons

/**
 * lets create our park post type
 * @return [type] [description]
 */
function createTestimonial()
{
    $labels = array(
        'name'               => _x('Testimonials', 'post type general name', 'swiss'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'swiss'),
        'add_new'            => _x('Add New Testimonial', 'the add new post text', 'swiss'),
        'add_new_item'       => _x('Add New Testimonial', 'the add new post text', 'swiss'),
        'edit_item'          => _x('Edit Testimonial', 'the edit post text', 'swiss'),
        'new_item'           => _x('New Testimonial', 'add new post text', 'swiss'),
        'all_items'          => _x('All Testimonials', 'String for the submenu', 'swiss'),
        'view_item'          => _x('View Testimonial', 'view post text', 'swiss'),
        'search_items'       => _x('Search Testimonials', 'search post text', 'swiss'),
        'not_found'          => _x('No Testimonials found', 'not found post text', 'swiss'),
        'not_found_in_trash' => _x('No Testimonials found in the Trash', 'not found trash post text', 'swiss'),
        'parent_item_colon'  => '',
        'menu_name'          => _x('Testimonials', 'post type general name for menu', 'swiss')
      );

    $args = array(
        'labels'        => $labels,
        'description'   => _x('This is an Testimonial description', 'post type description', 'swiss'),
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'taxonomies'    => array(),
        'has_archive'   => false,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'menu_icon'   => 'dashicons-format-quote',
        'rewrite' => array(
            'slug' => _x('testimonial', 'URL slug', 'swiss')
        )
      );

    register_post_type('testimonial', $args);
}
