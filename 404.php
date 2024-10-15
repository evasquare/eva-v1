<style>
    .not-found-message {
        width: 100%;
        text-align: center;
    }
</style>

<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>
    <div class="not-found-message">
        Not Found. :(
    </div>
</body>

<?php get_footer(); ?>