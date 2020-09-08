document.querySelector('.gridApp').addEventListener('click', start);

//lay1
setTimeout(function(){
    document.querySelector('.lay1 img').style.display = 'none';
    document.querySelector('.lay1 .loading').innerHTML = '화면을 눌러주세요';
    document.querySelector('.lay1').addEventListener('click', function(){
        document.querySelector('div.lay1').style.zIndex = 1;
        document.querySelector('div.lay1').style.opacity = 0;
        document.querySelector('div.lay2').style.zIndex = 2;
        document.querySelector('div.lay2').style.opacity = 1;
    })
}, 5000);

//lay2 : select Mode
document.querySelector('.lay2 .uibtn1').addEventListener('click', function() {
    location.href="../vis/dev";
});
document.querySelector('.lay2 .uibtn2').addEventListener('click', function() {
    document.querySelector('div.lay2').style.zIndex = 1;
    document.querySelector('div.lay2').style.opacity = 0;
    document.querySelector('div.lay3').style.zIndex = 2;
    document.querySelector('div.lay3').style.opacity = 1;
});
document.querySelector('.lay2 .uibtn3').addEventListener('click', function() {
    document.querySelector('div.lay2').style.zIndex = 1;
    document.querySelector('div.lay2').style.opacity = 0;
    document.querySelector('div.lay5').style.zIndex = 2;
    document.querySelector('div.lay5').style.opacity = 1;
    stAni();
    eventChk1 = true;
});
document.querySelector('.lay2 .uibtn4').addEventListener('click', function() {
    location.href="nmap://map?&appname=com.example.myapp";
});

//lay3 : select Lang
document.querySelector('.lay3 .uibtn1').addEventListener('click', function() {
    document.querySelector('div.lay3').style.zIndex = 1;
    document.querySelector('div.lay3').style.opacity = 0;
    document.querySelector('div.lay4').style.zIndex = 2;
    document.querySelector('div.lay4').style.opacity = 1;
});
document.querySelector('.lay3 .uibtn2').addEventListener('click', function() {
    document.querySelector('div.lay3').style.zIndex = 1;
    document.querySelector('div.lay3').style.opacity = 0;
    document.querySelector('div.lay4').style.zIndex = 2;
    document.querySelector('div.lay4').style.opacity = 1;
    startSignBrd();
    translationChkEng = true;
});
document.querySelector('.lay3 .uibtn3').addEventListener('click', function() {
    document.querySelector('div.lay3').style.zIndex = 1;
    document.querySelector('div.lay3').style.opacity = 0;
    document.querySelector('div.lay4').style.zIndex = 2;
    document.querySelector('div.lay4').style.opacity = 1;
});
document.querySelector('.lay3 .sideRUi .sideBtn1').addEventListener('click', function() {
    document.querySelector('div.lay3').style.zIndex = 1;
    document.querySelector('div.lay3').style.opacity = 0;
    document.querySelector('div.lay2').style.zIndex = 2;
    document.querySelector('div.lay2').style.opacity = 1;
});

//lay4 : singBoard
document.querySelector('.lay4 .sideRUi .sideBtn1').addEventListener('click', function() {
    document.querySelector('div.lay4').style.zIndex = 1;
    document.querySelector('div.lay4').style.opacity = 0;
    document.querySelector('div.lay3').style.zIndex = 2;
    document.querySelector('div.lay3').style.opacity = 1;
    backGo();
});
document.querySelector('.lay4 .sideRUi .sideBtn3').addEventListener('click', function() {
    document.querySelector('div.lay4').style.zIndex = 1;
    document.querySelector('div.lay4').style.opacity = 0;
    document.querySelector('div.lay2').style.zIndex = 2;
    document.querySelector('div.lay2').style.opacity = 1;
    backGo();
});

//lay5 : AR seaContents
document.querySelector('.lay5 .sideRUi .sideBtn1').addEventListener('click', function() {
    document.querySelector('div.lay5').style.zIndex = 1;
    document.querySelector('div.lay5').style.opacity = 0;
    document.querySelector('div.lay2').style.zIndex = 2;
    document.querySelector('div.lay2').style.opacity = 1;
    backGo();
});

//lay6 : 



//WebAR Scripts
var fish1 = document.querySelector('#targetNemo1');
var fish2 = document.querySelector('#targetNemo2');
var fish3 = document.querySelector('#targetNemo3');
var grass1 = document.querySelector('#targetSeagrass1');
var grass2 = document.querySelector('#targetSeagrass2');
var grass3 = document.querySelector('#targetSeagrass3');
var grass4 = document.querySelector('#targetSeagrass4');
var imga = document.querySelector('.imgPNG.imga');
var imgb = document.querySelector('.imgPNG.imgb');
var imgc = document.querySelector('.imgPNG.imgc');
var text1 = document.querySelector('#text1');
var text2 = document.querySelector('#text2');
var text3 = document.querySelector('#text3');
var text4 = document.querySelector('#text4');
var marker1 = document.querySelector('#target1');
var marker2 = document.querySelector('#target2');
var sGlass = document.querySelector('#glassClank');
var sBubble = document.querySelector('#deepWaterBubble');

var sts = false;
var fish3Trigger = 0;
var brkGlass = 0;
var glassChk = 0;
var aniChk = false;
var thRd = false;

fish1.setAttribute('visible', false);
fish2.setAttribute('visible', false);
fish3.setAttribute('visible', false);
grass1.setAttribute('visible', false);
grass2.setAttribute('visible', false);
grass3.setAttribute('visible', false);
grass4.setAttribute('visible', false);
text1.setAttribute('visible', false);
text2.setAttribute('visible', false);
text3.setAttribute('visible', false);
text4.setAttribute('visible', false);

