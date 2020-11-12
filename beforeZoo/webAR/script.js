document.querySelector('.gridApp').addEventListener('click', start);

btnLoad.addEventListener('click', function() {
  start();
  document.querySelector('.layLoad').style.display = 'none';
  document.querySelector('.layui').style.opacity = '1';
})
bulbSet( 0.2 );

document.querySelector('.animal').addEventListener('click', function(){
  arMode = 'bear';
   mkFound = true;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
   trBearModel2();
   document.querySelector('.jungleBg').style.display = 'block';
});

document.querySelector('.flower').addEventListener('click', function(){
  arMode = 'flower';
   mkFound = true;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
   trFlowerModel();
   document.querySelector('.blossomBg').style.display = 'block';
   sBlossomBGM.volume = 1;
   sBlossomBGM.play();
});

document.querySelector('.dinosaur').addEventListener('click', function(){
  arMode = 'dino';
   mkFound = true;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
   trDinoModel2();
   document.querySelector('.jungleBg').style.display = 'block';
});

document.querySelector('.fish').addEventListener('click', function(){
  arMode = 'sea';
   mkFound = true;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
   document.querySelector('.seaBg').style.display = 'block';
});

document.querySelector('.butterfly').addEventListener('click', function(){
  arMode = 'fly';
   mkFound = true;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
   trFlyModel();
   document.querySelector('.grassBg').style.display = 'block';
});

document.querySelector('.themaX').addEventListener('click', function(){
  arMode = '';
   mkFound = false;
   bgThemeX();
   modelClose();
   closeBGM();
   bulbSet( 0.2 );
});

for( indexA = 0; indexA < assets.length; indexA++ ) {
  assets[indexA].addEventListener('loaded', function() {
      document.querySelector('.loadingBar').innerHTML = Math.round((document.querySelector('.loadingBar').innerHTML) * 1 + 5.8);
  });
}
document.querySelector('a-assets').addEventListener('loaded', function() {
  document.querySelector('.loadingBar').style.display = 'none';
  document.querySelector('.loadBtn').style.display = 'block';
})

document.querySelector('.grassland').addEventListener('click', function(){
  bgThemeX();
  document.querySelector('.grassBg').style.display = 'block';
 });
document.querySelector('.jungle').addEventListener('click', function(){
  bgThemeX();
  document.querySelector('.jungleBg').style.display = 'block';
 });
document.querySelector('.sea').addEventListener('click', function(){
  bgThemeX();
  document.querySelector('.seaBg').style.display = 'block';
 });
document.querySelector('.cherryB').addEventListener('click', function(){
  bgThemeX();
  document.querySelector('.blossomBg').style.display = 'block';
 });
document.querySelector('.bgX').addEventListener('click', function(){
  bgThemeX();
 });
marker.addEventListener('markerFound', function(){
  if( mkFound == true ) {
    firstFounded = true;
    if( arMode == 'sea' ) {
      if( seaReady == 0 ) {
        if ( !glassChk ) {
          glassStart();
          pngw.style.display = 'block';
          glassChk = true;
          seaReady++;
        }
      } else if ( seaReady == 1 ) {
      } else {
        bulbSet( 0.2 );
        trSeaModel1();
      }
    } else if ( arMode == 'dino' ) {
      bulbSet( 0.2 );
      trDinoModel2();
    } else if ( arMode == 'flower' ) {
      bulbSet( 0.2 );
      trFlowerModel();
    } else if ( arMode == 'bear' ) {
      bulbSet( 0.2 );
      trBearModel2();
    } else if ( arMode == 'fly' ) {
      bulbSet( 0.2 );
      trFlyModel();
    }
  }
})

function glassStart() {
  document.body.addEventListener('click', function(event){
    if( glassChk == true ) {
      if( brkGlass == 0 ) {
        brkGlass++;
      } else if ( brkGlass == 1 ){
        brkGlass++;
        pnga.style.display = 'block';
        sCrack1.currentTime=0;
        sCrack1.play();
      } else if ( brkGlass == 2 ){
        brkGlass++;
        pnga.style.display = 'none';
        pngb.style.display = 'block';
        sCrack2.currentTime=0;
        sCrack2.play();
      } else if ( brkGlass == 3 ){
        brkGlass++;
        pngb.style.display = 'none';
        pngc.style.display = 'block';
        sCrack3.currentTime=0;
        sCrack3.play();
      } else if ( brkGlass == 4 ){
        trSeaModel1();
        brkGlass++;
        pngc.style.display = 'none';
        pngw.style.display = 'none';
        sCrack4.currentTime=0;
        sCrack4.play();
        sAqua.volume = 1.0;
        sAqua.play();
        seaReady = 2;
        for( var i = 0; i < bubble.length; i++ ) {
          document.getElementById( 'bubble'+i ).style.display = 'block';
        }
        floating();
      }
    }
  })
}

// thema
$('.thema_main').toggle(function(){
  $('.thema_list_hide').removeClass('thema_list_hide').addClass('thema_list_show')
  $('.thema_list_show li').css('marginLeft','10px')
  $(this).css('marginLeft','0')
  $('.animal').css('marginLeft','30px')
},function(){
  $('.thema_list_show').removeClass('thema_list_show').addClass('thema_list_hide')
  $('.thema_list_hide li').css('marginLeft','0')
})
$('.thema_list_hide li:not(.thema_main, .themaX)').click(function(){
  let url = $(this).css('background-image')
  if($(this).hasClass('dinosaur')){
    $('.thema_main').css('background-size','75%')
  }
  else {
    $('.thema_main').css('background-size','cover')
  }
  $('.thema_main').css('background-image',url)
  $('.thema_list_show').removeClass('thema_list_show').addClass('thema_list_hide')
  $('.thema_list_hide li').css('marginLeft','0')
})
$('.themaX').click(function(){
  $('.thema_main').css('background-image','url(../assets/images/thema.png)')
  $('.thema_list_show').removeClass('thema_list_show').addClass('thema_list_hide')
  $('.thema_list_hide li').css('marginLeft','0')
})
// bg
$('.bg_main').toggle(function(){
  $('.bg_list_hide').removeClass('bg_list_hide').addClass('bg_list_show')
  $('.bg_list_show li').css('marginLeft','10px')
  $(this).css('marginLeft','0')
  $('.grassland').css('marginLeft','30px')
},function(){
  $('.bg_list_show').removeClass('bg_list_show').addClass('bg_list_hide')
  $('.bg_list_hide li').css('marginLeft','0')
})
$('.bg_list_hide li:not(.bg_main, .bgX)').click(function(){
  let url = $(this).css('background-image')
  $('.bg_main').css('background-image',url)
  $('.bg_list_show').removeClass('bg_list_show').addClass('bg_list_hide')
  $('.bg_list_hide li').css('marginLeft','0')
})
$('.bgX').click(function(){
  $('.bg_main').css('background-image','url(../assets/images/bg_main.png)')
  $('.bg_list_show').removeClass('bg_list_show').addClass('bg_list_hide')
  $('.bg_list_hide li').css('marginLeft','0')
})
// back
$('.back').click(function(){
  location.href="https://ninanobiz.com/akkim/ardev/index.html"
})

// blink
$('#blink').on('click',function(){
  $(this).show(300).hide(300)
})
