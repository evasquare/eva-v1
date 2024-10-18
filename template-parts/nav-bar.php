<style>
    @media only screen and (min-width: 600px) {
        .nav-bar-desktop {
            display: block;
        }

        .nav-bar-mobile {
            display: none;
        }
    }

    @media only screen and (max-width: 600px) {
        .nav-bar-desktop {
            display: none;
        }

        .nav-bar-mobile {
            display: block;
        }
    }

    .js-only {
        display: none;
    }

    .js-detected {
        display: flex;
    }
</style>



<div class="nav-bar-desktop">
    <?php get_template_part('template-parts/nav-bar-desktop'); ?>
</div>
<div class="nav-bar-mobile">
    <noscript>
        <?php get_template_part('template-parts/nav-bar-desktop'); ?>
    </noscript>
    <div class="js-only">
        <?php get_template_part('template-parts/nav-bar-mobile'); ?>
    </div>
</div>