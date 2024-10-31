<style>
    h2,
    h3,
    h4,
    h5 {
        margin-top: 42px;
    }
</style>

<?php
$is_successful = true;

class Song
{
    var $heading_level;
    var $name;
    var $url;
    var $is_playlist;

    function __construct($heading_level, $title, $url, $is_playlist)
    {
        $this->heading_level = $heading_level;
        $this->name = $title;
        $this->url = $url;
        $this->is_playlist = $is_playlist;
    }
}

$input = get_the_content();

$previous_indent_level = 0;
$previous_title = "";
$output_array = array();

foreach (explode("\n", $input) as $line) {
    if ($line == "") {
        continue;
    }

    // Check tab level and text
    $splitted_by_tabs = explode("    ", $line);
    $new_indent_level = 0;
    $new_title = "";

    foreach ($splitted_by_tabs as $item) {
        if ($item != "") {
            $new_title = str_replace("- ", "", end($splitted_by_tabs));
            break;
        } else {
            $new_indent_level += 1;
        }
    }

    // Check URL
    if (str_starts_with($new_title, "https://")) {
        if ($new_indent_level <= $previous_indent_level) {
            $is_successful = false;
        } else {
            if (
                str_starts_with($new_title, "https://youtu.be/") ||
                str_starts_with($new_title, "https://www.youtube.com/live/")
            ) {
                $processed_url = str_replace("https://youtu.be/", "", $new_title);
                $processed_url = str_replace("https://www.youtube.com/live/", "", $processed_url);

                array_push(
                    $output_array,
                    new Song(
                        $new_indent_level - 1,
                        $previous_title,
                        $processed_url,
                        false
                    )
                );
            } else if (str_starts_with($new_title, 'https://youtube.com/playlist?list=')) {
                $processed_url = str_replace("https://youtube.com/playlist?list=", "", $new_title);

                array_push(
                    $output_array,
                    new Song(
                        $new_indent_level - 1,
                        $previous_title,
                        $processed_url,
                        true
                    )
                );
            }
        }
    }


    $previous_indent_level = $new_indent_level;
    $previous_title = $new_title;
}
?>

<div class="wrapper">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (strtotime(get_the_title())): ?>
            <h1 class="post-title"><?php echo date("F j, Y", strtotime(get_the_title())); ?></h1>
        <?php else: ?>
            <?php the_title('<h1 class="post-title">', '</h1>'); ?>
        <?php endif; ?>

        <?php the_tags(); ?>

        <!-- <?php the_content(); ?> -->
        <?php
        if ($is_successful) {
            foreach ($output_array as $song) {
                $song_level = $song->heading_level + 2;
                $song_title = $song->name;
                $song_url = $song->url;
                $song_is_playlist = $song->is_playlist;

                if ($song_is_playlist) {
                    $output_string = <<<MARKER
                    <h$song_level class="wp-block-heading">$song_title</h$song_level>
                
                    <iframe title="$song_title"
                    width="500" height="281" src="https://www.youtube.com/embed/videoseries?list=$song_url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    MARKER;
                } else {
                    $output_string = <<<MARKER
                    <h$song_level class="wp-block-heading">$song_title</h$song_level>
                
                    <iframe title="$song_title"
                    src="https://www.youtube.com/embed/$song_url?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    MARKER;
                }

                echo $output_string;
            }
        }
        ?>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>