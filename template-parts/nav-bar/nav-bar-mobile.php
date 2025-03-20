<?php
global $eva_v1_locale;
$user_locale = get_user_locale();
$using_locale = $eva_v1_locale[$user_locale];
?>

<div class="center">
    <div id="mobile-menu-view" class="mobile-menu-view hide-default">
        <div class="menu-list">
            <a class="menu-list__menu-item menu-list__hover no-decoration" href="https://github.com/evasquare">
                <div class="icon-height white-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/github-white.svg"
                        alt="<?php echo $using_locale['navBar']['Github'] ?>" />
                </div>
                <div class="icon-height black-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/github-black.svg"
                        alt="<?php echo $using_locale['navBar']['Github'] ?>" />
                </div>

                <h2 class="menu-item__name"><?php echo $using_locale['navBar']['Github'] ?></h2>
            </a>
            <a class="menu-list__menu-item menu-list__hover no-decoration" href="mailto:eva@evasquare.com">
                <div class="icon-height white-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/email-white.svg"
                        alt="><?php echo $using_locale['navBar']['Email'] ?>" />
                </div>
                <div class="icon-height black-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/email-black.svg"
                        alt="><?php echo $using_locale['navBar']['Email'] ?>" />
                </div>

                <h2 class="menu-item__name"><?php echo $using_locale['navBar']['Email'] ?></h2>
            </a>
            <a class="menu-list__menu-item menu-list__hover no-decoration" href="<?php echo esc_url(site_url($using_locale['navBar']['/songs'])) ?>">
                <div class="icon-height white-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/song-white.svg"
                        alt="<?php echo $using_locale['navBar']['Songs'] ?>" />
                </div>
                <div class="icon-height black-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?>/images/song-black.svg"
                        alt="<?php echo $using_locale['navBar']['Songs'] ?>" />
                </div>

                <h2 class="menu-item__name"><?php echo $using_locale['navBar']['Songs'] ?></h2>
            </a>
            <a class="menu-list__menu-item no-decoration menu-list__hover" href="<?php echo esc_url(site_url($using_locale['navBar']['langSwitchUrl'])) ?>">
                <div class="white-icon">
                    <img
                        class="icon-height icon-height"
                        src="<?php echo get_theme_file_uri(); ?><?php echo $using_locale['navBar']['/images/korean-white.svg'] ?>"
                        alt="<?php echo $using_locale['navBar']['langSwitch'] ?>" />
                </div>
                <div class=" icon-height black-icon">
                    <img
                        class="icon-height"
                        src="<?php echo get_theme_file_uri(); ?><?php echo $using_locale['navBar']['/images/korean-black.svg'] ?>"
                        alt="<?php echo $using_locale['navBar']['langSwitch'] ?>" />
                </div>
                <h2 class="menu-item__name"><?php echo $using_locale['navBar']['langSwitch'] ?></h2>
            </a>
            <a class="menu-list__menu-item__now no-decoration menu-list__hover" href="<?php echo esc_url(site_url($using_locale['navBar']['/about-me'])) ?>">
                <div class="circle-icon__accent-color"></div>
                <h2 class="menu-item__name"><?php echo $using_locale['navBar']['About Me'] ?></h2>
            </a>
        </div>
    </div>

    <div class="nav-bar">
        <div class="left">
            <a class="logo" href="<?php echo esc_url(site_url($using_locale['navBar']['/'])); ?>">
                <img
                    class="hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/images/logo.png"
                    alt="<?php echo $using_locale['navBar']['Eva Logo'] ?>" />
            </a>
        </div>

        <div class="right">
            <button class="mobile-menu-toggle">
                <img
                    class="top-icon white-icon hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/images/hamburger-white.svg"
                    alt="<?php echo $using_locale['navBar']['Hamburger Toggle'] ?>" />
                <img
                    class="top-icon black-icon hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/images/hamburger-black.svg"
                    alt="<?php echo $using_locale['navBar']['Hamburger Toggle'] ?>" />
            </button>
        </div>
    </div>
</div>