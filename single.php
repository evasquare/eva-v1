<?php get_header(); ?>

<div class="center">
    <div class="single-wrapper">
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php get_template_part('template-parts/content/content'); ?>
            <h1 class="comment-title">Comments</h1>

            <?php get_template_part('template-parts/comments'); ?>
        <?php endwhile ?>

        <?php
        eva_v1_reverse_post_navigation(
            array(
                'next_text' =>
                '<span class="post-navigation">'
                    . '%title'
                    . '<span class="arrow-right">'
                    . ' »'
                    . '</span>'
                    . '</span>',
                'prev_text' => '<span class="post-navigation">'
                    . '<span class="arrow-left">'
                    . '« '
                    . '</span>'
                    . '%title'
                    . '</span>',
            )
        );
        ?>
    </div>
</div>

<?php get_footer(); ?>