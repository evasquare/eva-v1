<?php get_header(); ?>
<?php
$song_query = new WP_Query(array(
    'post_type' => 'song',
    'paged' => get_query_var('paged') ?: 1,
));
?>
<div class="center">
    <div class="archive-song-wrapper">
        <div class="archive-info">
            <h1 class="archive-title">음악</h1>
            <div class="archive-description">
                제가 듣는 음악을 확인해보세요!
                <span class="js-only">
                    <br>아니면 제가 <a id="random-song-page-button-ko" href="#">아무거나 골라</a> 드릴게요!
                </span>
            </div>
        </div>

        <?php if ($song_query->have_posts()) : ?>
            <?php
            while ($song_query->have_posts()): ?>
                <?php $song_query->the_post(); ?>
                <?php
                get_template_part('template-parts/list-view/song');
                ?>

            <?php endwhile; ?>
        <?php else: ?>
            <p>No post found! :(</p>
        <?php endif; ?>

        <?php eva_v1_numeric_post_navigation($song_query) ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>