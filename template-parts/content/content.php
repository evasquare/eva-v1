<div class="content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
        <?php elseif (is_singular('post')): ?>
            <img
                class="no-image"
                src="<?php echo get_theme_file_uri(); ?>/images/no-image.png"
                alt="No Image" />
        <?php endif; ?>
        <?php the_title('<h1 class="post-title">', '</h1>'); ?>

        <?php if (is_single()): ?>
            <div class="post-info">
                <?php $user_locale = get_user_locale(); ?>
                <?php if ($user_locale == "en_US"): ?>
                    <?php echo get_the_date('F j, Y'); ?> / Category: <?php the_category(", "); ?>
                <?php elseif ($user_locale == "ko_KR"): ?>
                    <?php echo eva_v1_get_korean_date(); ?> / 카테고리: <?php the_category(", "); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php the_tags(); ?>
        <?php the_content(); ?>
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>