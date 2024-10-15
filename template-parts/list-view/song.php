<style>
    .list-article-title {
        color: var(--link-color);
    }
</style>

<article>
    <a class="no-decoration" href="<?php the_permalink(); ?>">

        <?php if (strtotime(get_the_title())): ?>
            <h2 class="list-article-title"><?php echo date("F j, Y", strtotime(get_the_title())); ?></h2>
        <?php else: ?>
            <h2 class="list-article-title"><?php the_title(); ?></h1>
            <?php endif; ?>
            <hr>
    </a>
</article>