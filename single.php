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

    .comment-title {
        margin-top: 50px;
    }

    .size-post-thumbnail {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .nav-links {
        width: 100%;

        display: flex;
        flex-direction: row;
        justify-content: space-between;
        column-gap: 20px;
    }

    .nav-previous {
        width: 100%;

        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }

    .nav-next {
        width: 100%;

        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .comment-respond {
        margin-bottom: 50px;
    }

    .post-navigation {
        display: flex;
        flex-direction: row;
        column-gap: 5px;
    }

    .nav-previous .post-navigation {
        text-align: left;
    }

    .nav-next .post-navigation {
        text-align: right;
    }
</style>

<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/nav-bar'); ?>
    <div class="center">
        <div class="single">
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content');
                echo '<h1 class="comment-title">Comments</h1>';
                get_template_part('template-parts/content/comments');
            }
            ?>

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
</body>

<?php get_footer(); ?>