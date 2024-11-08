<div class="post-article-wrapper">
    <article>
        <a class="no-decoration" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img
                    class="no-image"
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png"
                    alt="No Image" />
            <?php endif; ?>
            <h2 class="article-title">
                <?php the_title(); ?>
            </h2>
        </a>
        <p class="article-date">
            <?php echo get_the_date('F j, Y'); ?>
        </p>
        <?php the_excerpt(); ?>
    </article>
</div>