<?php
global $eva_v1_locale;
$user_locale = get_user_locale();
$using_locale = $eva_v1_locale[$user_locale];
?>


<div class="center">
    <div class="nav-bar">
        <div class="left">
            <a class="logo" href="<?php echo esc_url(site_url($using_locale['navBar']['/'])); ?>">
                <img
                    class="hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/images/logo.png"
                    alt="<?php echo $using_locale['navBar']['Eva Logo']; ?>" />
            </a>
        </div>

        <div class="right">
            <div class="black-icons">
                <a class="hover-transition" href="https://github.com/evasquare">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/images/github-black.svg"
                        alt="<?php echo $using_locale['navBar']['Github']; ?>" />
                </a>
                <a class="hover-transition" href="mailto:eva@evasquare.com">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/images/email-black.svg"
                        alt="<?php echo $using_locale['navBar']['Email']; ?>" />
                </a>
                <a href="<?php echo esc_url(site_url($using_locale['navBar']['/songs'])) ?>">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/song-black.svg"
                        alt="<?php echo $using_locale['navBar']['Songs']; ?>" />
                </a>
                <div class="language-switch">
                    <a href="<?php echo esc_url(site_url($using_locale['navBar']['langSwitchUrl'])) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?><?php echo $using_locale['navBar']['/images/korean-black.svg']; ?>"
                            alt="<?php echo $using_locale['navBar']['langSwitch']; ?>" />
                    </a>
                </div>
            </div>
            <div class="white-icons">
                <a href="https://github.com/evasquare">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/github-white.svg"
                        alt="Github" />
                </a>
                <a href="mailto:eva@evasquare.com">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/email-white.svg"
                        alt="Send Email" />
                </a>
                <a href="<?php echo esc_url(site_url($using_locale['navBar']['/songs'])) ?>">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/song-white.svg"
                        alt="Songs" />
                </a>
                <div class="language-switch">
                    <a href="<?php echo esc_url(site_url($using_locale['navBar']['langSwitchUrl'])) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?><?php echo $using_locale['navBar']['/images/korean-white.svg']; ?>"
                            alt="<?php echo $using_locale['navBar']['langSwitch']; ?>" />
                    </a>

                </div>
            </div>


            <a class="hover-transition no-decoration" href="<?php echo esc_url(site_url($using_locale['navBar']['/about-me'])) ?>">
                <div class="big-button">
                    <?php echo $using_locale['navBar']['About Me'] ?>
                </div>
            </a>
        </div>
    </div>
</div>