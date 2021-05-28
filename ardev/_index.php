<?php

    $conn=mysqli_connect('ninanobiz.com','copaki','whosKGB3@33','copaki');
    $sql = "
    SELECT
      *
	  FROM manageAR
	  WHERE id = 1
    ";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_array($result) ) {

		if ( $row[7] == NULL ) {$row[7] = 0;} 		if ( $row[11] == NULL ) {$row[11] = 0;}
		if ( $row[15] == NULL ) {$row[15] = 0;}		if ( $row[16] == NULL ) {$row[16] = 0;}
		if ( $row[18] == NULL ) {$row[18] = 0;} 	if ( $row[22] == NULL ) {$row[22] = 0;}
		if ( $row[26] == NULL ) {$row[26] = 0;}		if ( $row[27] == NULL ) {$row[27] = 0;}
		if ( $row[29] == NULL ) {$row[29] = 0;}		if ( $row[33] == NULL ) {$row[33] = 0;}
		if ( $row[37] == NULL ) {$row[37] = 0;}		if ( $row[38] == NULL ) {$row[38] = 0;}
		if ( $row[40] == NULL ) {$row[40] = 0;}		if ( $row[44] == NULL ) {$row[44] = 0;}
		if ( $row[48] == NULL ) {$row[48] = 0;}		if ( $row[49] == NULL ) {$row[49] = 0;}
		if ( $row[51] == NULL ) {$row[51] = 0;}		if ( $row[55] == NULL ) {$row[55] = 0;}
		
		$Theme = "
	 		var fontArray = new Array();
			 fontArray = ['0', 'gothic', 'Baloo Thambi', 'FredokaOne' , 'Tmoney']
			 $('.site-title h1').width(".$row[1].");
			 $('.site-title h1').height(".$row[2].");
			 if('".$row[91]."' !== ''){
				 $('.site-title h1').html('');
				 $('.site-title h1').css('backgroundImage','url(".$row[91].")');
				} else{
					$('.site-title h1').css('backgroundImage','none')
					$('.site-title h1').css('lineHeight','".$row[2]."px')
				}
			$('.site-title h1').css('position','absolute').css('top','calc(50% - ".$row[2]."/2'+'px)');
	 		
			itemList = ".$row[3].";
			let z =0 ; 
			function slider() {
			  $('.slide_mother').animate({
				marginLeft: '-100%'
			  }, 500,function(){
				$('.slide_mother').append($('.slide_mother li:first')).css({marginLeft:0})
			  });
			  z++;
			  if( z == itemList){
				z= 0;
			  }
			  $('.dot').removeClass('deploy')
			  $('.dot:eq('+ z +')').addClass('deploy')
			  
			}
			function slideInterval(){
		
				let timer = setInterval(function(){
					slider();
				},3000)
				$('.slide_item').click(function () {
					slider();
					console.log('touch')
					clearInterval(timer)
					timer = setInterval(function(){
						slider();
					},3000)
				})
			}
			if(itemList !== 1 ){
				slideInterval();
			}
			$('.slide_mother').css('width',".$row[3]."*100+'%').css('height','100%');
			$('.slide_mother li').remove('.slide_item');
			
			for(var i=0; i< itemList; i++){
				$('.slide_mother').append(
					`<li class='slide_item`+i+`'>
						<div class='slider-entry'>
							<img src='assets/images/slideBanner/slide`+Number(i+1)+`/slider`+Number(i+1)+`.png' alt='/'>
							<div class='overlay'></div>
							<div class='caption'>
								<div class='container'>
									<h2><span style='color:#fb6969;'>AR</span>로 동물 친구들을<Br>만나보세요!</h2>
									<a class='button clickSound' href='javascript:setTimeout(()=>{window.location = 'babylon/index.html' },770);'>함께 떠나요!!</a>
								</div>
							</div>
						</div>
					</li>`
				)
				$('.slide_item'+i).css('width',100/itemList+'%').css('float','left');
				$('.dotBox').append('<div class=dot></div>').css('left','calc(50% - 5px - '+ 10*i +'px)');
				$('.dot:eq(0)').addClass('deploy');
				
			}
			$('.slide_item0 img').attr('src','".$row[92]."');
			$('.slide_item1 img').attr('src','".$row[93]."');
			$('.slide_item2 img').attr('src','".$row[94]."');
			$('.slide_item3 img').attr('src','".$row[95]."');
			$('.slide_item4 img').attr('src','".$row[96]."');
			
			
			if(".$row[4]." == 2 && ".$row[5]." == 2){
				$('.slide_item0 .overlay').remove();
				$('.slide_item0 h2').remove();
				$('.slide_item0 .button').remove();
			}
			else if(".$row[4]." == 1 && ".$row[5]." == 2 ){
				$('.slide_item0 .button').remove();
				$('.slide_item0 h2').html('".$row[6]."').css('fontFamily',fontArray[".$row[7]."]).css('fontSize',".$row[8]."+'px').css('color','".$row[9]."');
			}
			else if(".$row[4]." == 2 && ".$row[5]." == 1 ){
				$('.slide_item0 h2').remove();
				$('.slide_item0 .button').html('".$row[10]."').css('fontFamily',fontArray[".$row[11]."]).css('fontSize',".$row[12]."+'px').css('color','".$row[13]."').css('backgroundColor','".$row[14]."');
			}
			else if(".$row[4]." == 1 && ".$row[5]." == 1){
				$('.slide_item0 h2').html('".$row[6]."').css('fontFamily',fontArray[".$row[7]."]).css('fontSize',".$row[8]."+'px').css('color','".$row[9]."')
				$('.slide_item0 .button').html('".$row[10]."').css('fontFamily',fontArray[".$row[11]."]).css('fontSize',".$row[12]."+'px').css('color','".$row[13]."').css('backgroundColor','".$row[14]."');
			}


			if(".$row[15]." == 2 && ".$row[16]." == 2){
				$('.slide_item1 .overlay').remove();
				$('.slide_item1 h2').remove();
				$('.slide_item1 .button').remove();
			}
			else if(".$row[15]." == 1 && ".$row[16]." == 2 ){
				$('.slide_item1 .button').remove();
				$('.slide_item1 h2').html('".$row[17]."').css('fontFamily',fontArray[".$row[18]."]).css('fontSize',".$row[19]."+'px').css('color','".$row[20]."');
			}
			else if(".$row[15]." == 2 && ".$row[16]." == 1 ){
				$('.slide_item1 h2').remove();
				$('.slide_item1 .button').html('".$row[21]."').css('fontFamily',fontArray[".$row[22]."]).css('fontSize',".$row[23]."+'px').css('color','".$row[24]."').css('backgroundColor','".$row[25]."');
			}
			else if(".$row[15]." == 1 && ".$row[16]." == 1){
				$('.slide_item1 h2').html('".$row[17]."').css('fontFamily',fontArray[".$row[18]."]).css('fontSize',".$row[19]."+'px').css('color','".$row[20]."');
				$('.slide_item1 .button').html('".$row[21]."').css('fontFamily',fontArray[".$row[22]."]).css('fontSize',".$row[23]."+'px').css('color','".$row[24]."').css('backgroundColor','".$row[25]."');
			}
			

			if(".$row[26]." == 2 && ".$row[27]." == 2){
				$('.slide_item2 .overlay').remove();
				$('.slide_item2 h2').remove();
				$('.slide_item2 .button').remove();
			}
			else if(".$row[26]." == 1 && ".$row[27]." == 2 ){
				$('.slide_item2 .button').remove();
				$('.slide_item2 h2').html('".$row[28]."').css('fontFamily',fontArray[".$row[29]."]).css('fontSize',".$row[30]."+'px').css('color','".$row[31]."');
			}
			else if(".$row[26]." == 2 && ".$row[27]." == 1 ){
				$('.slide_item2 h2').remove();
				$('.slide_item2 .button').html('".$row[32]."').css('fontFamily',fontArray[".$row[33]."]).css('fontSize',".$row[34]."+'px').css('color','".$row[35]."').css('backgroundColor','".$row[36]."');
			}
			else if(".$row[26]." == 1 && ".$row[27]." == 1){
				$('.slide_item2 h2').html('".$row[28]."').css('fontFamily',fontArray[".$row[29]."]).css('fontSize',".$row[30]."+'px').css('color','".$row[31]."');
				$('.slide_item2 .button').html('".$row[32]."').css('fontFamily',fontArray[".$row[33]."]).css('fontSize',".$row[34]."+'px').css('color','".$row[35]."').css('backgroundColor','".$row[36]."');
			}


			if(".$row[37]." == 2 && ".$row[38]." == 2){
				$('.slide_item4 .overlay').remove();
				$('.slide_item4 h2').remove();
				$('.slide_item4 .button').remove();
			}
			else if(".$row[37]." == 1 && ".$row[38]." == 2 ){
				$('.slide_item4 .button').remove();
				$('.slide_item4 h2').html('".$row[39]."').css('fontFamily',fontArray[".$row[40]."]).css('fontSize',".$row[41]."+'px').css('color','".$row[42]."');
			}
			else if(".$row[37]." == 2 && ".$row[38]." == 1 ){
				$('.slide_item4 h2').remove();
				$('.slide_item4 .button').html('".$row[43]."').css('fontFamily',fontArray[".$row[44]."]).css('fontSize',".$row[45]."+'px').css('color','".$row[46]."').css('backgroundColor','".$row[47]."');
			}
			else if(".$row[37]." == 1 && ".$row[38]." == 1){
				$('.slide_item4 h2').html('".$row[39]."').css('fontFamily',fontArray[".$row[40]."]).css('fontSize',".$row[41]."+'px').css('color','".$row[42]."');
				$('.slide_item4 .button').html('".$row[43]."').css('fontFamily',fontArray[".$row[44]."]).css('fontSize',".$row[45]."+'px').css('color','".$row[46]."').css('backgroundColor','".$row[47]."');
			}


			if(".$row[48]." == 2 && ".$row[49]." == 2){
				$('.slide_item4 .overlay').remove();
				$('.slide_item4 h2').remove();
				$('.slide_item4 .button').remove();
			}
			else if(".$row[48]." == 1 && ".$row[49]." == 2 ){
				$('.slide_item4 .button').remove();
				$('.slide_item4 h2').html('".$row[50]."').css('fontFamily',fontArray[".$row[51]."]).css('fontSize',".$row[52]."+'px').css('color','".$row[53]."');

			}
			else if(".$row[48]." == 2 && ".$row[49]." == 1 ){
				$('.slide_item4 h2').remove();
				$('.slide_item4 .button').html('".$row[54]."').css('fontFamily',fontArray[".$row[55]."]).css('fontSize',".$row[56]."+'px').css('color','".$row[57]."').css('backgroundColor','".$row[58]."');

			}
			else if(".$row[48]." == 1 && ".$row[49]." == 1){
				$('.slide_item4 h2').html('".$row[50]."').css('fontFamily',fontArray[".$row[51]."]).css('fontSize',".$row[52]."+'px').css('color','".$row[53]."');
				$('.slide_item4 .button').html('".$row[54]."').css('fontFamily',fontArray[".$row[55]."]).css('fontSize',".$row[56]."+'px').css('color','".$row[57]."').css('backgroundColor','".$row[58]."');
			}

			
			";

			
			
			for($i=0; $i<4; $i++){
				$Theme .= "
				$('.offers .items:eq({$i})').find('h5').html('".$row[$i*8+59]."').css('fontFamily',fontArray[".$row[$i*8+60]."]).css('fontSize',".$row[$i*8+61].").css('color','".$row[$i*8+62]."');
				$('.offers .items:eq($i)').find('p').html('".$row[$i*8+63]."').css('fontFamily',fontArray[".$row[$i*8+64]."]).css('fontSize',".$row[$i*8+65].").css('color','".$row[$i*8+66]."');
				";
			};
			
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AR Park</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="True">
	<link rel="stylesheet" href="assets/css/main.css?Ver=11">
	<link rel="stylesheet" href="assets/css/newfakeLoader.css">
	<link rel="stylesheet" href="assets/css/index2.css?ver=3">
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/newfakeLoader.js?Ver=2"></script>
	<script src="assets/js/my-app2.js?ver=1"></script>
