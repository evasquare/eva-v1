<?php get_header() ?>

<style>
    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .center>.archive {
        width: var(--desktop-view-width);
        max-width: var(--desktop-view-max-width);

        display: flex;
        flex-direction: column;
        align-content: center;
    }

    .archive>.grid {
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

    .selected a {
        color: var(--navigation-selected);
    }

    .archive__archive-title {
        margin-bottom: 0;
    }
</style>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>

    <div class="center">
        <div class="archive">
            <h1 class="archive__archive-title">Songs</h1>
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
</body>