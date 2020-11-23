
// 비우기
$('.clear').click(function () {
    $('input').val("");
    $('select').val("0");
    $('textArea').val("");
})
// submit
function submitForm(obj) {
    obj.submit();
}
// $('input[type=radio]').parent().css('gridColumn','1 / 4');
// $('input[type=radio]').parent().siblings().css('gridColumn','1 / 4');

// 로고 
$('.logo input[type=radio]').click(function(){
    if($(this).hasClass('lgImg')){
        $('.logo input[type=radio]').removeAttr('checked');
        $(this).attr('checked', 'checked');
        $('.logoImg').show();
        $('.logoWords').hide();
    }
    else{
        $('.logo input[type=radio]').removeAttr('checked');
        $(this).attr('checked', 'checked');
        $('.logoImg').hide();
        $('.logoWords').css('display','grid');
    }
})

// 슬라이더 배너
$(document).ready(function(){
    // $('.slideBanner .choice input').val(1)
    var slideNum = $('.slideBanner .choice input').val();
    console.log(slideNum)
    makeSlide(slideNum);
    slideUsage();
})
function makeSlide(hm){
    
    for(var i=0; i<hm; i++){
        var longTag = `<div class="valueList slide"><span class="slideNames`+i+`">●슬라이드`+Number(i+1)+`</span>
        <div class="slideOption option"><span class="file"><input type="file" name="slideFile`+i+`" ><span class="imgframe slimg`+i+`"></span></span>
            <span class="useage"><input type="radio" name="useText`+i+`" value="1" id="Use`+i+`" class="bannertext texton"><label for="Use`+i+`">문구사용</label>&nbsp;&nbsp;<input type="radio" name="useText`+i+`" value="2" id="dontUse`+i+`"class="bannertext textoff"><label for="dontUse`+i+`">사용하지 않음</label></span>
            <span class="useagebutton"><input type="radio" name="usebutton`+i+`" value="1" id="Usebutton`+i+`"class="bannerbutton buttonon"><label for="Usebutton`+i+`">버튼사용</label>&nbsp;&nbsp;<input type="radio" name="usebutton`+i+`" value="2" id="dontUsebutton`+i+`"class="bannerbutton buttonoff"><label for="dontUsebutton`+i+`">사용하지 않음</label></span>

        </div>
        <div class="BannerSentence">
            <span><span class="label">배너 문구</span>  <textarea name="BannerSentence`+i+`" cols="20" rows="2" class="sentence"></textarea></span>
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
            <span><span class="label">버튼 문구</span> <input name="buttonSentence`+i+`" type="text" class="content"></span>
            <span><span class="label">폰트 </span>
                <select name="buttonFonts`+i+`">
                    <option value="0" selected>폰트를 선택해주세요</option>
                    <option value="1">나눔고딕</option>
                    <option value="2">Baloo Thambi</option>
                    <option value="3">FredokaOne</option>
                    <option value="4">Tmoney</option>
                </select>
            </span>
            <span><div class="label">폰트 사이즈</div><input type="number" name="buttonFontSize`+i+`" class="fontsize">px</span>
            <span><div class="label">폰트 컬러</div><input type="color"><input type="text" name="buttonfontcolor`+i+`" class="fontcolor"></span>
            <span><div class="label">버튼 컬러</div><input type="color"><input type="text" name="buttoncolor`+i+`" class="fontcolor"></span>
        </div>
    </div>`
        $('.slideBanner .ctrlList').append(longTag)
        $('.file input').css('verticalAlign','top')
    }
    colorPicker();
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
// $('.slideBanner .choice input').on('ready change',function(){
//     $(this).parents('.ctrlList').find('.valueList').remove();
//     var slideNum = $(this).val();
//     if($(this).val() > 5){
//         alert('최대 슬라이드 개수는 5개 입니다.')
//         $(this).val(5);
//         slideNum = $(this).val();
//         makeSlide(slideNum);
//     }
//     else if ($(this).val() < 1){
//         alert('최소 1개 이상은 설정해야 합니다.')
//         $(this).val(1);
//         slideNum = $(this).val();
//         makeSlide(slideNum);
//     }
//     else { 
//         makeSlide(slideNum);
        
//     }
//     slideUsage();
    
    
// })

// 폰트 추가
// $('.fontFile').on('change',function(){
//     submitForm(this.form)
// })

// input color change
function colorPicker() {
    $('input[type=color]').on('change', function () {
    $(this).siblings('input').val($(this).val())
    })
    $('.fontcolor').on('change',function(){
        $(this).siblings('input').val($(this).val())
    })
}
colorPicker();

// 가이드
$('.guide').click(function(){
    
    window.open("mainGuide.html",'mainGuide',"width=400px", "height=150px", "left=50%", "top=0");
})