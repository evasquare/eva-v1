<?php
global $eva_v1_locale;
$user_locale = get_user_locale();
$using_locale = $eva_v1_locale[$user_locale];
?>

<?php get_header(); ?>

<div class="not-found-message">
    <?php echo $using_locale['404']['Not found :(']; ?>
</div>

<?php get_footer(); ?>