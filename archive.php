<?php get_header() ?>

<div class="center">
    <div class="archive-wrapper">
        <div class="archive-info">
            <h1><?php the_archive_title() ?></h1>
            <?php the_archive_description() ?>
        </div>

        <div class="grid">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/list-view/post');
                }
                ?>
            <?php else : ?>
                <p>No post found! :(</p>
            <?php endif; ?>
        </div>
        <?php eva_v1_numeric_post_navigation($paged) ?>
    </div>
</div>

<?php get_footer(); ?>