marker1.setAttribute('emitevents', 'true');
marker2.setAttribute('emitevents', 'true');

function stAni() {
    marker1.addEventListener('markerFound', function() {
        if( eventChk1 == true ) {
            if( aniChk == 0 ) {
                if ( !glassChk ) {
                    glassStart();
                    document.querySelector('.lay5 .headText').innerHTML = '유리를 두드려주세요!';
                    document.querySelector('.lay5 .sideBtn2').style.display = 'block';
                    glassChk = true;
                    aniChk++;
                }
            } else if ( aniChk == 1 ) {
            } else {
                grass1.setAttribute('visible', true);
                grass2.setAttribute('visible', true);
                grass3.setAttribute('visible', true);
                grass4.setAttribute('visible', true);
                fish1.setAttribute('visible', true);
                fish2.setAttribute('visible', false);
                fish3.setAttribute('visible', false);
                fish1.setAttribute('animation-mixer', {clip: "*", loop: "once", repetitions: "infinity", timeScale: "0.7"});
            }
        }
    })
}

function startSignBrd() {
    marker2.addEventListener('markerFound', function() {
        if( translationChkEng == true ) {
            text1.setAttribute('visible', true);
            text2.setAttribute('visible', true);
            text3.setAttribute('visible', true);
            text4.setAttribute('visible', true);
        } else {

        }
    })
}

function glassStart() {
    document.querySelector('.lay5').classList.add('gridBgGlass');
    document.querySelector('.lay5').style.opacity = 0.5;
    document.querySelector('.lay5').classList.remove('gridBgNone');

    document.querySelector('.lay5').addEventListener('click', function(event){
        if( glassChk == true ) {
            if( brkGlass == 0 ) {
                brkGlass++;
            } else if ( brkGlass == 1 ){
                brkGlass++;
                imga.style.display = 'block';
                sGlass.currentTime=0;
                sGlass.play();
            } else if ( brkGlass == 2 ){
                brkGlass++;
                imga.style.display = 'none';
                imgb.style.display = 'block';
                sGlass.currentTime=0;
                sGlass.play();
            } else if ( brkGlass == 3 ){
                brkGlass++;
                imgb.style.display = 'none';
                imgc.style.display = 'block';
                sGlass.currentTime=0;
                sGlass.play();
            } else if ( brkGlass == 4 ){
                document.querySelector('.lay5 .headText').innerHTML = '중앙에 마커가 보이도록 카메라를 비춰 주세요';
                document.querySelector('.lay5 .headText').style.display = 'none';
                fish1.setAttribute('visible', true);
                fish1.setAttribute('animation-mixer', {clip: "*", loop: "once", repetitions: "infinity", timeScale: "0.7"});
                grass1.setAttribute('visible', true);
                grass2.setAttribute('visible', true);
                grass3.setAttribute('visible', true);
                grass4.setAttribute('visible', true);
                brkGlass++;
                document.querySelector('.lay5').style.opacity = 1;
                imgc.style.display = 'none';
                document.querySelector('.lay5').classList.remove('gridBgGlass');
                sGlass.currentTime=0;
                sGlass.play();
                sBubble.volume = 1.0;
                // sBubble.play();
                aniChk = 2;
                for( var i = 0; i < bubble.length; i++ ) {
                    document.getElementById( 'bubble'+i ).style.display = 'block';
                }
                floating();
            }
        }
    })
}

function backGo () {
    aniChk = 0;
    glassChk = false;
    brkGlass = 0;
    fish3Trigger = 0;
    fish1.setAttribute('visible', false);
    fish2.setAttribute('visible', false);
    fish3.setAttribute('visible', false);
    grass1.setAttribute('visible', false);
    grass2.setAttribute('visible', false);
    grass3.setAttribute('visible', false);
    grass4.setAttribute('visible', false);
    document.querySelector('.lay5 .headText').style.display = 'block';
    document.querySelector('.lay5 .sideBtn2').style.display = 'none';
    imga.style.display = 'none';
    imgb.style.display = 'none';
    imgc.style.display = 'none';
    document.querySelector('.lay5 .headText').innerHTML = '중앙에 마커가 보이도록 카메라를 비춰 주세요';
    document.querySelector('.lay5').style.opacity = 1;
    document.querySelector('.lay5').classList.remove('gridBgGlass');
    document.querySelector('.lay5').classList.add('grodBgNone');
    eventChk1 = false;
    translationChkEng = false;


    for( var i = 0; i < bubble.length; i++ ) {
      document.getElementById( 'bubble'+i ).style.display = 'none';
    }
}

fish1.addEventListener('animation-finished', function() {
    fish1.removeAttribute('animation-mixer');
    fish1.setAttribute('visible', false);
    fish2.setAttribute('visible', true);
    fish2.setAttribute('animation-mixer', {clip: "*", loop: "repeat", repetitions: "infinity", timeScale: "0.7"});
});

fish2.addEventListener('animation-finished', function() {
    fish2.removeAttribute('animation-mixer');
    fish2.setAttribute('visible', false);
    fish3.setAttribute('visible', true);
    fish3.setAttribute('animation-mixer', {clip: "*", loop: "once", timeScale: "0.7"});
});

fish3.addEventListener('animation-finished', function() {
    fish3.removeAttribute('animation-mixer');
    fish3.setAttribute('visible', false);
    fish2.setAttribute('visible', true);
    fish2.setAttribute('animation-mixer', {clip: "*", loop: "once", timeScale: "0.7"});
});
document.querySelector('.lay5 .sideBtn2').addEventListener('click', function() {
    html2canvas(document.body, {
        onrendered: function (canvas) {
            var a = document.createElement('a');
            a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
            a.download = 'Akkims.jpg';
            a.click();
            alert();
        }
    })
});