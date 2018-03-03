<?php namespace Onefastsnail\MyPlugin\PostTypes;

// https://developer.wordpress.org/resource/dashicons

/**
 * lets create our testimonial post type
 * @return [type] [description]
 */
function createTestimonial()
{
    $labels = array(
        'name'               => _x('Testimonials', 'post type general name', 'my-plugin'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'my-plugin'),
        'add_new'            => _x('Add New Testimonial', 'the add new post text', 'my-plugin'),
        'add_new_item'       => _x('Add New Testimonial', 'the add new post text', 'my-plugin'),
        'edit_item'          => _x('Edit Testimonial', 'the edit post text', 'my-plugin'),
        'new_item'           => _x('New Testimonial', 'add new post text', 'my-plugin'),
        'all_items'          => _x('All Testimonials', 'String for the submenu', 'my-plugin'),
        'view_item'          => _x('View Testimonial', 'view post text', 'my-plugin'),
        'search_items'       => _x('Search Testimonials', 'search post text', 'my-plugin'),
        'not_found'          => _x('No Testimonials found', 'not found post text', 'my-plugin'),
        'not_found_in_trash' => _x('No Testimonials found in the Trash', 'not found trash post text', 'my-plugin'),
        'parent_item_colon'  => '',
        'menu_name'          => _x('Testimonials', 'post type general name for menu', 'my-plugin')
      );

    $args = array(
        'labels'        => $labels,
        'description'   => _x('This is an Testimonial description', 'post type description', 'my-plugin'),
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'taxonomies'    => array(),
        'has_archive'   => false,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'menu_icon'   => 'dashicons-format-quote',
        'rewrite' => array(
            'slug' => _x('testimonial', 'URL slug', 'my-plugin')
        )
      );

    register_post_type('testimonial', $args);
}
