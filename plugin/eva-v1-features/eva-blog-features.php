<?php
/*
* Plugin Name: Eva Plugin
* Description: Adds necessary features to my blog.
* Version: 0.0.1
* Author: Eva
* Author URI: https://evasquare.com
* Text Domain: eva-plugin
* Requires Plugins:
*/

function eva_plugin_post_types()
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

add_action('init', 'eva_plugin_post_types');

function eva_plugin_disable_gutenberg($gutenberg_filter, $post_type)
{
    if ($post_type === 'song') return false;
    return $gutenberg_filter;
}

add_filter('use_block_editor_for_post_type', 'eva_plugin_disable_gutenberg', 10, 2);

function eva_plugin_song_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'heading_level' => '2',
            'song_name' => 'Song Name',
            'url' => '',
        ),
        $atts
    );

    $heading_level = $atts["heading_level"];
    $song_name = $atts["song_name"];
    $url = $atts["url"];

    // Ensure heading level is between 2 and 6
    if (!in_array($heading_level, range(2, 6))) {
        $heading_level = '2';
    }

    // Check if URL is provided, otherwise return an empty string or error message
    if (empty($url)) {
        return '<p>Please provide a valid YouTube URL.</p>';
    }

    $returning_value = <<<MARKER
    <!-- wp:heading {"level":$heading_level} -->
    <h$heading_level class="wp-block-heading">$song_name</h$heading_level>
    <!-- /wp:heading -->

    <iframe title="$song_name"
    src="https://www.youtube.com/embed/$url?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
    MARKER;

    return $returning_value;
}
add_shortcode('song', 'eva_plugin_song_shortcode');

function eva_plugin_add_custom_import_button()
{
    global $current_screen;
    if ('song' != $current_screen->post_type) {
        return;
    }

?>
    <script type="text/javascript">
        /** Original Code:
         * https://stackoverflow.com/questions/3665115/how-to-create-a-file-in-memory-for-user-to-download-but-not-through-server
         * */
        const download = (filename, text) => {
            let element = document.createElement('a');
            element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
            element.setAttribute('download', filename);

            element.style.display = 'none';
            document.body.appendChild(element);

            element.click();

            document.body.removeChild(element);
        }

        const onClick = async (event) => {
            event.preventDefault();

            let url = undefined;

            (async () => {
                const songPosts = await (
                    await fetch(
                        `<?php echo get_site_url() ?>/wp-json/eva-plugin/v1/songs/plain-text-list`, {
                            method: "GET"
                        }
                    )
                ).json();

                if (typeof songPosts === "string") {
                    download("songs.txt", songPosts);
                }
            })();
        }

        const onLoad = () => {
            const linkElement = document.createElement("a");
            linkElement.classList.add("page-title-action");
            linkElement.innerText = "Download List";
            linkElement.id = "song-download-link";
            linkElement.addEventListener("click", onClick);

            document.querySelector(".wrap").insertBefore(
                linkElement,
                document.querySelector(".wp-header-end")
            );
        }

        window.addEventListener("load", onLoad);
    </script>
<?php
}

add_action('admin_head-edit.php', 'eva_plugin_add_custom_import_button');

require plugin_dir_path(__FILE__) . 'inc/routes.php';
