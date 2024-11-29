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
                <div class="language-switch">
                    <?php if ($user_locale == "en_US"): ?>
                        <a class="language-switch__lang-button" href="<?php echo esc_url(site_url('/ko')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/korean-black.svg"
                                alt="Korean" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale == "ko_KR"): ?>
                        <a class="language-switch__lang-button " href="<?php echo esc_url(site_url('/')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/english-black.svg"
                                alt="English" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="white-icons">
                <a href="https://github.com/evasquare">
                    <img
                        class="icon hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/github-white.svg"
                        alt="Github" />
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
                <div class="language-switch">
                    <?php if ($user_locale != "en_US"): ?>
                        <a class="language-switch__lang-button " href="<?php echo esc_url(site_url('/')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/english-white.svg"
                                alt="English" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale != "ko_KR"): ?>
                        <a class="language-switch__lang-button" href="<?php echo esc_url(site_url('/ko')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/korean-white.svg"
                                alt="Korean" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php
            if ($user_locale == "en_US") {
                $now_url = esc_url(get_permalink(get_page_by_path('now')));
            } else if ($user_locale == "ko_KR") {
                $now_url = esc_url(get_permalink(get_page_by_path('now-ko')));
            } else {
                $now_url = esc_url(get_permalink(get_page_by_path('now')));
            }
            ?>
            <a class="hover-transition no-decoration" href="<?php echo $now_url ?>">
                <div class="big-button">
                    Now
                </div>
            </a>
        </div>
    </div>
</div>