document.querySelector('.gridApp').addEventListener('click', start);

let mkFound = false;

document.querySelector('.loadBtn').style.display='block';

let board = document.querySelector('#board');
let el1 = document.querySelector('#text1');
let el2 = document.querySelector('#text2');
let el3 = document.querySelector('#text3');
let marker = document.querySelector('#target');

let btnKr = document.querySelector('.sideLUi .sideBtn3');
let btnEn = document.querySelector('.sideLUi .sideBtn2');
let btnCh = document.querySelector('.sideLUi .sideBtn1');
let btnBack = document.querySelector('.sideLUi .sideBtn4');
let btnLoad = document.querySelector('.loadBtn');

board.setAttribute('visible', false);
el1.setAttribute('visible', false);
el2.setAttribute('visible', false);
el3.setAttribute('visible', false);

marker.setAttribute('emitevents', 'true');
marker.addEventListener('markerFound', function(){
    if( mkFound == true ) {
        board.setAttribute('visible', true);
        el1.setAttribute('visible', true);
        el2.setAttribute('visible', true);
        el3.setAttribute('visible', true);
    }
})

btnKr.addEventListener('click', function(){
    mkFound = true;
    el1.setAttribute('value', tsContainer[0][1]);
    el2.setAttribute('value', tsContainer[0][2]);
    el3.setAttribute('value', tsContainer[0][3]);
    board.setAttribute('visible', true);
    el1.setAttribute('visible', true);
    el2.setAttribute('visible', true);
    el3.setAttribute('visible', true);
})

btnEn.addEventListener('click', function(){
    mkFound = true;
    el1.setAttribute('value', tsContainer[1][1]);
    el2.setAttribute('value', tsContainer[1][2]);
    el3.setAttribute('value', tsContainer[1][3]);
    board.setAttribute('visible', true);
    el1.setAttribute('visible', true);
    el2.setAttribute('visible', true);
    el3.setAttribute('visible', true);
})

btnCh.addEventListener('click', function(){
    // mkFound = true;
    // el1.setAttribute('value', tsContainer[1][1]);
    // el2.setAttribute('value', tsContainer[1][2]);
    // el3.setAttribute('value', tsContainer[1][3]);
    // board.setAttribute('visible', true);
    // el1.setAttribute('visible', true);
    // el2.setAttribute('visible', true);
    // el3.setAttribute('visible', true);
})

btnLoad.addEventListener('click', function() {
    start();
    document.querySelector('.layLoad').style.display = 'none';
    document.querySelector('.layui').style.opacity = '1';
})
// shadow
function shadow(){
  $('.shadow-off').click(function(){
    let width = $(this).width();
    $(this).css('border-radius',width)
    $('.shadow-on').removeClass('shadow-on').addClass('shadow-off')
    $(this).removeClass('shadow-off').addClass('shadow-on')
  })
  $('.shadow-on').click(function(){
    $(this).removeClass('shadow-on').addClass('shadow-off')
  })
}
// back
function back(){
 location.href = "https://ninanobiz.com/akkim/ardev/index.html"
}
