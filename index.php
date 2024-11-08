<?php get_header() ?>

<div class="center">
    <div class="index-wrapper">
        <?php if (have_posts()) : ?>
            <div class="grid">
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/list-view/post');
                }
                ?>
            </div>
        <?php else : ?>
            <p class="not-found">No post found! :(</p>
        <?php endif; ?>
        <?php eva_v1_numeric_post_navigation($paged) ?>
    </div>
</div>

<?php get_footer(); ?>