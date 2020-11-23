jQuery(document).ready(function () {
    setTimeout(function () {
      $(".logo").delay(1200).animate({
        'top': '5%'
      }, 'slow', "easeInOutCirc");
      $(".main-nav ul > li")
        .css('opacity', '0')
        .each(function (index, item) {
          setTimeout(function () {
            $(item).delay(1200).fadeTo('slow', 1, "easeInOutCirc");
          }, index * 175);
        });
  
      $(".main-nav ul > li span")
        .css('opacity', '0')
        .each(function (index, item) {
          setTimeout(function () {
            $(item).delay(1200).animate({
              'left': '0px',
              'opacity': 1
            }, 500, "easeInOutCirc");
          }, index * 175);
        });
  
      // maps (guest copy)
      $('.maps_menu_btn').toggle(function () {
        $('.maps_menuList').animate({
          'left': '0'
        })
      }, function () {
        $('.maps_menuList').animate({
          'left': '-100%'
        })
      });
  
      // maps end
      $('.guest_menu_btn').toggle(function () {
          $('.guest_menuList').animate({
            'left': '0'
          })
        },
        function () {
          $('.guest_menuList').animate({
            'left': '-100%'
          })
        });
      let userName;
      let userText;
      $('.mention_setting').toggle(function () {
        $(this).children('.setting_list').fadeIn(100)
        $('.write_box').animate({
          'bottom': '-100%'
        })
        $('.mention_box').attr('id', "")
        $(this).parents('.mention_box').attr("id", "checked")
        userName = $(this).siblings('.user_name').html();
        userText = $(this).parents('.mention_box').find('.mention_text').html();
      }, function () {
        $(this).children('.setting_list').fadeOut(100)
      })
  
      $('.setting_revice').click(function () {
        $('body').addClass('body_modal')
        $('#revice').show(300)
      })
  
      $('.passwd_check').click(function () {
        if ($('.input_password').val() == tmp_pwd) {
          $('body').removeClass('body_modal')
          $('#revice').hide(200)
          $('.input_password').val("")
          $('.input_password2').val("")
          $('.write_box').animate({
            'bottom': '0'
          })
          $('.write_name').val(userName)
          $('.main_text').val(userText)
        } else {
          alert('비밀번호를 다시 입력해주세요');
          $('.input_password').val("")
          $('.input_password2').val("")
        }
      })
      $('.passwd_cancel').click(function () {
        $('body').removeClass('body_modal')
        $('.input_password').val("")
        $('.input_password2').val("")
        $('#revice').hide(200)
      })
  
  
      $('.setting_delete').click(function () {
        $('body').addClass('body_modal')
        $('#revice2').show(200)
      })
      $('.passwd_cancel2').click(function () {
        $('body').removeClass('body_modal')
        $('.input_password').val("")
        $('.input_password2').val("")
        $('#revice2').hide(200)
      })
      $('.passwd_check2').click(function () {
        if ($('.input_password2').val() == tmp_pwd) {
          $('#revice2').hide(200)
          $('.section_delete').show(200)
        } else {
          alert('비밀번호를 다시 입력해주세요');
        }
      })
      $('.delete_yes').click(function () {
        $('body').removeClass('body_modal')
        $('.section_delete').hide(200)
        $('#checked').remove();
      })
      $('.delete_no').click(function () {
        $('body').removeClass('body_modal')
        $('.section_delete').hide(200)
      })
  
  
      $('.mention_text_box').children('div').toggle(function () {
        $(this).removeClass('like_empty').addClass('like_full')
      }, function () {
        $(this).removeClass('like_full').addClass('like_empty')
      })
      // like num
      $('.write_mention').click(function () {
        $('.write_box').animate({
          'bottom': '0'
        })
      })
      $('.write_cancel, .submit_texts').click(function () {
        $('.write_box').animate({
          'bottom': '-100%'
        })
      })
    }, 1000);
  
    /////////////// cutton + sounds
    let cutton = $('.cutton')[0];
    let sound = document.getElementsByClassName('bgm_icon')[0];
    let audio = document.getElementsByClassName('BGM')[0];
    let audioController;
    $(document).ready(function () {
      audioController = sessionStorage.getItem('ctrlNum')
      console.log(audioController)
      audioControl();
    })
  
    function audioControl() {
      if (audioController == 1) {
        sound.style.backgroundImage = 'url("assets/images/icons/black/sound-on.png")'
        audio.play();
        sessionStorage.setItem('ctrlNum', 1)
      } else if (audioController == 0) {
        sound.style.backgroundImage = 'url("assets/images/icons/black/sound-off.png")'
        audio.pause();
        sessionStorage.setItem('ctrlNum', 0)
      }
      console.log(sessionStorage)
    }
    // if (document.referrer.indexOf('akkim') >= 0) {
    //   fakeLoader();
    //   $('.cutton').hide();
  
    // } else {
    //   audioController = 0;
    //   audioControl();
    //   $('.introBtnBox button').on('click', function () {
    //     $('.cutton').hide(80)
    //     fakeLoader();
    //     if ($(this).hasClass('removeCutton')) {
    //       audioController = 1;
    //       audioControl();
    //     }
    //   })
    //   audio.pause();
    // }
    // BGM
    $('.bgm_icon').click(function () {
      if (audioController == 1) {
        audioController = 0;
      } else {
        audioController = 1;
      }
      audioControl();
    })
  
    // btn sound
    let btn1 = document.getElementsByClassName('btn1sound')[0];
    let btn2 = document.getElementsByClassName('btn2sound')[0];
    let btn3 = document.getElementsByClassName('btn3sound')[0];
    $('.clickSound').click(function () {
      btn1.play();
      console.log('shot');
    })
    $('.backbutton').click(function () {
      btn3.play();
      console.log('goBack');
    })
    $('.inButton').click(function () {
      btn2.play();
      console.log('goIn');
    })
    // slider
    // let itemNum = document.getElementsByClassName('slide_item');
    // let itemList = itemNum.length;
    // $('.slide_mother').css('width',100*itemList+'%')
    // $('.slide_item').css('width',100/itemList+'%')
    // for(let i =0; i<itemList; i++){
    //   $('.slide_item:eq('+i+')').addClass('item'+i)
    //   $('.dotBox').append('<div class="dot"></div>').css('left','calc(50% - 5px - '+ 10*i +'px)');
    // }
    // $('.dot:eq(0)').addClass('deploy')
   
  
  
  
    // icon size
    $('.offers .entry div').css('width', '55%');
    let iconSize = $('.offers .entry div').css('width');
    $('.offers .entry div').css('height', iconSize);
  
  
  
  
  
  
  
  
  
  
  });