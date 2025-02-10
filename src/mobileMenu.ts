const registerMobileMenu = () => {
    const menuButton = document.querySelector(".mobile-menu-toggle");
    const mobileMenu = document.querySelector("#mobile-menu-view");

    if (!mobileMenu) {
        return;
    }

    menuButton?.addEventListener("click", async () => {
        if (
            !mobileMenu.classList.contains("show-menu") &&
            !mobileMenu.classList.contains("hide-menu")
        ) {
            mobileMenu.classList.toggle("hide-default", false);
            mobileMenu.classList.toggle("show-menu");
        } else {
            mobileMenu.classList.toggle("show-menu");
            mobileMenu.classList.toggle("hide-menu");
        }

        document.body.classList.toggle("scroll-lock");
    });

    window.addEventListener("resize", (e) => {
        const outerWidth = (e.target as any).outerWidth;

        if (outerWidth > 600) {
            mobileMenu.classList.toggle("hide-default", true);
            mobileMenu.classList.toggle("show-menu", false);
            mobileMenu.classList.toggle("hide-menu", false);
            document.body.classList.toggle("scroll-lock", false);
        }
    });
};

registerMobileMenu();

const toggleJsOnly = () => {
    document
        .querySelectorAll(".js-only")
        .forEach((x) => x.classList.toggle("js-only"));
};

toggleJsOnly();
