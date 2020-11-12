var nick = document.querySelector('.write_name');
var desc = document.querySelector('.main_text');
var pwd = document.querySelector('.write_passwd');
var tmp_pwd = '';
var submitChk = null;
var tmpNick = null;
var tmpDesc = null;
var tmpDate = null;

function createChk() {
  submitChk = 0;
}
function updateChk() {
  submitChk = 1;
}

$(document).ready(function(){

    $.ajax({
        method      : 'POST',
        url         : '../../ajax/rVisit.php',
        traditional : true,
        data        : {
            'read'  : 'visit'
        },
        success     : function( data ) {
          object = JSON.parse(data);
          for( i = 0; i < object.length; i++ ) {
            if( object[i].image != null ) {
              $("#guest_main").append(
                `
                <section class="mention_box">
                  <header class="box_header">
                    <span class="user_name">${object[i].nName}</span>
                    <div class="mention_setting" onclick="getTmpPwd( this ); updateChk();">
                      <ul class="setting_list">
                      <li class="setting_revice" ><a href="#none"><span>수정하기</span></a></li>
                      <li class="setting_delete" ><a href="#none"><span>삭제하기</span></a></li>
                      </ul>
                    </div>
                  </header>
                  <div class="mention_img"><img src="../../uploads/${object[i].image}" alt="/"></div>
                  <div class="mention_text_box">
                    <p class="mention_text">${object[i].desc}</p>
                    <input type="hidden" name="crted" value="${object[i].crt}"/>
                    <div class="like_empty" onclick="upLike(this);">
                      <span class="like_num">${object[i].like}</span>
                    </div>
                  </div>
                </section>
                `
              );
            } else {
              $("#guest_main").append(
                `
                <section class="mention_box">
                  <header class="box_header">
                  <span class="user_name">${object[i].nName}</span>
                  <div class="mention_setting">
                    <ul class="setting_list" onclick="getTmpPwd( this ); updateChk();">
                    <li class="setting_revice" ><a href="#none"><span>수정하기</span></a></li>
                    <li class="setting_delete" ><a href="#none"><span>삭제하기</span></a></li>
                    </ul>
                  </div>
                  </header>
                  <div class="mention_img"></div>
                  <div class="mention_text_box">
                    <p class="mention_text">${object[i].desc}</p>
                    <input type="hidden" name="crted" value="${object[i].crt}"/>
                    <div class="like_empty" onclick="upLike(this);">
                      <span class="like_num">${object[i].like}</span>
                    </div>
                  </div>
                </section>
                `
              );
            }
          }
          $(".logo").delay(1200).animate({'top': '5%'},'slow',"easeInOutCirc");
          $(".main-nav ul > li")
            .css('opacity', '0')
            .each(function(index, item) {
              setTimeout(function() {
                $(item).delay(1200).fadeTo('slow',1,"easeInOutCirc");
              }, index*175);
          });

          $(".main-nav ul > li span")
              .css('opacity', '0')
            .each(function(index, item) {
              setTimeout(function() {
                $(item).delay(1200).animate({'left': '0px', 'opacity':1},500,"easeInOutCirc");
              }, index*175);
          });

          // maps (guest copy)
          $('.maps_menu_btn').toggle(function(){
            $('.maps_menuList').animate({'left':'0'})
          },function(){
            $('.maps_menuList').animate({'left':'-100%'})
          });

          // maps end
          $('.guest_menu_btn').toggle(function(){
            $('.guest_menuList').animate({'left':'0'})
          },
          function(){
            $('.guest_menuList').animate({'left':'-100%'})
          });
          $('.mention_setting').toggle(function(){
            $(this).children('.setting_list').fadeIn(100)
          },function(){
            $(this).children('.setting_list').fadeOut(100)
          })

          $('.setting_revice').click(function(){
            $('body').addClass('body_modal')
            $('#revice').show(300)
          })

          // $('.passwd_check').click(function(){
          //   if( document.querySelector('.input_password').value == tmp_pwd ) {
          //     $('body').removeClass('body_modal')
          //     $('#revice').hide(200)
          //     $('.write_box').animate({'bottom':'0'})
          //   } else {
          //     alert('비밀번호를 다시 입력해주세요');
          //   }
          // })
          $('.passwd_cancel').click(function(){
            $('body').removeClass('body_modal')
            $('#revice').hide(200)
          })


          $('.setting_delete').click(function(){
            $('body').addClass('body_modal')
            $('#revice2').show(200)
          })
          $('.delete_passwd_cancel').click(function(){
            $('body').removeClass('body_modal')
            $('#revice2').hide(200)
          })
          // $('.passwd_check2').click(function(){
          //   if( document.querySelector('.input_password').value == tmp_pwd ) {
          //     $('#revice2').hide(200)
          //     $('.section_delete').show(200)
          //   } else {
          //     alert('비밀번호를 다시 입력해주세요');
          //   }
          // })
          $('.delete_yes').click(function(){
            $('body').removeClass('body_modal')
            $('.section_delete').hide(200)
          })
          $('.delete_no').click(function(){
            $('body').removeClass('body_modal')
            $('.section_delete').hide(200)
          })


          $('.mention_text_box').children('div').toggle(function(){
            $(this).removeClass('like_empty').addClass('like_full')
          },function(){
            $(this).removeClass('like_full').addClass('like_empty')
          })
          // like num
          $('.write_mention').click(function(){
            $('.write_box').animate({'bottom':'0'})
          })
          $('.write_cancel, .submit_texts').click(function(){
            $('.write_box').animate({'bottom':'-100%'})
          })
        },
        error       : function(request, status, error) {

        }
    });
});

