<?php
global $eva_v1_locale;
$user_locale = get_user_locale();
$using_locale = $eva_v1_locale[$user_locale];
?>
<?php global $wp_query; ?>

<?php get_header(); ?>

<div class="center">
    <div class="archive-wrapper">
        <div class="archive-info">
            <h1 class="archive-title">
                <?php the_archive_title() ?>
            </h1>
            <div class="archive-description">
                <?php echo get_the_archive_description() ?>
            </div>
        </div>

        <div class="grid">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/list-view/post');
                }
                ?>
            <?php else : ?>
                <p><?php echo $using_locale['archive']['No post found! :(']; ?></p>
            <?php endif; ?>
        </div>
        <?php eva_v1_numeric_post_navigation($wp_query) ?>

        <?php get_template_part('template-parts/category'); ?>
    </div>
</div>

<?php get_footer(); ?>