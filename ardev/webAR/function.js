async function start() {
    await document.body.requestFullscreen();
    await screen.orientation.lock("portrait");
}

let bulb1 = document.querySelector('#bulb1');
let bulb2 = document.querySelector('#bulb2');
let bulb3 = document.querySelector('#bulb3');
let bulb4 = document.querySelector('#bulb4');
let bulb5 = document.querySelector('#bulb5');
let bulb6 = document.querySelector('#bulb6');
let bulb7 = document.querySelector('#bulb7');
let bulb8 = document.querySelector('#bulb8');

let sCrack1 = document.querySelector('#crack1');
let sCrack2 = document.querySelector('#crack2');
let sCrack3 = document.querySelector('#crack3');
let sCrack4 = document.querySelector('#crack4');
let sDinoGrowl = document.querySelector('#dinoGrowl');
let sDinoRoar = document.querySelector('#dinoRoar');
let sBearRun = document.querySelector('#bearRun');
let sBearRoar = document.querySelector('#bearRoar');
let sBearSleep = document.querySelector('#bearSleep');
let sBlossomBGM = document.querySelector('#blossomBGM');
let sAqua = document.querySelector('#aquaTrack');

var imgPNG = document.querySelectorAll('.imgPNG.bgPNG');
var pnga = document.querySelector('.pnga');
var pngb = document.querySelector('.pngb');
var pngc = document.querySelector('.pngc');
var pngw = document.querySelector('.pngw');
pngw.style.opacity = '0.5';

let seaModel1 = document.querySelector('#seaModel1');
let seaModel2 = document.querySelector('#seaModel2');
let seaModel3 = document.querySelector('#seaModel3');
let dinoModel1 = document.querySelector('#dinoModel1');
let dinoModel2 = document.querySelector('#dinoModel2');
let dinoModel3 = document.querySelector('#dinoModel3');
let bearModel1 = document.querySelector('#bearModel1');
let bearModel2 = document.querySelector('#bearModel2');
let bearModel3 = document.querySelector('#bearModel3');
let flyModel1 = document.querySelector('#flyModel1');
let flyModel2 = document.querySelector('#flyModel2');
let flyModel3 = document.querySelector('#flyModel3');
let flyModel4 = document.querySelector('#flyModel4');
let flyModel5 = document.querySelector('#flyModel5');
let flyModel6 = document.querySelector('#flyModel6');
let flyModel7 = document.querySelector('#flyModel7');
let flyModel8 = document.querySelector('#flyModel8');
let flowerModel = new Array(
    document.querySelector('#flowerModel1'),
    document.querySelector('#flowerModel2'),
    document.querySelector('#flowerModel3'),
    document.querySelector('#flowerModel4'),
    document.querySelector('#flowerModel5'),
    document.querySelector('#flowerModel6'),
    document.querySelector('#flowerModel7'),
    document.querySelector('#flowerModel8'),
    document.querySelector('#flowerModel9'),
    document.querySelector('#flowerModel10'),
    document.querySelector('#flowerModel11'),
    document.querySelector('#flowerModel12'),
    document.querySelector('#flowerModel13'),
    document.querySelector('#flowerModel14'),
    document.querySelector('#flowerModel15'),
    document.querySelector('#flowerModel16')
);

let assets = new Array(
    document.querySelector('#nemo1'), 
    document.querySelector('#nemo2'), 
    document.querySelector('#nemo3'),
    document.querySelector('#dino1'),
    document.querySelector('#dino2'),
    document.querySelector('#dino3'),
    document.querySelector('#bear1'),
    document.querySelector('#bear2'),
    document.querySelector('#bear3'),
    document.querySelector('#flower1'),
    document.querySelector('#flower2'),
    document.querySelector('#flower3'),
    document.querySelector('#flower4'),
    document.querySelector('#fly1'),
    document.querySelector('#fly2'),
    document.querySelector('#fly3'),
    document.querySelector('#fly4')
);