function submitForm( form ) {
  if( submitChk == 0 ) {
    if  ( nick.value == "" || desc.value == "" || pwd.value == "" ) {
        alert('이름과 방명록, 비밀번호를 입력해주세요.');
    } else {
      var formData = new FormData( form );
      formData.append('create', '');
      $.ajax({
        url: '../../ajax/cVisit.php',
        processData: false,
        contentType: false,
        data: formData,
        type: 'POST',
        success: function( data ){
          if ( data == 'success' || data == 'true') {
            history.go(0);
          } else {
            alert('작성에 실패했습니다.');
          }
        },
        error: function( xhr, status ) {
          confirm('다시 진행해주세요');
        }
      });
    }
  } else if ( submitChk == 1 ) {
    if  ( nick.value == "" || desc.value == "" ) {
      alert('이름과 방명록, 비밀번호를 입력해주세요.');
    } else {
      var formData = new FormData( form );
      formData.append('update', '');
      formData.append('nick', tmpNick);
      formData.append('desc', tmpDesc);
      formData.append('crt', tmpDate);
      $.ajax({
        url: '../../ajax/uVisit.php',
        processData: false,
        contentType: false,
        data: formData,
        type: 'POST',
        success: function( data ){
          console.log(data);
          if ( data == 'success') {
            history.go(0);
          } else {
            alert('작성에 실패했습니다.');
          }
        },
        error: function( xhr, status ) {
          confirm('다시 진행해주세요');
        }
      });
    }
  }
}

function delForm() {
  $.ajax({
    method      : 'POST',
    url         : '../../ajax/dVisit.php',
    traditional : true,
    data        : {
      'nick'  : tmpNick,
      'desc'  : tmpDesc,
      'crt'   : tmpDate
    },
    success: function( data ){
      console.log(data);
    },
    error: function( xhr, status ) {
        confirm('다시 진행해주세요');
    }
  });
}

function getTmpPwd ( object ) {
  const childs = object.parentNode.parentNode.childNodes;
  const authorChild = childs[1].childNodes;
  const descChild = childs[5].childNodes;
  const tempNick = authorChild[1].innerHTML;
  const tempDesc = descChild[1].innerHTML;
  const tempDate = descChild[3].value;

  tmpNick = tempNick;
  tmpDesc = tempDesc;
  tmpDate = tempDate;

  $.ajax({
    method      : 'POST',
    url         : '../../ajax/getTempPwd.php',
    traditional : true,
    data        : {
        'nick'  : tempNick,
        'desc'  : tempDesc,
        'crt'   : tempDate
    },
    success: function( data ){
      tmp_pwd = data;
    },
    error: function( xhr, status ) {
      confirm('다시 진행해주세요');
    }
  });
}

function upLike( object ) {
  const childs = object.parentNode.parentNode.childNodes;
  const authorChild = childs[1].childNodes;
  const descChild = childs[5].childNodes;
  const tempNick = authorChild[1].innerHTML;
  const tempDesc = descChild[1].innerHTML;
  const tempDate = descChild[3].value;
  let updown = '';

  if ( object.classList.contains('like_empty') ) {
    let num_like = $(object).find('.like_num').html()
    $(object).find('.like_num').html(Number(num_like) + 1);
    updown = '+ 1';
  } else {
    let num_like = $(object).find('.like_num').html()
    $(object).find('.like_num').html(Number(num_like) - 1);
    updown = '- 1';
  }

  $.ajax({
    method      : 'POST',
    url         : '../../ajax/updownLike.php',
    traditional : true,
    data        : {
        'nick'  : tempNick,
        'desc'  : tempDesc,
        'crt'   : tempDate,
        'updown': updown
    },
    success: function( data ){
      console.log( data );
    },
    error: function( xhr, status ) {
      confirm('다시 진행해주세요');
    }
  });

}
