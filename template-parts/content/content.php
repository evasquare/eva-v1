<style>
    .size-post-thumbnail {
        object-fit: cover;
    }

    .no-image {
        width: 100%;
        height: auto;
    }

    .wp-block-kevinbatdorf-code-block-pro {
        border-radius: 15px;
        overflow: hidden;
        margin: 10px 0px;
    }

    .comment-form-comment {
        display: flex;
        flex-direction: column;
    }

    .commentlist {
        margin-bottom: 50px;
    }

    .form-submit input[type="submit"] {
        border: none;
        background: none;

        padding: 15px 20px;
        background-color: var(--scheme-color);
        color: white;
        font-size: 14px;
        font-weight: 500;
        border-radius: 6px;

        transition: all 0.16s ease-out;
        transform: none;
        cursor: pointer;
    }

    .wp-block-image img {
        width: 100% !important;
    }
</style>

<div class="wrapper">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
        <?php elseif (is_singular('post')): ?>
            <img
                class="no-image"
                src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png"
                alt="No Image" />
        <?php endif; ?>
        <?php the_title('<h1 class="post-title">', '</h1>'); ?>
        <?php the_date(); ?> in <?php the_category(", "); ?>
        <br>
        <?php the_tags(); ?>
        <?php the_content(); ?>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>