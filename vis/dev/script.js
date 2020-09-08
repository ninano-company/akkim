var nick = document.querySelector('#rgstNick');
var desc = document.querySelector('#rgstDesc');

function faToggle( object ) {
    if ( object.classList.contains('fas') ) {
        object.classList.remove('fas');
        object.classList.add('far');
    } else {
        object.classList.remove('far');
        object.classList.add('fas');
    }
}

$(document).ready(function(){ 

    var fileTarget = $('.rgstFileBox .upload-hidden');
    var akkim = $('.akkim');
    var edit = $('.edit');
    var gallery = document.querySelector('.visGallery .gridContainer');

    akkim[0].addEventListener('click', function() {
        location.href="../../nemo";
    });
    akkim[1].addEventListener('click', function() {
        document.querySelector('.visRgst').style.display = 'none';
        document.querySelector('.visGallery').style.display = 'grid';
    });

    document.querySelector('.fa-edit').addEventListener('click', function() {
        document.querySelector('.visGallery').style.display = 'none';
        document.querySelector('.visRgst').style.display = 'grid';
    });

    fileTarget.on('change', function(){ 
        if(window.FileReader){ 
            var filename = $(this)[0].files[0].name; 
        } else { 
            var filename = $(this).val().split('/').pop().split('\\').pop();
        }  
        $(this).siblings('.upload-name').val(filename); 
    });

    $.ajax({
        method      : 'POST',
        url         : '../../ajax/rVisit.php',
        traditional : true,
        data        : {
            'read'  : 'visit'
        },
        success     : function( data ) {
            // alert(data);
          object = JSON.parse(data);
          for( i = 0; i < object.length; i++ ) {
            $(".visGallery .gridContainer").append(
                `
                <div class="gridInnerContainer">
                    <div class="header">
                        <div class="nickName">
                            ${object[i].nName}
                        </div>
                        <div class="right">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                    <img class="mainImg" src="../${object[i].image}" alt="main_img">
                    <div class="bodyTop">
                        <i class="far fa-heart" onclick="faToggle( this );"></i>
                    </div>
                    <div class="content">
                        ${object[i].desc}
                    </div>
                </div>
                `
            );
          }
        },
        error       : function(request, status, error) {
            alert('hello');
        }
    });
});

function submitForm() {
    
    if  ( nick.value == "" || desc.value == "") {
        alert('이름과 방명록을 입력해주세요.');
    } else {
        var form = $('form')[0];
        var formData = new FormData( form );
        $.ajax({
            url: '../../ajax/cVisit.php',
            processData: false,
            contentType: false,
            data: formData,
            type: 'POST',
            success: function( data ){
                history.go(0);
            },
            error: function( xhr, status ) {
                confirm('다시 진행해주세요');
            }
        });
    }

}