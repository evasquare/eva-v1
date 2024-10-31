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
$previous_name = "";
$output_array = array();

foreach (explode("\n", $input) as $line) {
    if (!$is_successful) {
        break;
    }
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
        }

        $is_playlist = false;
        $processed_url = null;

        if (str_starts_with($new_title, "https://youtu.be/")) {
            $processed_url = str_replace("https://youtu.be/", "", $new_title);
        } elseif (str_starts_with($new_title, "https://www.youtube.com/live/")) {
            $processed_url = str_replace("https://www.youtube.com/live/", "", $new_title);
        } elseif (str_starts_with($new_title, "https://youtube.com/playlist?list=")) {
            $processed_url = str_replace("https://youtube.com/playlist?list=", "", $new_title);
            $is_playlist = true;
        }

        if ($processed_url) {
            $output_array[] = new Song(
                $new_indent_level - 1,
                $previous_name,
                $processed_url,
                $is_playlist
            );
        }
    }

    $previous_indent_level = $new_indent_level;
    $previous_name = $new_title;
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
                $media_heading_level = $song->heading_level + 2;
                $media_name = $song->name;
                $media_url = $song->url;
                $media_is_playlist = $song->is_playlist;

                if ($media_is_playlist) {
                    $output_string = <<<MARKER
                    <h$media_heading_level class="wp-block-heading">$media_name</h$media_heading_level>
                
                    <iframe title="$media_name"
                    width="500" height="281" src="https://www.youtube.com/embed/videoseries?list=$media_url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    MARKER;
                } else {
                    $output_string = <<<MARKER
                    <h$media_heading_level class="wp-block-heading">$media_name</h$media_heading_level>
                
                    <iframe title="$media_name"
                    src="https://www.youtube.com/embed/$media_url?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    MARKER;
                }

                echo $output_string;
            }
        }
        ?>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>