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
  $('.slideOption input[type=radio]').click(function(){
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
    var slideNum = $('input[name=slideNum]').val();
    console.log(slideNum)
    // var slideNum = "1"
    makeSlide(slideNum);
    slideUsage();
    thumbnail();
  })
  var longTag;
function makeSlide(hm){
    
    for(var i=0; i<hm; i++){
      
        longTag = `<div class="valueList gridtem slide"><div class="slidename slideNames`+i+`">슬라이드`+Number(i+1)+`<br><span class="imgframe slimg`+i+`"></span></div>
        
        <div class="file"><input type="file" name="slideFile" class="inputgrid inputfile"><br><span class="newfile thumbnail"></span></div>
        <div class="griddivision">
           <div class="BannerSentence">
              <div class="useage">배너문구사용<br>
                 <input type="radio" name="useText`+i+`" value="1" id="Use`+i+`" class="bannertext texton"><label for="Use`+i+`">O</label>
                 <input type="radio" name="useText`+i+`" value="2" id="dontUse`+i+`"class="bannertext textoff"><label for="dontUse`+i+`">X</label>
              </div>
              <span><textarea name="BannerSentence`+i+`" class="sentence inputborder inputgrid"></textarea></span>
              <span>
                  <select name="bannerFonts`+i+`" class="inputgrid">
                      <option value="0" selected>폰트를 선택해주세요</option>
                      <option value="1">나눔고딕</option>
                      <option value="2">Baloo Thambi</option>
                      <option value="3">FredokaOne</option>
                      <option value="4">Tmoney</option>
                  </select>
              </span>
              <span><input type="number" name="bannerFontSize`+i+`" class="fontsize inputborder inputgrid"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="bannerfontcolor`+i+`" class="fontcolor inputborder"></span>    
           </div>
           <div class="bannerbutton">
              <div class="useagebutton">버튼사용<br>
                 <input type="radio" name="usebutton`+i+`" value="1" id="Usebutton`+i+`"class="buttonon"><label for="Usebutton`+i+`">O</label>
                 <input type="radio" name="usebutton`+i+`" value="2" id="dontUsebutton`+i+`"class="buttonoff"><label for="dontUsebutton`+i+`">X</label>
              </div>
              <span><input name="buttonSentence`+i+`" type="text" class="sentence inputborder inputgrid"></span>
              <span>
                 <select name="buttonFonts`+i+`" class="inputgrid">
                    <option value="0" selected>폰트를 선택해주세요</option>
                    <option value="1">나눔고딕</option>
                    <option value="2">Baloo Thambi</option>
                    <option value="3">FredokaOne</option>
                    <option value="4">Tmoney</option>
                 </select>
              </span>
              <span><input type="number" name="buttonFontSize`+i+`" class="fontsize inputborder inputgrid"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="buttonfontcolor`+i+`" class="fontcolor inputborder"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="buttoncolor`+i+`" class="fontcolor inputborder"></span>
           </div>
        </div>
      </div>`
        $('.slideInfogrid').append(longTag)
        $('.file input').css('verticalAlign','top')
    }
    colorPicker();
    thumbnail();
}
function appendslide(number){
  longTag = `<div class="valueList gridtem slide"><div class="slidename slideNames`+number+`">슬라이드`+(Number(number) + 1)+`<br><span class="imgframe slimg`+number+`"></span></div>
        
        <div class="file"><input type="file" name="slideFile" class="inputgrid inputfile"><br><span class="newfile thumbnail"></span></div>
        <div class="griddivision">
           <div class="BannerSentence">
              <div class="useage">배너문구사용<br>
                 <input type="radio" name="useText`+number+`" value="1" id="Use`+number+`" class="bannertext texton"><label for="Use`+number+`">O</label>
                 <input type="radio" name="useText`+number+`" value="2" id="dontUse`+number+`"class="bannertext textoff"><label for="dontUse`+number+`">X</label>
              </div>
              <span><textarea name="BannerSentence`+number+`" class="sentence inputborder inputgrid"></textarea></span>
              <span>
                  <select name="bannerFonts`+number+`" class="inputgrid">
                      <option value="0" selected>폰트를 선택해주세요</option>
                      <option value="1">나눔고딕</option>
                      <option value="2">Baloo Thambi</option>
                      <option value="3">FredokaOne</option>
                      <option value="4">Tmoney</option>
                  </select>
              </span>
              <span><input type="number" name="bannerFontSize`+number+`" class="fontsize inputborder inputgrid"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="bannerfontcolor`+number+`" class="fontcolor inputborder"></span>    
           </div>
           <div class="bannerbutton">
              <div class="useagebutton">버튼사용<br>
                 <input type="radio" name="usebutton`+number+`" value="1" id="Usebutton`+number+`"class="buttonon"><label for="Usebutton`+number+`">O</label>
                 <input type="radio" name="usebutton`+number+`" value="2" id="dontUsebutton`+number+`"class="buttonoff"><label for="dontUsebutton`+number+`">X</label>
              </div>
              <span><input name="buttonSentence`+number+`" type="text" class="sentence inputborder inputgrid"></span>
              <span>
                 <select name="buttonFonts`+number+`" class="inputgrid">
                    <option value="0" selected>폰트를 선택해주세요</option>
                    <option value="1">나눔고딕</option>
                    <option value="2">Baloo Thambi</option>
                    <option value="3">FredokaOne</option>
                    <option value="4">Tmoney</option>
                 </select>
              </span>
              <span><input type="number" name="buttonFontSize`+number+`" class="fontsize inputborder inputgrid"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="buttonfontcolor`+number+`" class="fontcolor inputborder"></span>
              <span class="gridinputcolor"><input type="color" class="inputcolor"><input type="text" name="buttoncolor`+number+`" class="fontcolor inputborder"></span>
           </div>
        </div>
      </div>`
  $('.slideInfogrid').append(longTag);
}
function minusslide(){
  $('.slideInfogrid').find('.valueList:last').detach();
}

  $('.slidebuttonbox button').click(function(){
    var slidenumber = $('input[name=slideNum]').val();
    if($(this).hasClass('plusnum')){
      slidenumber = Number(slidenumber)+1
      $('input[name=slideNum]').val(slidenumber);
      
      if( slidenumber > 5){
        alert("슬라이드 최대 개수는 5개 입니다.");
        slidenumber = 5;
        $('input[name=slideNum]').val(slidenumber);
        
        slideUsage();
      }
      else{
      appendslide(slidenumber - 1)
      slideUsage();
      }
    }
    else{
      $('input[name=slideNum]').val(Number(slidenumber)-1);
      slidenumber = Number(slidenumber)-1
      $('input[name=slideNum]').val(slidenumber);
      
      if ( slidenumber < 1 ){
        alert("슬라이드 최소 개수는 1개 입니다.");
        slidenumber = 1;
        $('input[name=slideNum]').val(slidenumber);
        makeSlide(slidenumber)
        slideUsage();
  
      }
      else{
        minusslide()
        slideUsage();
      }
    }
  })
  // disable 박스 사용여부
  setTimeout(function(){
    $('input[type=radio]').click(function(){
      if($(this).hasClass('textoff') || $(this).hasClass('buttonoff')){
        $(this).parent().siblings('span').find('input, textarea, select').attr('disabled',true)
        $(this).parent().siblings('span').find('.sentence').css('color','#ccc')
      }
      else{
        $(this).parent().siblings('span').find('input, textarea, select').attr('disabled',false)
        $(this).parent().siblings('span').find('.sentence').css('color','#000')
      }
    })

  },1500)

  
  // 삭제 저장 알림
  $('.editbutton .btn').click(function(){
    var purpose = $(this).html();
    if($(this).hasClass('removeform')){
      if(confirm("정말로 '"+purpose+"' 하시겠습니까?")){
        location.href="boardList.php"
      }
      else{
        return false;
      }
    }
    else{
      if(confirm(purpose+" 하시겠습니까?")){
        submitfomr2();
      }
      else{
        return false;
      }
    }
  })
  // 클릭 이동 
  $('.buttonList .annebutton').click(function(){
    if($(this).hasClass('gobasic')){
      var gopo = $('.basicInfo').offset().top - 100;
    }
    else if($(this).hasClass('gologo')){
      var gopo = $('.logoinfo').offset().top - 100;
    }
    else if($(this).hasClass('goslide')){
      var gopo = $('.slideInfo').offset().top - 100;
    }
    else if ($(this).hasClass('goicon')){
      var gopo = $('.iconInfo').offset().top - 100;
    }
    else if ($(this).hasClass('goAR')){
      var gopo = $('.arListInfo').offset().top - 100;
    }
    $('html, body').animate({scrollTop:gopo});
  });

  // 파일선택 썸네일 
  function thumbnail(){
    $('.inputfile').on('change',function(e){
      var files = e.target.files;
      var reader = new FileReader();
      var thistag = $(this)
      reader.onload = function(f){
        $(thistag).siblings('.thumbnail').css('backgroundImage','url('+f.target.result+')')

      }
      reader.readAsDataURL(files[0])
    })
  };
// submit
function submitForm(obj) {
  obj.submit();
}
function submitfomr2(){
  $('form').submit();
}
// new 새 안내판

$('.makenew').click(function(){
  location.href="crBoard.php"
})
$('.region').on('change',function(){
  console.log($(this).val());
})
// end container function
})