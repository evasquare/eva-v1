<?php $user_locale = get_user_locale(); ?>

<div class="song-article-wrapper">
    <article>
        <?php if ($user_locale == "en_US"): ?>
            <a class="no-decoration" href="<?php the_permalink(); ?>">
                <?php if (strtotime(get_the_title())): ?>
                    <h2 class="list-article-title">
                        <?php echo get_the_date('F j, Y'); ?>
                    </h2>
                <?php else: ?>
                    <h2 class="list-article-title"><?php the_title(); ?></h2>
                <?php endif; ?>
            </a>
        <?php elseif ($user_locale == "ko_KR"): ?>
            <a class="no-decoration" href="<?php echo str_replace(site_url('/songs'), site_url('/ko/songs'), get_the_permalink()); ?>">
                <?php if (strtotime(get_the_title())): ?>
                    <h2 class="list-article-title">
                        <?php echo eva_v1_get_korean_date(); ?>
                    </h2>
                <?php else: ?>
                    <h2 class="list-article-title"><?php the_title(); ?></h2>
                <?php endif; ?>
            </a>
        <?php endif; ?>
        <hr>
        </a>
    </article>
</div>