let flowerX = new Array(flowerModel.length);
let flowerY = new Array(flowerModel.length);
let flowerZ = new Array(flowerModel.length);

let mkFound = false;
let arMode = '';
let ready2 = 0;
let startChk = false;
let crack = 0;
let brkGlass = 0;
let glassChk = false;
let firstFounded = false;

let seaReady = 0;
let marker = document.querySelector('#target');
let btnLoad = document.querySelector('.loadBtn');

marker.setAttribute('emitevents', 'true');

seaModel1.setAttribute('visible', false);
seaModel2.setAttribute('visible', false);
seaModel3.setAttribute('visible', false);
dinoModel1.setAttribute('visible', false);
dinoModel2.setAttribute('visible', false);
dinoModel3.setAttribute('visible', false);
bearModel1.setAttribute('visible', false);
bearModel2.setAttribute('visible', false);
bearModel3.setAttribute('visible', false);
flyModel1.setAttribute('visible', false);
flyModel2.setAttribute('visible', false);
flyModel3.setAttribute('visible', false);
flyModel4.setAttribute('visible', false);
flyModel5.setAttribute('visible', false);
flyModel6.setAttribute('visible', false);
flyModel7.setAttribute('visible', false);
flyModel8.setAttribute('visible', false);
for( index=0; index < flowerModel.length; index++ ) {
    flowerModel[index].setAttribute('visible', false);
}

function closeBGM() {
    sCrack1.currentTime = 0;
    sCrack1.pause();
    sCrack2.currentTime = 0;
    sCrack2.pause();
    sCrack3.currentTime = 0;
    sCrack3.pause();
    sCrack4.currentTime = 0;
    sCrack4.pause();
    sDinoGrowl.currentTime = 0;
    sDinoGrowl.pause();
    sDinoRoar.currentTime = 0;
    sDinoRoar.pause();
    sBearRun.currentTime = 0;
    sBearRun.pause();
    sBearRoar.currentTime = 0;
    sBearRoar.pause();
    sBearSleep.currentTime = 0;
    sBearSleep.pause();
    sBlossomBGM.currentTime = 0;
    sBlossomBGM.pause();
    sAqua.currentTime = 0;
    sAqua.pause();
}

function bulbSet( intensity ) {
    bulb1.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb2.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb3.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb4.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb5.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb6.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb7.setAttribute('light', 'type: point; intensity: '+ intensity);
    bulb8.setAttribute('light', 'type: point; intensity: '+ intensity);
}

