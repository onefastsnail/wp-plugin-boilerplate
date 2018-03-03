<?php

namespace Onefastsnail\MyPlugin\RestApi;

function posts()
{
    $json = array();

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );

    $query = new \WP_Query($args);

    global $post;

    if (!empty($query->posts)) {
        foreach ($query->posts as $post) {

            // do other things?

            array_push($json, $post);
        }
    }

    return $json;
}
