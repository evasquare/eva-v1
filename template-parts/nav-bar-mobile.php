<style>
    #wpadminbar {
        z-index: 100002;
    }

    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .hide-default {
        opacity: 0;
        visibility: hidden;
    }

    .white-icon {
        display: none;
    }

    .black-icon {
        display: block;
    }

    @media (prefers-color-scheme: dark) {
        .white-icon {
            display: block;
        }

        .black-icon {
            display: none;
        }
    }

    @keyframes showMenu {
        0% {
            opacity: 0;
            display: hidden;
        }

        1% {
            visibility: visible;
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }


    @keyframes hideMenu {
        0% {
            opacity: 1;
            visibility: visible;
        }

        99% {
            opacity: 0;
        }

        100% {
            opacity: 0;
            visibility: hidden;
        }
    }

    .show-menu {
        animation: showMenu 0.18s ease-out forwards;
    }

    .hide-menu {
        animation: hideMenu 0.18s ease-in forwards;
    }

    .mobile-menu-view {
        position: absolute;
        z-index: 100000;

        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: -300px;
        margin-bottom: -300px;

        background-color: var(--background-color);

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .menu-list {
        padding: 35px;
    }

    .menu-list>h2 {
        color: var(--text-color);
    }

    .menu-list>.menu-list__menu-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        column-gap: 12px;
    }

    .menu-list>.menu-list__menu-item__now {
        display: flex;
        flex-direction: row;
        align-items: center;
        column-gap: 12px;

        margin-top: 10px;
    }

    .menu-list__hover {
        color: var(--text-color);
        transition: all 0.17s ease-in-out;
    }

    .menu-list__hover:hover {
        color: var(--link-color);
        transform: scale(1.05, 1.05);
    }

    .menu-item__name {
        margin: 10px 0px;
    }

    .nav-bar {
        width: var(--desktop-view-width);
        max-width: var(--desktop-view-max-width);
        padding: 30px 0;

        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;

        line-height: 0;
    }

    .logo>img {
        width: 64px;
    }

    .right {
        display: flex;
        align-items: center;
        column-gap: 14px;
    }

    .mobile-menu-toggle {
        all: unset;
        cursor: pointer;
    }

    .mobile-menu-toggle :focus {
        outline: revert;
        position: relative;
        z-index: 100001;
    }

    .icon-height {
        height: 30px;
    }

    .circle-icon__accent-color {
        width: 30px;
        height: 30px;
        background-color: var(--accent-color);
        border-radius: 50%;
    }

    .top-icon {
        height: 40px;
        position: relative;
        z-index: 100001;
    }
</style>

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