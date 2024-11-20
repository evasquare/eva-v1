<style>
    h2:not(:first-child),
    h3:not(:first-child),
    h4:not(:first-child),
    h5:not(:first-child) {
        margin-top: 42px;
    }
</style>

<?php get_header(); ?>

<div class="center">
    <div class="single-wrapper">
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php get_template_part('template-parts/content/content-song'); ?>
        <?php endwhile ?>
    </div>
</div>


<?php get_footer(); ?>