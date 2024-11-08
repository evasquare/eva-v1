<div class="nav-bar-desktop">
    <?php get_template_part('template-parts/nav-bar/nav-bar-desktop'); ?>
</div>
<div class="nav-bar-mobile">
    <noscript>
        <?php get_template_part('template-parts/nav-bar/nav-bar-desktop'); ?>
    </noscript>
    <div class="js-only">
        <?php get_template_part('template-parts/nav-bar/nav-bar-mobile'); ?>
    </div>
</div>