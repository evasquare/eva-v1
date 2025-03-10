<?php $user_locale = get_user_locale(); ?>

<div class="center">
    <div class="nav-bar">
        <div class="left">
            <?php if ($user_locale == "en_US"): ?>
                <a class="logo" href="<?php echo esc_url(site_url('/')); ?>">
                    <img
                        class="hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/logo.png"
                        alt="Eva Logo" />
                </a>
            <?php endif; ?>
            <?php if ($user_locale == "ko_KR"): ?>
                <a class="logo" href="<?php echo esc_url(site_url('/ko')); ?>">
                    <img
                        class="hover-transition"
                        src="<?php echo get_theme_file_uri(); ?>/images/logo.png"
                        alt="Eva Logo" />
                </a>
            <?php endif; ?>


        </div>

        <div class="right">
            <div class="black-icons">
                <a class="hover-transition" href="https://github.com/evasquare">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/images/github-black.svg"
                        alt="Github" />
                </a>
                <a class="hover-transition" href="mailto:eva@evasquare.com">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/images/email-black.svg"
                        alt="Send Email" />
                </a>
                <?php if ($user_locale == "en_US"): ?>
                    <a href="<?php echo esc_url(site_url('/songs')) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?>/images/song-black.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
                <?php if ($user_locale == "ko_KR"): ?>
                    <a href="<?php echo esc_url(site_url('/ko/songs')) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?>/images/song-black.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
                <div class="language-switch">
                    <?php if ($user_locale == "en_US"): ?>
                        <a href="<?php echo esc_url(site_url('/ko')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/images/korean-black.svg"
                                alt="Korean" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale == "ko_KR"): ?>
                        <a " href=" <?php echo esc_url(site_url('/')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/images/english-black.svg"
                                alt="English" />
                        </a>
                    <?php endif; ?>
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
                <?php if ($user_locale == "en_US"): ?>
                    <a href="<?php echo esc_url(site_url('/songs')) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?>/images/song-white.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
                <?php if ($user_locale == "ko_KR"): ?>
                    <a href="<?php echo esc_url(site_url('/ko/songs')) ?>">
                        <img
                            class="icon hover-transition"
                            src="<?php echo get_theme_file_uri(); ?>/images/song-white.svg"
                            alt="Songs" />
                    </a>
                <?php endif; ?>
                <div class="language-switch">
                    <?php if ($user_locale == "en_US"): ?>
                        <a href="<?php echo esc_url(site_url('/ko')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/images/korean-white.svg"
                                alt="Korean" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale == "ko_KR"): ?>
                        <a href="<?php echo esc_url(site_url('/')) ?>">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/images/english-white.svg"
                                alt="English" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($user_locale == "en_US"): ?>
                <a class="hover-transition no-decoration" href="<?php echo esc_url(site_url('/about-me')) ?>">
                    <div class="big-button">
                        About Me
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($user_locale == "ko_KR"): ?>
                <a class="hover-transition no-decoration" href="<?php echo esc_url(site_url('/about-me-ko')) ?>">
                    <div class="big-button">
                        소개
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>