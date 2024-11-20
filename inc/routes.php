<?php

function eva_v1_song_urls()
{
    $query_argument = array(
        'post_type' => 'song',
        'posts_per_page' => -1,
    );

    $random_post_query = new WP_Query($query_argument);

    $arr = array();

    while ($random_post_query->have_posts()) {
        $random_post_query->the_post();
        array_push($arr, get_permalink());
    };

    wp_reset_postdata();

    return $arr;
}

function eva_v1_register_rest()
{
    register_rest_route('eva-theme/v1', '/songs/song-urls', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'eva_v1_song_urls',
    ));
}

add_action('rest_api_init', 'eva_v1_register_rest');
