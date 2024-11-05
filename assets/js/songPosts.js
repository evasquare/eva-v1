const randomSongPageButton = document.querySelector("#random-song-page-button");

randomSongPageButton?.addEventListener("click", async (event) => {
    event.preventDefault();

    let url = undefined;

    (async () => {
        const a = await (
            await fetch(
                `${evaV1Data.root_url}/wp-json/eva/v1/songs/random-song-post`,
                { method: "GET" }
            )
        ).json();
        url = a.songPostUrl;

        if (url) {
            const a = document.createElement("a");
            a.href = url;
            a.click();
        }
    })();
});
