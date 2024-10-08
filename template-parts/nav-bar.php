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
            </div>
            <div class="white-icons">
                <a class="hover-transition" href="https://github.com/evasquare">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/github-white.svg"
                        alt="Github" />
                </a>
                <a class="hover-transition" href="mailto:eva@evasquare.com">
                    <img
                        class="icon"
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/email-white.svg"
                        alt="Send Email" />
                </a>
            </div>

            <a class="hover-transition no-decoration" href="<?php echo get_permalink(get_page_by_path('now')) ?>">
                <div class="big-button">
                    Now
                </div>
            </a>
        </div>
    </div>
</div>
</div>


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
        background-color: var(--scheme-color);
        color: white;
        padding: 32px 38px;
        border-radius: 150px;
    }

    .white-icons,
    .black-icons {
        height: 40px;
        column-gap: 8px;
    }
</style>