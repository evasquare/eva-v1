<style>
    .center {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
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
        column-gap: 16px;
    }

    .icon {
        width: 40px;
    }

    .white-icons {
        display: none;
    }

    .black-icons {
        display: flex;
    }

    @media (prefers-color-scheme: dark) {
        .white-icons {
            display: flex;
        }

        .black-icons {
            display: none;
        }
    }

    .big-button {
        background-color: var(--accent-color);
        color: white;
        padding: 32px 38px;
        border-radius: 150px;
    }

    .white-icons,
    .black-icons {
        height: 40px;
        column-gap: 8px;
    }

    .language-switch__lang-button {
        height: 40px;
    }

    .language-switch__lang-button>img {
        height: 40px;
    }
</style>

<div class="center">
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
                <div class="language-switch">
                    <?php if ($user_locale == "en_US"): ?>
                        <a class="language-switch__lang-button" href="/ko">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/korean-black.svg"
                                alt="Korean" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale == "ko_KR"): ?>
                        <a class="language-switch__lang-button " href="/">
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
                <div class="language-switch">
                    <?php if ($user_locale != "en_US"): ?>
                        <a class="language-switch__lang-button " href="/">
                            <img
                                class="icon hover-transition"
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/english-white.svg"
                                alt="English" />
                        </a>
                    <?php endif; ?>
                    <?php if ($user_locale != "ko_KR"): ?>
                        <a class="language-switch__lang-button" href="/ko">
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
                $now_url = get_permalink(get_page_by_path('now'));
            } else if ($user_locale == "ko_KR") {
                $now_url = get_permalink(get_page_by_path('now-ko'));
            } else {
                $now_url = get_permalink(get_page_by_path('now'));
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