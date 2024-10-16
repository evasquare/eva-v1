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
</style>


<div class="nav-bar-desktop">
    <?php get_template_part('template-parts/nav-bar-desktop'); ?>
</div>
<div class="nav-bar-mobile">
    <?php get_template_part('template-parts/nav-bar-mobile'); ?>
</div>