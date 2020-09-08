function ready() {
    const { type } = screen.orientation;
    console.log(`Fullscreen and locked to ${type}. Ready!`);
}

async function start() {
    await document.body.requestFullscreen();
    await screen.orientation.lock("landscape");
    ready();
}

function changeLayer( laya, layb ) {
    document.querySelector(laya).style.zIndex = 1;
    document.querySelector(laya).style.opacity = 0;
    document.querySelector(layb).style.zIndex = 2;
    document.querySelector(layb).style.opacity = 1;
}
