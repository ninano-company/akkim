$(function(){
  // starting the container function
  "use strict";
  console.log('loaded');
  // start functions
  // start with search
  $('#SearchIcon').on('click',function(){
    $('form.search').css({
      'top' : 0
    });
  });

  $('.out').on('click' , function(){
    $('form.search').css({
      'top' : -100
    });
  });
  // end with search

  // start with submnue
  var li = $('.nav-item');
  li.each(function(){
    var sub = $(this).children(".dropdown-menu");
    if (sub) {
      $(this).hover(function(){
        $(this).addClass('show');
      },function(){
        $(this).removeClass('show');
      });
    };
  });
  // end submnue

  // display video
  if ($('#vlink')) {
    var link = $('#vlink') ,
        img = $('#vimg'),
        videoFrame = $('#videoFrame'),
        videoLinks = $('#videoLinks');
    // remove poster
    link.on('click' , function(){
      $(this).css({
        'display':'none',
        'z-index': 0
      });
      img.css({
        'display':'none',
        'z-index': 0
      });
      videoFrame.css({
        'z-index': 99
      })
    })
    // end remove the postr
    var btn = videoLinks.children().each(function(){
      $(this).on('click' , function(){
        var val = $(this).val();
        videoFrame.attr("src" , val);
        console.log(val);
      })
    });
    // out put videos

    // end output videos

    // strat collapsing the sidebar
    var sidebar = $('.sidebar'),
        content = $('.content'),
        on = $('#on'),
        off = $('#off');

    var hideSidebar = function (){
      sidebar.addClass('sidebarOff');
      content.addClass('contentOn');
      on.addClass('hide');
      off.removeClass('hide');
    };

    var showSidebar = function(){
      sidebar.removeClass('sidebarOff');
      content.removeClass('contentOn');
      off.addClass('hide');
      on.removeClass('hide');
    }

    on.on('click',function(){
      hideSidebar();
    })

    off.on('click',function(){
      showSidebar();
    })

    var autoResize = function () {
      if ($(window).width() <= 990) {
        hideSidebar();
      } else {
        showSidebar();
      }
    };

    $(window).bind('resize' , function(){
      autoResize();
    })
    autoResize();

    // end collapsing the sidebar
  };
  // end display video


  // 슬라이드 배너
  function colorPicker() {
    $('input[type=color]').on('change', function () {
    $(this).siblings('input').val($(this).val())
    })
    $('.fontcolor').on('change',function(){
        $(this).siblings('input').val($(this).val())
    })
}
function slideUsage(){
  $('input.textoff').attr('checked', 'checked');
  $('input.buttonoff').attr('checked', 'checked');
  $('.slideBanner input[type=radio]').click(function(){
      if($(this).hasClass('bannertext')){
          if($(this).hasClass('texton')){
              $(this).parent().find('.bannertext').removeAttr('checked');
              $(this).attr('checked', 'checked');
              $(this).parents('.valueList').find('.BannerSentence').css('display','grid');
          }
          else{
              $(this).parent().find('.bannertext').removeAttr('checked');
              $(this).attr('checked', 'checked');
              $(this).parents('.valueList').find('.BannerSentence').hide();
          }
      }
      else{
          if($(this).hasClass('buttonon')){
              $(this).parent().find('.bannerbutton').removeAttr('checked');
          $(this).attr('checked', 'checked');
          $(this).parents('.valueList').find('.BannerButton').css('display','grid');
          }
          else{
          $(this).parent().find('.bannerbutton').removeAttr('checked');
          $(this).attr('checked', 'checked');
          $(this).parents('.valueList').find('.BannerButton').hide();
          }
      }
  })
}
  $(document).ready(function(){
    var slideNum = $('.slideBanner input').val();
    console.log(slideNum)
    makeSlide(slideNum);
    slideUsage();
})
function makeSlide(hm){
    
    for(var i=0; i<hm; i++){
        var longTag = `<div class="valueList widget"><div class="slidename slideNames`+i+`">●슬라이드`+Number(i+1)+`</div>
        <div class="slideOption option">
          <div class="imgframe">현재 적용중인 이미지<span class="slimg`+i+`"></span></div>
          <span class="file"><input type="file" name="slideFile`+i+`" ></span>
          <div class="useage"><input type="radio" name="useText`+i+`" value="1" id="Use`+i+`" class="bannertext texton"><label for="Use`+i+`">문구사용</label>&nbsp;&nbsp;<input type="radio" name="useText`+i+`" value="2" id="dontUse`+i+`"class="bannertext textoff"><label for="dontUse`+i+`">사용하지 않음</label></div>
          <div class="useagebutton"><input type="radio" name="usebutton`+i+`" value="1" id="Usebutton`+i+`"class="bannerbutton buttonon"><label for="Usebutton`+i+`">버튼사용</label>&nbsp;&nbsp;<input type="radio" name="usebutton`+i+`" value="2" id="dontUsebutton`+i+`"class="bannerbutton buttonoff"><label for="dontUsebutton`+i+`">사용하지 않음</label></div>
        </div>
        <div class="BannerSentence">
            <span><span class="label">배너 문구</span><input name="BannerSentence`+i+`" class="sentence inputborder"></input></span>
            <span><span class="label">폰트</span>
                <select name="bannerFonts`+i+`">
                    <option value="0" selected>폰트를 선택해주세요</option>
                    <option value="1">나눔고딕</option>
                    <option value="2">Baloo Thambi</option>
                    <option value="3">FredokaOne</option>
                    <option value="4">Tmoney</option>
                </select>
            </span>
            <span><span class="label">폰트 사이즈</span>  <input type="number" name="bannerFontSize`+i+`" class="fontsize">px</span>
            <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="bannerfontcolor`+i+`" class="fontcolor"></span>    
        </div>
        <div class="BannerButton">
            <span><span class="label">버튼 문구</span><input name="buttonSentence`+i+`" type="text" class="sentence inputborder"></span>
            <span><span class="label">폰트 </span>
                <select name="buttonFonts`+i+`">
                    <option value="0" selected>폰트를 선택해주세요</option>
                    <option value="1">나눔고딕</option>
                    <option value="2">Baloo Thambi</option>
                    <option value="3">FredokaOne</option>
                    <option value="4">Tmoney</option>
                </select>
            </span>
            <span class="label">폰트 사이즈<input type="number" name="buttonFontSize`+i+`" class="fontsize">px</span>
            <span class="label">폰트 컬러<input type="color"><input type="text" name="buttonfontcolor`+i+`" class="fontcolor"></span>
            <span class="label">버튼 컬러<input type="color"><input type="text" name="buttoncolor`+i+`" class="fontcolor"></span>
        </div>
    </div>`
        $('.slideInfo > div').append(longTag)
        $('.file input').css('verticalAlign','top')
    }
    colorPicker();
}
  $('.slideBanner input').on('change',function(){
    $('.slideInfo > div').find('.valueList').remove();
    var number = $(this).val();
    console.log(number)
    if( number > 5){
      alert("슬라이드 최대 개수는 5개 입니다.");
      number = 5;
      $(this).val(number);
      makeSlide(number)
    }
    else if ( number < 1 ){
      alert("슬라이드 최소 개수는 5개 입니다.");
      number = 1;
      $(this).val(number);
      makeSlide(number)
    }
    else { 
      makeSlide(number)

    }
  })
  
  // end container function
});
