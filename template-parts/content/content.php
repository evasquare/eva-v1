<style>
    .size-post-thumbnail {
        object-fit: cover;
    }

    .no-image {
        width: 100%;
        height: auto;
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
        background-color: var(--accent-color);
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

    .post-info {
        color: var(--article-date-color);
        margin-bottom: 50px;
    }

    .post-title {
        margin-bottom: 10px;
        line-height: 1.4;
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

        <?php if (is_single()): ?>
            <div class="post-info">
                <?php $user_locale = get_user_locale(); ?>
                <?php echo get_the_date('F j, Y'); ?> / Category: <?php the_category(", "); ?>
            </div>
        <?php endif; ?>

        <?php the_tags(); ?>
        <?php the_content(); ?>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>