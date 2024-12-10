<div class="center">
    <div class="nav-bar">
        <div class="left">
            <a class="logo" href="<?php echo esc_url(site_url('/')); ?>">
                <img
                    class="hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png"
                    alt="Eva Logo" />
            </a>
        </div>

        <?php $user_locale = get_user_locale(); ?>

        <div class="right">
            <div class="black-icons">
                <a class="hover-transition" href="https://github.com/evasquare">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/github-black.svg"
                        alt="Github" />
                </a>
                <a href="https://bsky.app/profile/evasquare.bsky.social">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/bluesky-black.svg"
                        alt="BlueSky" />
                </a>
                <a class="hover-transition" href="mailto:eva@evasquare.com">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/email-black.svg"
                        alt="Send Email" />
                </a>
                <?php if ($user_locale == "en_US"): ?>
                    <a class="hover-transition" href="<?php echo esc_url(site_url('/songs')) ?>">
                        <img
                            class="icon"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/song-black.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="white-icons">
                <a href="https://github.com/evasquare">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/github-white.svg"
                        alt="Github" />
                </a>
                <a href="https://bsky.app/profile/evasquare.bsky.social">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/bluesky-white.svg"
                        alt="BlueSky" />
                </a>
                <a href="mailto:eva@evasquare.com">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/email-white.svg"
                        alt="Send Email" />
                </a>
                <?php if ($user_locale == "en_US"): ?>
                    <a class="hover-transition" href="<?php echo esc_url(site_url('/songs')) ?>">
                        <img
                            class="icon"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/song-white.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
            </div>

            <a class="hover-transition no-decoration" href="<?php echo esc_url(site_url('/now')) ?>">
                <div class="big-button">
                    Now
                </div>
            </a>
        </div>
    </div>
</div>