<?php get_header(); ?>
<?php global $wp_query; ?>

<div class="center">
    <div class="archive-song-wrapper">
        <div class="archive-info">
            <h1 class="archive-title">Songs</h1>
            <div class="archive-description">
                Check out what I listen to!
                <span class="js-only">
                    <br>Or... I could <a id="random-song-page-button" href="#">open a random one</a> for you!
                </span>
            </div>
        </div>

        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/list-view/song');
            }
            ?>
        <?php else : ?>
            <p>No post found! :(</p>
        <?php endif; ?>
        <?php eva_v1_numeric_post_navigation($wp_query) ?>
    </div>
</div>

<?php get_footer(); ?>