function trSeaModel1() {
    seaModel2.setAttribute('visible', false);
    seaModel3.setAttribute('visible', false);
    seaModel1.setAttribute('visible', true);
    seaModel1.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trSeaModel2() {
    seaModel1.setAttribute('visible', false);
    seaModel3.setAttribute('visible', false);
    seaModel2.setAttribute('visible', true);
    seaModel2.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trSeaModel3() {
    seaModel1.setAttribute('visible', false);
    seaModel2.setAttribute('visible', false);
    seaModel3.setAttribute('visible', true);
    seaModel3.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}

function trDinoModel1() {
    dinoModel2.setAttribute('visible', false);
    dinoModel3.setAttribute('visible', false);
    dinoModel1.setAttribute('visible', true);
    dinoModel1.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trDinoModel2() {
    sDinoGrowl.volume = 1.0;
    sDinoGrowl.currentTime = 0;
    sDinoGrowl.play();
    dinoModel1.setAttribute('visible', false);
    dinoModel3.setAttribute('visible', false);
    dinoModel2.setAttribute('visible', true);
    dinoModel2.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trDinoModel3() {
    sDinoRoar.volume = 1.0;
    sDinoRoar.currentTime = 0;
    sDinoRoar.play();
    dinoModel1.setAttribute('visible', false);
    dinoModel2.setAttribute('visible', false);
    dinoModel3.setAttribute('visible', true);
    dinoModel3.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trFlyModel() {
    flyModel1.setAttribute('visible', true);
    flyModel2.setAttribute('visible', true);
    flyModel3.setAttribute('visible', true);
    flyModel4.setAttribute('visible', true);
    flyModel5.setAttribute('visible', true);
    flyModel6.setAttribute('visible', true);
    flyModel7.setAttribute('visible', true);
    flyModel8.setAttribute('visible', true);
    flyModel1.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
    flyModel2.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1.2"});
    flyModel3.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1.5"});
    flyModel4.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1"});
    flyModel5.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
    flyModel6.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1.2"});
    flyModel7.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1.5"});
    flyModel8.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "1"});
}
function trBearModel1() {
    sBearRun.volume = 1.0;
    sBearRun.currentTime = 0;
    sBearRun.play();
    bearModel2.setAttribute('visible', false);
    bearModel3.setAttribute('visible', false);
    bearModel1.setAttribute('visible', true);
    bearModel1.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trBearModel2() {
    sBearSleep.volume = 1.0;
    sBearSleep.currentTime = 0;
    sBearSleep.play();
    bearModel1.setAttribute('visible', false);
    bearModel3.setAttribute('visible', false);
    bearModel2.setAttribute('visible', true);
    bearModel2.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}
function trBearModel3() {
    sBearRoar.volume = 1.0;
    sBearRoar.currentTime = 0;
    sBearRoar.play();
    bearModel1.setAttribute('visible', false);
    bearModel2.setAttribute('visible', false);
    bearModel3.setAttribute('visible', true);
    bearModel3.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
}

function modelClose() {
    for ( indexFC = 0; indexFC < flowerModel.length; indexFC++ ) {
        flowerModel[indexFC].setAttribute('visible', false);
        flowerModel[indexFC].removeAttribute('animation-mixer');
    }
    seaModel1.setAttribute('visible', false);
    seaModel2.setAttribute('visible', false);
    seaModel3.setAttribute('visible', false);
    dinoModel1.setAttribute('visible', false);
    dinoModel2.setAttribute('visible', false);
    dinoModel3.setAttribute('visible', false);
    bearModel1.setAttribute('visible', false);
    bearModel2.setAttribute('visible', false);
    bearModel3.setAttribute('visible', false);
    flyModel1.setAttribute('visible', false);
    flyModel2.setAttribute('visible', false);
    flyModel3.setAttribute('visible', false);
    flyModel4.setAttribute('visible', false);
    flyModel5.setAttribute('visible', false);
    flyModel6.setAttribute('visible', false);
    flyModel7.setAttribute('visible', false);
    flyModel8.setAttribute('visible', false);
    seaModel1.removeAttribute('animation-mixer');
    seaModel2.removeAttribute('animation-mixer');
    seaModel3.removeAttribute('animation-mixer');
    dinoModel1.removeAttribute('animation-mixer');
    dinoModel2.removeAttribute('animation-mixer');
    dinoModel3.removeAttribute('animation-mixer');
    bearModel1.removeAttribute('animation-mixer');
    bearModel2.removeAttribute('animation-mixer');
    bearModel3.removeAttribute('animation-mixer');
    flyModel1.removeAttribute('animation-mixer');
    flyModel2.removeAttribute('animation-mixer');
    flyModel3.removeAttribute('animation-mixer');
    flyModel4.removeAttribute('animation-mixer');
    flyModel5.removeAttribute('animation-mixer');
    flyModel6.removeAttribute('animation-mixer');
    flyModel7.removeAttribute('animation-mixer');
    flyModel8.removeAttribute('animation-mixer');
    startChk = false;
}

function close() {
    modelClose();
    bgThemeX();
    closeBGM();
    seaReady = 0;
    brkGlass = 0;
    ready2 = 0;
    glassChk = false;
    startChk = false;
    mkFound = false;
    arMode = '';
    pnga.style.display = 'none';
    pngb.style.display = 'none';
    pngc.style.display = 'none';
    pngw.style.display = 'none';
    bulb1.setAttribute('light', 'type: point; intensity: 0.4');
    bulb2.setAttribute('light', 'type: point; intensity: 0.4');
    bulb3.setAttribute('light', 'type: point; intensity: 0.4');
    bulb4.setAttribute('light', 'type: point; intensity: 0.4');
    bulb5.setAttribute('light', 'type: point; intensity: 0.4');
    bulb6.setAttribute('light', 'type: point; intensity: 0.4');
    bulb7.setAttribute('light', 'type: point; intensity: 0.4');
    bulb8.setAttribute('light', 'type: point; intensity: 0.4');
}

function flowerDance() {
    for( indexFD = 0; indexFD < flowerModel.length; indexFD++ ) {
        if ( flowerZ[indexFD] > 2.5 ) {
            setFlowerPosition( indexFD );
        } else {
            flowerX[indexFD] = flowerX[indexFD] + ( Math.random() - 0.5 ) * 0.04;
            flowerY[indexFD] = flowerY[indexFD] + ( Math.random() - 0.5 ) * 0.04;
            flowerZ[indexFD] = flowerZ[indexFD] + Math.random() * 0.04;
            flowerModel[indexFD].object3D.position.set(flowerX[indexFD], flowerY[indexFD], flowerZ[indexFD]);
        }
    }
    if ( startChk == true ) {
        setTimeout( flowerDance, 3 );
    }
}
function trFlowerModel() {
    if ( startChk == false ) {
        for ( indexF = 0; indexF < flowerModel.length; indexF++ ) {
            setFlowerPosition( indexF );
            flowerModel[indexF].setAttribute('visible', true);
            flowerModel[indexF].setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "2.5"});
        }
        startChk = true;
        flowerDance();
    }
}
function setFlowerPosition( num ) {
    flowerX[num] = Math.random() * 6 - 3;
    flowerY[num] = Math.random() * 6;
    flowerZ[num] = - Math.random() * 6 - 3;
    flowerModel[num].object3D.position.set(flowerX[num], flowerY[num], flowerZ[num]);
}

seaModel1.addEventListener('animation-loop', function() {
    seaModel1.removeAttribute('animation-mixer');
    trSeaModel2();
});
seaModel2.addEventListener('animation-loop', function() {
    seaModel2.removeAttribute('animation-mixer');
    if ( ready2 < 2 ) {
        trSeaModel2();
        ready2++;
    } else {
        trSeaModel3();
        ready2 = 0;
    }
});
seaModel3.addEventListener('animation-loop', function() {
    seaModel3.removeAttribute('animation-mixer');
    trSeaModel2();
});

dinoModel1.addEventListener('animation-loop', function() {
    dinoModel1.removeAttribute('animation-mixer');
    trDinoModel2();
});
dinoModel2.addEventListener('animation-loop', function() {
    dinoModel2.removeAttribute('animation-mixer');
    if ( ready2 < 1 ) {
        trDinoModel2();
        ready2++;
    } else {
        trDinoModel3();
        ready2 = 0;
    }
});
dinoModel3.addEventListener('animation-loop', function() {
    dinoModel3.removeAttribute('animation-mixer');
    trDinoModel2();
});

bearModel1.addEventListener('animation-loop', function() {
    bearModel1.removeAttribute('animation-mixer');
    trBearModel2();
});
bearModel2.addEventListener('animation-loop', function() {
    bearModel2.removeAttribute('animation-mixer');
    trBearModel3();
});
bearModel3.addEventListener('animation-loop', function() {
    bearModel3.removeAttribute('animation-mixer');
    trBearModel2();
});

function bgThemeX () {
    for ( indexPNG = 0; indexPNG < imgPNG.length; indexPNG++ ) {
        imgPNG[indexPNG].style.display = 'none';
    }
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
