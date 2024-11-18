<?php

use Nette\Utils\Strings;

function eva_plugin_plain_text_list()
{
    $query_argument = array(
        'post_type' => 'song',
        'order' => 'ASC',
        'posts_per_page' => -1,
    );

    $random_post_query = new WP_Query($query_argument);
    $output = "";
    $is_first = TRUE;

    while ($random_post_query->have_posts()) {
        $random_post_query->the_post();
        if (!$is_first) {
            $output .= "\n";
        }

        $output .= '## ';
        $output .= get_the_title();
        $output .= "\n";
        $output .= trim(get_the_content());
        $output .= "\n";

        $is_first = FALSE;
    };

    wp_reset_postdata();

    return $output;
}

function eva_plugin_register_rest()
{
    register_rest_route('eva-plugin/v1', '/songs/plain-text-list', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'eva_plugin_plain_text_list',
    ));
}

add_action('rest_api_init', 'eva_plugin_register_rest');
