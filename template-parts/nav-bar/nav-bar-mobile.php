<?php $user_locale = get_user_locale(); ?>

<div class="center">
    <div id="mobile-menu-view" class="mobile-menu-view hide-default">
        <?php if ($user_locale == "en_US"): ?>
            <div class="menu-list">
                <a class="menu-list__menu-item menu-list__hover no-decoration" href="https://github.com/evasquare">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/github-white.svg"
                            alt="Github" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/github-black.svg"
                            alt="Github" />
                    </div>

                    <h2 class="menu-item__name">Github</h2>
                </a>
                <a class="menu-list__menu-item menu-list__hover no-decoration" href="mailto:eva@evasquare.com">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/email-white.svg"
                            alt="Send Email" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/email-black.svg"
                            alt="Send Email" />
                    </div>

                    <h2 class="menu-item__name">Email</h2>
                </a>
                <a class="menu-list__menu-item menu-list__hover no-decoration" href="<?php echo site_url('/songs') ?>">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/song-white.svg"
                            alt="Songs" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/song-black.svg"
                            alt="Songs" />
                    </div>

                    <h2 class="menu-item__name">Songs</h2>
                </a>
                <a class="menu-list__menu-item no-decoration menu-list__hover" href="<?php echo site_url('/ko') ?>">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/korean-white.svg"
                            alt="Send Email" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/korean-black.svg"
                            alt="Send Email" />
                    </div>
                    <h2 class="menu-item__name">한국어로 전환</h2>
                </a>
                <a class="menu-list__menu-item__now no-decoration menu-list__hover" href="<?php echo site_url('/now') ?>">
                    <div class="circle-icon__accent-color"></div>
                    <h2 class="menu-item__name">Now</h2>
                </a>
            </div>
        <?php endif; ?>
        <?php if ($user_locale == "ko_KR"): ?>
            <div class="menu-list">
                <a class="menu-list__menu-item menu-list__hover no-decoration" href="https://github.com/evasquare">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/github-white.svg"
                            alt="Github" />
                    </div>
                    <div class="black-icon">
                        <img
                            class="icon-height icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/github-black.svg"
                            alt="Github" />
                    </div>

                    <h2 class="menu-item__name">깃허브</h2>
                </a>
                <a class="menu-list__menu-item menu-list__hover no-decoration" href="mailto:eva@evasquare.com">
                    <div class="icon-height white-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/email-white.svg"
                            alt="Send Email" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/email-black.svg"
                            alt="Send Email" />
                    </div>

                    <h2 class="menu-item__name">이메일</h2>
                </a>
                <a class="menu-list__menu-item no-decoration menu-list__hover" href="<?php echo site_url('/') ?>">
                    <div class="white-icon">
                        <img
                            class="icon-height icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/english-white.svg"
                            alt="Send Email" />
                    </div>
                    <div class="icon-height black-icon">
                        <img
                            class="icon-height"
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/english-black.svg"
                            alt="Send Email" />
                    </div>
                    <h2 class="menu-item__name">Switch to English</h2>
                </a>
                <a class="menu-list__menu-item__now no-decoration menu-list__hover" href="<?php echo site_url('/now-ko') ?>">
                    <div class="circle-icon__accent-color"></div>
                    <h2 class="menu-item__name">Now</h2>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <div class="nav-bar">
        <div class="left">
            <a class="logo" href="<?php echo home_url(); ?>">
                <img
                    class="hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png"
                    alt="Eva Logo" />
            </a>
        </div>

        <?php $user_locale = get_user_locale(); ?>

        <div class="right">
            <button class="mobile-menu-toggle">
                <img
                    class="top-icon white-icon hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/hamburger-white.svg"
                    alt="Hamburger Toggle" />
                <img
                    class="top-icon black-icon hover-transition"
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/hamburger-black.svg"
                    alt="Hamburger Toggle" />
            </button>
        </div>
    </div>
</div>