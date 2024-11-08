<?php get_header(); ?>

<div class="center">
    <div class="page-wrapper">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content/content');
            get_template_part('template-parts/comments');
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>