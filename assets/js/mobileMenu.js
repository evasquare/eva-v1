const menuButton = document.querySelector(".mobile-menu-toggle");
const mobileMenu = document.querySelector("#mobile-menu-view");

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
    if (e.target.outerWidth > 600) {
        mobileMenu.classList.toggle("hide-default", true);
        mobileMenu.classList.toggle("show-menu", false);
        mobileMenu.classList.toggle("hide-menu", false);
        document.body.classList.toggle("scroll-lock", false);
    }
});

document
    .querySelectorAll(".js-only")
    .forEach((x) => x.classList.toggle("js-only"));