</head>
<body>
	<!-- fakeloader -->
	<div class="fakeLoader">
		<div class="ball1"></div>
		<div class="ball2"></div>
	</div>
	<!-- sound -->
	<div class="btnsound">
		<audio src="assets/sounds/effects/cleanSound.wav" class="btn1sound"></audio>
		<audio src="assets/sounds/effects/ryangSound.wav" class="btn2sound"></audio>
		<audio src="assets/sounds/effects/tiktokSound.wav" class="btn3sound"></audio>
	</div>
	<div class="bgm_box">
		<span class="bgm_icon"></span>
		<audio loop autobuffer class="BGM">
			<source src="assets/sounds/background/indexBGM2.mp3" type="audio/mpeg">
		</audio>
	</div>
	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			<div class="site-title">
				<a href="index.html">
					<h1>AR Park</h1>
				</a>
			</div>
		</div>
	</div>
	<!-- end navbar -->
	<!-- slider -->
	<div class="slider-slick app-pages">
		<ul class="slide_mother">
			<li class="slide_item">
				<div class="slider-entry">
					<img src="assets/images/slideBanner/slide1/slider1.png" alt="어린 아이가 폰 카메라를 켜서 그림을 비추는 모습">
					<div class="overlay"></div>
					<div class="caption">
						<div class="container">
							<h2><span style="color:#fb6969;">AR</span>로 동물 친구들을<Br>만나보세요!</h2>
							<!-- <p>Lorem ipsum dolor sit amet</p> -->
							<a class="button clickSound" href="javascript:setTimeout(()=>{window.location = 'babylon/index.html' },770);">함께 떠나요!!</a>
						</div>
					</div>
				</div>
			</li>
			<li class="slide_item">
				<div class="slider-entry">
					<img src="assets/images/slideBanner/slide2/slider2.png" alt="두개의 다른 사진이 합쳐진 사진, 하나는 범고래AR, 하나는 호랑이AR을 찍은 사진이다.  ">
					<div class="overlay"></div>
					<div class="caption">
						<div class="container">
							<h2><span style="color:#fb6969;">AR</span>로 동물 친구들을<Br>만나보세요!</h2>
							<a class="button clickSound" href="javascript:setTimeout(()=>{window.location = 'babylon/index.html' },770);">함께 떠나요!!</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="dotBox">
		</div>
	</div>
	<!-- end slider -->

	<!-- offers -->
	<div class="offers">
		<div class="container">
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'intent://zoo.arpark.info/ardev/babylon/index.html#Intent;scheme=https;package=com.android.chrome;end' },770);"
					class="entry clickSound">
					<div class="playAR"></div>
					<h5>AR Park</h5>
					<p>가상현실(AR)로 다양한<br>친구들을 만나보아요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'guest/index.html' },770);"
					class="entry clickSound">
					<div class="openGallery"></div >
					<h5>Gallery</h5>
					<p>동물친구들과 함께<br>찍은 사진을 올려주세요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'map/index.html' },770);"
					class="entry clickSound">
					<div class="maps"></div>
					<h5>지도</h5>
					<p>구글맵을 이용하여<br>현재위치를 알려줘요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'langList/index.html' },770);"
					class="entry clickSound">
					<div class="translation"></div>
					<h5>번역 안내판</h5>
					<p>다양한 언어로 안내판을<br>번역해드려요</p>
				</a>
			</div>
		</div>
	</div>
	</div>
	<footer>
		<!-- footer -->
		<span><small>Copyright &copy; 2020 All rights reserved</small></span>
	</footer>
	
	<!-- end footer -->
<script>
<?=$Theme?>;
</script>
</body>

</html>
