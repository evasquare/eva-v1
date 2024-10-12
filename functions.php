<?php
function eva_v1_supports()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'eva_v1_supports');

function eva_v1_setup()
{
    wp_enqueue_style('eva_v1_main_styles', get_theme_file_uri('/style.css'));
}

add_action('wp_enqueue_scripts', 'eva_v1_setup');


/** Original Code:
 * https://wordpress.stackexchange.com/questions/188332/override-default-wordpress-core-translation
 */
function cyb_filter_gettext($translated, $original, $domain)
{
    $list = [
        ["답글 남기기", "댓글 남기기"],
    ];

    for ($i = 0; $i < count($list); $i++) {
        if ($translated == $list[$i][0]) {
            $translated = $list[$i][1];
        }
    }

    return $translated;
}
add_filter('gettext', 'cyb_filter_gettext', 10, 3);


if (! function_exists('eva_v1_numeric_post_navigation')) {
    /** Original Code:
     * https://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
     * */
    function eva_v1_numeric_post_navigation()
    {
        if (is_singular()) {
            return;
        }

        global $wp_query;

        // Stop execution if there's only 1 page
        if ($wp_query->max_num_pages <= 1) return;

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $max_num_page = intval($wp_query->max_num_pages);

        // Add current page to the array
        if ($paged >= 1) {
            $links[] = $paged;
        }

        // Add the pages around the current page to the array
        if ($paged >= 3) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }

        if (($paged + 2) <= $max_num_page) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }

        $output = "";
        $output .= '<div class="page-navigation-sections">' . "\n";

        // Previous Post Link
        if (get_previous_posts_link()) {
            $output .= sprintf('<div class="page-navigation-section flex-start">%s</div>' . "\n", get_previous_posts_link());
        }

        // Start page navigation section
        $output .= '<div class="page-navigation-section column-gap">';

        // Link to first page.
        if (! in_array(1, $links)) {
            $class = ($paged == 1) ? 'class="active"' : '';
            $output .= sprintf(
                '<div %s><a href="%s">%s</a></div>' . "\n",
                $class,
                esc_url(get_pagenum_link(1)),
                '1'
            );

            if (! in_array(2, $links))
                $output .= '<div>…</div>';
        }

        // Link to current page, plus 2 pages in either direction if necessary.
        sort($links);
        foreach ((array) $links as $link) {
            if ($paged == $link) {
                $class = ' class="selected"';
                $output .= sprintf('<div%s>%s</div>' . "\n", $class, $link);
            } else {
                $output .= sprintf('<div><a href="%s">%s</a></div>' . "\n", esc_url(get_pagenum_link($link)), $link);
            }
        }

        // Link to last page.
        if (! in_array($max_num_page, $links)) {
            if (! in_array($max_num_page - 1, $links)) {
                $output .= '<div>…</div>' . "\n";
            }

            $class = $paged == $max_num_page ? 'class="active"' : '';
            $output .= sprintf('<div %s><a href="%s">%s</a></div>' . "\n", $class, esc_url(get_pagenum_link($max_num_page)), $max_num_page);
        }

        // Wrap page navigation section
        $output .= '</div>';

        // Next Post Link
        if (get_next_posts_link())
            $output .= sprintf('<div class="page-navigation-section">%s</div>' . "\n", get_next_posts_link());

        $output .= '</div>' . "\n";

        echo $output;
    }
}
if (! function_exists('eva_v1_reverse_post_navigation')) {
    /** Original Code:
     * https://gist.github.com/jaredchu/3e3bcb866240d1d32a3b4ae55905b135#file-the_reverse_post_navigation
     * */
    function eva_v1_reverse_post_navigation($args = array())
    {
        $args = wp_parse_args($args, array(
            'prev_text'          => '%title',
            'next_text'          => '%title',
            'in_same_term'       => false,
            'excluded_terms'     => '',
            'taxonomy'           => 'category',
            'screen_reader_text' => __('Post navigation'),
        ));

        $navigation = '';

        $previous = get_next_post_link(
            '<div class="nav-previous">%link</div>',
            $args['prev_text'],
            $args['in_same_term'],
            $args['excluded_terms'],
            $args['taxonomy']
        );

        $next = get_previous_post_link(
            '<div class="nav-next">%link</div>',
            $args['next_text'],
            $args['in_same_term'],
            $args['excluded_terms'],
            $args['taxonomy']
        );

        // Only add markup if there's somewhere to navigate to.
        if ($previous || $next) {
            $navigation = _navigation_markup($previous . $next, 'post-navigation', $args['screen_reader_text']);
        }

        echo $navigation;
    }
}

if (! function_exists('eva_v1_get_korean_date')) {
    function eva_v1_get_korean_date()
    {
        $year = get_the_time('Y');
        $month = get_the_time('n');
        $day = get_the_time('j');

        return $year . '년 ' . $month . '월 ' . $day . '일';
    }
}
