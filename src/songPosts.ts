declare const evaV1Data: { root_url: string };

const randomSongPageButton = document.querySelector("#random-song-page-button");

randomSongPageButton?.addEventListener("click", async (event) => {
    event.preventDefault();

    let url = undefined;

    (async () => {
        const songPosts = await (
            await fetch(
                `${evaV1Data.root_url}/wp-json/eva-theme/v1/songs/song-urls`,
                { method: "GET" }
            )
        ).json();

        const url = songPosts[Math.floor(Math.random() * songPosts.length)];
        if (url) {
            const a = document.createElement("a");
            a.href = url;
            a.click();
        }
    })();
});

const randomSongPageButtonKorean = document.querySelector(
    "#random-song-page-button-ko"
);

randomSongPageButtonKorean?.addEventListener("click", async (event) => {
    event.preventDefault();

    let url = undefined;

    (async () => {
        let songPosts: string[] = await (
            await fetch(
                `${evaV1Data.root_url}/wp-json/eva-theme/v1/songs/song-urls`,
                { method: "GET" }
            )
        ).json();

        songPosts = songPosts.map((item) => {
            return item.replace("/songs/", "/ko/songs/");
        });

        const url = songPosts[Math.floor(Math.random() * songPosts.length)];
        if (url) {
            const a = document.createElement("a");
            a.href = url;
            a.click();
        }
    })();
});
