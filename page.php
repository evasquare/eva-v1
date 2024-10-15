<style>
    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .center>.page {
        width: var(--desktop-view-width);
        max-width: var(--content-desktop-view-max-width);

        @media only screen and (max-width: 600px) {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .size-post-thumbnail {
        aspect-ratio: 16/9;
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>

<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>
    <div class="center">
        <div class="page">
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content');
                get_template_part('template-parts/comments');
            }
            ?>
        </div>
    </div>
</body>

<?php get_footer(); ?>