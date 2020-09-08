// function ready() {
//     const { type } = screen.orientation;
//     console.log(`Fullscreen and locked to ${type}. Ready!`);
// }

async function start() {
    await document.body.requestFullscreen();
    await screen.orientation.lock("portrait");
    ready();
}

var bubble = new Array(20);
var bubblex = new Array(20);
var bubbley = new Array(20);
var bubblespeed = new Array(20);
var bubblek = 1;
var bubblelimit = 20 / 4;

function makebubble(){
    for(var i=0; i<bubble.length; i++){
        bubbley[i] = Math.ceil(Math.random()*window.innerHeight - 100);
        bubblex[i] = -Math.ceil(Math.random()*window.innerWidth + window.innerWidth);
        bubblespeed[i] = Math.random() + 3;
        if( i < bubblelimit ) { bubblek = 1 }
        else if ( i < bubblelimit * 2 ) { bubblek = 2 }
        else if ( i < bubblelimit * 3 ) { bubblek = 3 }
        else { bubblek = 4 }
        var Tag = "<div class='bubble"+bubblek+"' id='bubble"+i+"'></div>";
        document.write(Tag);
        bubble[i] = document.getElementById('bubble'+i);
        bubble[i].style.width = Math.ceil(Math.random()*50 + 1) + "px";
        bubble[i].style.height = bubble[i].style.width;
    }
}
makebubble();
function floating(){
    for(i = 0; i< bubble.length; i++) {
        bubblex[i] = bubblex[i] + bubblespeed[i];
        if( Math.random() > 0.5 ) {
        bubblex[i] = bubblex[i] + 0.1;
        } else {
        bubblex[i] = bubblex[i] - 0.1;
        }
        console.log(bubbley[i]);
        bubble[i].style.top = bubbley[i] + "px";
        bubble[i].style.left = bubblex[i] + "px";
        if(bubbley[i] >= window.innerHeight - 100){
            bubbley[i]=window.innerHeight - 100
        }
        else if (bubbley[i] < 0 ){
            bubbley[i] = Math.ceil(Math.random()*window.innerHeight - 100);
        }
        if ( bubblex[i] > window.innerWidth ){
            bubblex[i] = -Math.ceil(Math.random()*window.innerWidth + window.innerWidth);
            bubbley[i] = Math.ceil(Math.random()*window.innerWidth - 100);
            bubblex[i] = bubblex[i] + bubblespeed[i];
        }
    }
    let floatBub = setTimeout(floating,10);
}

function autoResize() {
    document.querySelector('body').style.height = window.innerHeight;
    document.querySelector('body').style.width = window.innerWidth;
}

window.onresize = autoResize;
