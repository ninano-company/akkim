
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
	<link rel="stylesheet" href="assets/css/index.css?ver=12">
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/newfakeLoader.js?Ver=2"></script>
	<script src="assets/js/my-app.js?ver=32"></script>
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
				<a href="javascript:setTimeout(()=>{window.location = 'intent://ninanobiz.com/akkim/ardev/babylon/index.html#Intent;scheme=https;package=com.android.chrome;end' },770);"
					class="entry clickSound">
					<div class="playAR">
						<img src="assets/images/icons/white/video.png" alt="AR사용하기버튼">
					</div>
					<h5>AR Park</h5>
					<p>가상현실(AR)로 다양한<br>친구들을 만나보아요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'guest/index.html' },770);"
					class="entry clickSound">
					<div class="openGallery">
						<img src="assets/images/icons/white/form.png" alt="방명록 사용하기 버튼">
					</div >
					<h5>Gallery</h5>
					<p>동물친구들과 함께<br>찍은 사진을 올려주세요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'map/index.html' },770);"
					class="entry clickSound">
					<div class="maps">
						<img src="assets/images/icons/white/slider.png" alt="지도 사용하기 버튼">
					</div>
					<h5>지도</h5>
					<p>구글맵을 이용하여<br>현재위치를 알려줘요</p>
				</a>
			</div>
			<div class="items">
				<a href="javascript:setTimeout(()=>{window.location = 'langList/index.html' },770);"
					class="entry clickSound">
					<div class="translation">
						<img src="assets/images/icons/white/translation.png" alt="번역 사용하기 버튼" style="filter: invert(100%);">
					</div>
					<h5>번역 안내판</h5>
					<p>다양한 언어로 안내판을<br>번역해드려요</p>
				</a>
			</div>
		</div>
	</div>
	</div>
	<!-- end offers -->
	<!-- <div class="cutton">
		<div class="introBox">
			<p class="welcomeMessage">AR세상에 오신 것을 환영합니다.</p>
			<p class="announce">[시작] 버튼을 누르시면 AR페이지를 실행합니다.</p>
			<span>※배경음악을 듣고 싶지 않으시다면<br>&nbsp;&nbsp;[BGM 없이 실행]을 눌러주세요.</span>
			</p>
			<div class="introBtnBox">
				<button class="NoBGM">BGM 없이 실행</button>
				<button class="removeCutton">시작</button>
			</div>
		</div>
	</div> -->
	<footer>
		<!-- footer -->
		<span><small>Copyright &copy; 2020 All rights reserved</small></span>
	</footer>
	
	<!-- end footer -->

</body>

</html>