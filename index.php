<style>
    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .center>.index {
        width: var(--desktop-view-width);
        max-width: var(--desktop-view-max-width);

        display: flex;
        flex-direction: column;
        align-content: center;
    }

    .index>.grid {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(2, 1fr);

        @media only screen and (max-width: 600px) {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .attachment-post-thumbnail,
    .no-image {
        width: 100%;
        height: auto;
        aspect-ratio: 16/9;
    }

    /*
      Page Navigation
    */
    .page-navigation-sections {
        width: 100%;

        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
    }

    .page-navigation-sections>.page-navigation-section {
        width: 100%;

        margin-top: 25px;

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .page-navigation-sections>.page-navigation-section:first-child {
        justify-content: flex-start;
    }

    .page-navigation-sections>.page-navigation-section:last-child {
        justify-content: flex-end;
    }

    .column-gap {
        column-gap: 7px;
    }

    .selected {
        color: var(--navigation-selected);
    }
</style>

<?php get_header() ?>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>

    <div class="center">
        <div class="index">
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
</body>