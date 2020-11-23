<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR관리자 페이지</title>
    <script src="../ardev/assets/js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="style.css?Ver=13">
</head>

<body>
    <header>
    <h1><a href="#">AR 관리자 페이지</a></h1>
    
    </header>
    <main>
        <section id="mainPage">
            <h2>메인 페이지 관리</h2>
            <span class="guide">메인 페이지 가이드</span>
            <!-- <div class="Utility">
                <form action="../putdata.php" method="POST">
                    <label for="fontFile">폰트 추가하기</label>
                    <div class="fontfile hidden"><input type="file" name="fontFile" id="fontFile"></div>
                </form>
            </div> -->
            <div class="ctrlmain">
                <form action="putdata.php" method="POST" enctype="multipart/form-data">
                    <div class="parts logo">
                        <div class="subject"><span>로고</span></div>
                        <div class="ctrlList">
                            <!-- <div class="choice"><input type="radio" name="whatLogo" checked id="lgImg"
                                    class="lgImg" value="0"><label for="lgImg">이미지</label>&nbsp;&nbsp; <input type="radio"
                                    name="whatLogo" id="lgText" class="lgText" value="1"><label for="lgText">텍스트</label></div> -->
                            <div class="valueList logoImg">
                                <span class="file"><input type="file" name="logoFile"><span class="logoframe"></span></span>
                                <span class="logoimgsize">가로 <input type="number" name="logoSizeWidth" class="logosize"> px &nbsp;&nbsp;
                                    세로 <input type="number" name="logoSizeHeight" class="logosize"> px
                                </span>
                            </div>
                            <!-- <div class="valueList logoWords">
                                <span>로고 텍스트  <input type="text" name="logoWords" class="content"></span>
                                <span>폰트  <select name="logoFonts">
                                        <option value="0" selected>폰트를 선택해주세요</option>
                                        <option value="1">나눔고딕</option>
                                        <option value="2">Baloo Thambi</option>
                                        <option value="3">FredokaOne</option>
                                        <option value="4">Tmoney</option>
                                    </select></span>
                                <span>폰트 사이즈  <input type="number" name="logoFontSize" class="fontsize">px</span>
                                <span>폰트 컬러  <input type="color"><input type="text" name="logofontcolor"
                                        class="fontcolor"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="parts slideBanner">
                        <div class="subject"><span>슬라이드 배너</span></div>
                        <div class="ctrlList">
                            <div class="choice">슬라이드 배너 갯수  <input type="number" name="slideNum" class="fontsize"
                                    min="0" max="5" value="<?=$row[3]?>"></div>
                        </div>
                    </div>
                    <div class="parts mainIcon">
                        <div class="subject"><span>메인 아이콘</span></div>
                        <div class="ctrlList">
                            <div class="valueList Icon1">
                                <span class="icon">메인 아이콘1</span>
                                <div class="file"><input type="file" name="iconFile1"><span class="iconframe"></span></div>
                                <div class="iconSubject">
                                    <span><span class="label">아이콘1 이름</span><input type="text" name="Icon1Subject" class="content"></span>
                                    <span><span class="label">폰트</span>
                                        <select name="Icon1Fonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈<</span>  <input type="number" name="Icon1FontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="Icon1fontcolor"
                                            class="fontcolor"></span>
                                </div>
                                <div class="iconParagh">
                                    <span><span class="label">아이콘 내용 </span> <textarea name="icon1Paragh" cols="20" rows="2"
                                            class="sentence"></textarea></span>
                                    <span><span class="label">폰트</span>
                                        <select name="Icon1PFonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span> <input type="number" name="Icon1PFontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span> <input type="color"><input type="text" name="Icon1Pfontcolor"
                                            class="fontcolor"></span>
                                </div>
                            </div>
                            <div class="valueList Icon2">
                                <span class="icon">메인 아이콘2</span>
                                <div class="file"><input type="file" name="iconFile2"><span class="iconframe"></span></div>
                                <div class="iconSubject">
                                    <span><span class="label">아이콘2 이름 </span><input type="text" name="Icon2Subject" class="content"></span>
                                    <span><span class="label">폰트 </span>
                                        <select name="Icon2Fonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span> <input type="number" name="Icon2FontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="Icon2fontcolor"
                                            class="fontcolor"></span>
                                </div>
                                <div class="iconParagh">
                                    <span><span class="label">아이콘 내용</span><textarea name="icon2Paragh" cols="20" rows="2"
                                            class="sentence"></textarea></span>
                                    <span><span class="label">폰트</span> 
                                        <select name="Icon2PFonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈 </span> <input type="number" name="Icon2PFontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러 </span> <input type="color"><input type="text" name="Icon2Pfontcolor"
                                            class="fontcolor"></span>
                                </div>
                            </div>
                            <div class="valueList Icon3">
                                <span class="icon">메인 아이콘3</span>
                                <div class="file"><input type="file" name="iconFile3"><span class="iconframe"></span></div>
                                <div class="iconSubject">
                                    <span><span class="label">아이콘3 이름</span><input type="text" name="Icon3Subject" class="content"></span>
                                    <span><span class="label">폰트</span>
                                        <select name="Icon3Fonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span> <input type="number" name="Icon3FontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="Icon3fontcolor"
                                            class="fontcolor"></span>
                                </div>
                                <div class="iconParagh">
                                    <span><span class="label">아이콘 내용</span><textarea name="icon3Paragh" cols="20" rows="2"
                                            class="sentence"></textarea></span>
                                    <span><span class="label">폰트 </span>
                                        <select name="Icon3PFonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span>  <input type="number" name="Icon3PFontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="Icon3Pfontcolor"
                                            class="fontcolor"></span>
                                </div>
                            </div>
                            <div class="valueList Icon4">
                                <span class="icon">메인 아이콘4</span>
                                <div class="file"><input type="file" name="iconFile4"><span class="iconframe"></span></div>
                                <div class="iconSubject">
                                    <span><span class="label">아이콘4 이름</span>  <input type="text" name="Icon4Subject" class="content"
                                            class="content"></span>
                                    <span><span class="label">폰트</span>
                                        <select name="Icon4Fonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span>  <input type="number" name="Icon4FontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러<</span>  <input type="color"><input type="text" name="Icon4fontcolor"
                                            class="fontcolor"></span>
                                </div>
                                <div class="iconParagh">
                                    <span><span class="label">아이콘 내용</span>  <textarea name="icon4Paragh" cols="20" rows="2"
                                            class="sentence"></textarea></span>
                                    <span><span class="label">폰트 </span>
                                        <select name="Icon4PFonts">
                                            <option value="0" selected>폰트를 선택해주세요</option>
                                            <option value="1">나눔고딕</option>
                                            <option value="2">Baloo Thambi</option>
                                            <option value="3">FredokaOne</option>
                                            <option value="4">Tmoney</option>
                                        </select>
                                    </span>
                                    <span><span class="label">폰트 사이즈</span>  <input type="number" name="Icon4PFontSize" class="fontsize">px</span>
                                    <span><span class="label">폰트 컬러</span>  <input type="color"><input type="text" name="Icon4Pfontcolor"
                                            class="fontcolor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sbb">
                        <button type="button" class="btn dosubmit" onclick="submitForm( this.form )">적용하기</button>
                        <button type="button" class="btn clear">전체 비우기</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="script.js?ver=12"></script>
    <?php include "getintoindex.php"; ?>
</body>

</html>