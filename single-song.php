<style>
    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .center>.single {
        width: var(--desktop-view-width);
        max-width: var(--content-desktop-view-max-width);
    }
</style>

<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>
    <div class="center">
        <div class="single">
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <?php get_template_part('template-parts/content/content-song'); ?>

                <?php $user_locale = get_user_locale(); ?>
            <?php endwhile ?>
        </div>
    </div>
</body>

<?php get_footer(); ?>