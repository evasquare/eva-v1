<?php get_header() ?>

<div class="center">
    <div class="archive-wrapper">
        <h1 class="archive-title">Songs</h1>
        <p>Check out what I listen to!
            <span class="js-only">
                <br>Or... I could <a id="random-song-page-button" href="#">open a random one</a> for you!
            </span>
        </p>
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
        <?php eva_v1_numeric_post_navigation($paged) ?>
    </div>
</div>

<?php get_footer(); ?>