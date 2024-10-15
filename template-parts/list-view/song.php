<style>
    .list-article-title {
        color: var(--link-color);
    }
</style>

<article>
    <a class="no-decoration" href="<?php the_permalink(); ?>">
        <h2 class="list-article-title"><?php the_title(); ?></h1>
            <hr>
    </a>
</article>