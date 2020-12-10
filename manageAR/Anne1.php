<?php
   session_start();
   if( !isset($_SESSION['akkAdmin']) ) {
      header('location: login.php');
   }

   require_once 'assets/process/connection.php';
   $id = $_GET['ver'];

   $body = '';
   $sql = "
      SELECT
         a.name , a.ord
         FROM akkSelect as a WHERE a.id > 3
   ";
   $result = mysqli_query( $conn, $sql );
   while ( $row2 = mysqli_fetch_row($result) ){
      $body .= '<option value="'. $row2[1] .'" >'. $row2[0] .'</option>';
   }

   $sql = "
      SELECT
         a.contents
         FROM manageAR AS a
         WHERE id = {$id}
   ";
   $result = mysqli_query( $conn, $sql );
   $script = '';
   while ( $row = mysqli_fetch_row($result) ) {
      $script .= "cont = '{$row[0]}';";
   }

   $sql = "
      SELECT
         a.id, a.name, a.mode
         FROM akkARs AS a
   ";

   $mode1 = '';
   $mode2 = '';

   $result = mysqli_query( $conn, $sql );
   while ( $row = mysqli_fetch_row($result) ) {
      if ( $row[2] == 1 ) {
         $mode1 .= '<label><input type="checkbox" name="contents[]" value="'. $row[0] .'">&nbsp'. $row[1] .'</label>';
      } else {
         $mode2 .= '<label><input type="checkbox" name="contents[]" value="'. $row[0] .'">&nbsp'. $row[1] .'</label>';
      }
   }

?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- start linking  -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
   <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/app.css?ver=9">
   <!-- icon -->
   <link rel="icon" href="img/log.png">
   <!-- end linking -->
   <title>아낌없이주는나무 - 관리자페이지</title>
</head>

<body>
   <!-- start admin -->
   <section id="admin">
      <!-- start sidebar -->
      <div class="sidebar">
         <!-- start with head -->
         <!-- end with head -->
         <!-- start the list -->
         <?php include 'layout/aside.php'; ?>
         <!-- end the list -->
      </div>
      <!-- end sidebar -->
      <!-- start content -->
      <div class="content">
         <!-- start content head -->
         <div class="head">
            <!-- head top -->
            <!-- end head top -->
            <!-- start head bottom -->
            <div class="bottom">
               <div class="left">
                  <h1>안내판 상세정보</h1>
               </div>
               <a href="boardList.php" class="btn toList"><i class="fa fa-table"></i>목록으로</a>
            </div>
            <!-- end head bottom -->
         </div>
         <!-- end content head -->
         <!-- start with the real content -->
         <div id="real">
            <!-- start content here -->
            <div class="wrap">
               <section class="app-content">
                  <form action="assets/process/putdata.php" method="POST" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-12 buttonList">
                           <ul class="navbutton">
                              <li class="annebutton gobasic">기본 정보</li>
                              <li class="annebutton goAR">AR리스트 정보</li>
                              <li class="annebutton gologo">로고 정보</li>
                              <li class="annebutton goslide">슬라이드 정보</li>
                              <li class="annebutton goicon">아이콘 정보</li>
                           </ul>
                           <ul class="editbutton">
                              <li><button type="button" class="btn removeform">삭제</button></li>
                              <li><button type="button" class="btn saveform" >저장</button></li>
                           </ul>
                        </div><!-- END column -->

                        <div class="col-md-12 basicInfo">
                           <div class="widget p-lg">
                              <h4 class="m-b-lg">기본 정보</h4>
                              <ul>
                                 <li class="infoList infoName"><span class="listLabel">안내판 이름</span><input type="text"
                                       name="anneName" class="anneName" placeholder="안내판 이름을 적어주세요."></li>
                                 <li class="infoList"><span class="listLabel">위치</span><select name="region" class="region">
                                    <option value="0" selected>지역선택</option>
                                    <?=$body?></select>
                                       <input type="text" name="infoPosition" class="infoPosition"></li>
                                 <li class="infoList"><span class="listLabel">링크 주소</span><input type="text"
                                       name="infoURL" class="infoURL"></li>
                                 <li class="infoList"><span class="listLabel">납품처</span><input type="text"
                                       name="infocustomer" class="infocustomer"></li>
                                 <li class="infoList"><span class="listLabel">담당연락처</span><input type="text"
                                       name="infomanager" class="infomanager"></li>
                                 <!-- <li class="infoList"><span class="listLabel">담당자연락처</span><input type="text"
                                       name="infophone" class="infophone"></li>
                                 <li class="infoList"><span class="listLabel">담당자이메일</span><input type="text"
                                       name="infoemail" class="infoemail"></li> -->
                                 <li class="infoList"><span class="listLabel">설치된날짜</span><input type="text"
                                       name="infomake" class="infomake"></li>
                                 <li class="infoList"><span class="listLabel">비고</span><textarea type="text"
                                       name="infoextra" class="infoextra" rows="5"></textarea></li>
                              </ul>
                           </div><!-- .widget -->
                        </div><!-- END column -->

                        <div class="col-md-12 arListInfo">
                           <div class="widget p-lg">
                              <h4 class="m-b-lg">AR 선택</h4>
                              <div class="arPickgrid">
                                 <div class="animalpick pickGriditem">
                                    <h5>동물원버전</h5>
                                    <div class="chkboxgrid">
                                       <?= $mode1 ?>
                                    </div>
                                 </div>
                                 <div class="seanimalpick pickGriditem">
                                    <h5>리스트버전</h5>
                                    <div class="chkboxgrid">
                                       <?= $mode2 ?>
                                    </div>
                                 </div>
                              </div>
                           </div><!-- .widget -->
                        </div><!-- END column -->

                        <div class="col-md-12 logoinfo">
                           <div class="widget p-lg">
                              <h4 class="m-b-lg">로고 정보</h4>
                              <div class="logoframe">현재 적용중인 이미지<span></span></div>
                              <div class="file"><input type="file" name="logoFile" class="inputfile"><br><span
                                    class="fileImage thumbnail"></span></div>
                              <span class="logoimgsize">가로 <input type="number" name="logoSizeWidth"
                                    class="inputsize logosize"> px &nbsp;&nbsp;
                                 세로 <input type="number" name="logoSizeHeight" class="inputsize logosize"> px
                              </span>

                           </div><!-- .widget -->
                        </div><!-- END column -->

                        <div class="col-md-12 slideInfo">
                           <div class="widget p-lg">
                              <h4 class="m-b-lg">슬라이드 정보</h4>
                              <div class="slideInfogrid">
                                 <div class="slideheader gridtem"><input type="hidden" name="slideNum" class="inputsize"
                                       min="1" max="5" value="<?=$row[3]?>">
                                    <div class="slidebuttonbox">
                                       <button type="button" class="btn-warning plusnum">┾</button>
                                       <button type="button" class="btn-warning minusnum">─</button>
                                    </div>
                                 </div>
                                 <div class="slideCol gridtem">
                                    <span class="gridNull"></span>
                                    <span class="gridImg">이미지 파일</span>
                                    <span>배너/버튼 사용</span>
                                    <span>문구</span>
                                    <span>폰트</span>
                                    <span>폰트사이즈(px)</span>
                                    <span>폰트컬러</span>
                                    <span>버튼컬러</span>
                                 </div>
                              </div>
                              <div class="slideBottom"></div>
                           </div><!-- .widget -->
                        </div><!-- END column -->

                        <div class="col-md-12 iconInfo">
                           <div class="widget p-lg">
                              <h4 class="m-b-lg">아이콘 정보</h4>
                              <div class="iconInfogrid">
                                 <div class="iconheader"></div>
                                 <div class="iconCol gridtem">
                                    <span class="gridNull"></span>
                                    <span class="gridImg">이미지 파일</span>
                                    <span>이름/내용</span>
                                    <span>문구</span>
                                    <span>폰트</span>
                                    <span>폰트사이즈(px)</span>
                                    <span>폰트컬러</span>
                                 </div>
                                 <div class="valueList gridtem">
                                    <div class="icon Icon1">메인 아이콘1<br><span class="iconframe"></span></div>
                                    <div class="file"><input type="file" name="iconFile1" class="inputfile"><br><span
                                          class="iconnew thumbnail"></span></div>
                                    <div class="griddivision">
                                       <div class="iconSubject">
                                          <span class="inputgrid">이름</span>
                                          <span><input type="text" name="Icon1Subject"
                                                class="inputborder inputgrid"></span>
                                          <span>
                                             <select name="Icon1Fonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon1FontSize"
                                                class="fontsize inputgrid inputborder"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon1fontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                       <div class="iconParagh">
                                          <span class="inputgrid">내용</span>
                                          <span><textarea name="icon1Paragh"
                                                class="sentence inputgrid"></textarea></span>
                                          <span>
                                             <select name="Icon1PFonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon1PFontSize"
                                                class="fontsize inputborder inputgrid"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon1Pfontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="valueList gridtem">
                                    <div class="icon Icon2">메인 아이콘2<br><span class="iconframe"></span></div>
                                    <div class="file"><input type="file" name="iconFile2" class="inputfile"><br><span
                                          class="iconnew thumbnail"></span></div>
                                    <div class="griddivision">
                                       <div class="iconSubject">
                                          <span class="inputgrid">이름</span>
                                          <span><input type="text" name="Icon2Subject"
                                                class="inputborder inputgrid"></span>
                                          <span>
                                             <select name="Icon2Fonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon2FontSize"
                                                class="fontsize inputgrid inputborder"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon2fontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                       <div class="iconParagh">
                                          <span class="inputgrid">내용</span>
                                          <span><textarea name="icon2Paragh"
                                                class="sentence inputgrid"></textarea></span>
                                          <span>
                                             <select name="Icon2PFonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon2PFontSize"
                                                class="fontsize inputborder inputgrid"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon2Pfontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="valueList gridtem">
                                    <div class="icon Icon3">메인 아이콘3<br><span class="iconframe"></span></div>
                                    <div class="file"><input type="file" name="iconFile3" class="inputfile"><br><span
                                          class="iconnew thumbnail"></span></div>
                                    <div class="griddivision">
                                       <div class="iconSubject">
                                          <span class="inputgrid">이름</span>
                                          <span><input type="text" name="Icon3Subject"
                                                class="inputborder inputgrid"></span>
                                          <span>
                                             <select name="Icon3Fonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon3FontSize"
                                                class="fontsize inputgrid inputborder"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon3fontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                       <div class="iconParagh">
                                          <span class="inputgrid">내용</span>
                                          <span><textarea name="icon3Paragh"
                                                class="sentence inputgrid"></textarea></span>
                                          <span>
                                             <select name="Icon3PFonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon3PFontSize"
                                                class="fontsize inputborder inputgrid"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon3Pfontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="valueList gridtem">
                                    <div class="icon Icon4">메인 아이콘4<br><span class="iconframe"></span></div>
                                    <div class="file"><input type="file" name="iconFile4" class="inputfile"><br><span
                                          class="iconnew thumbnail"></span></div>
                                    <div class="griddivision">
                                       <div class="iconSubject">
                                          <span class="inputgrid">이름</span>
                                          <span><input type="text" name="Icon4Subject"
                                                class="inputborder inputgrid"></span>
                                          <span>
                                             <select name="Icon4Fonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon4FontSize"
                                                class="fontsize inputgrid inputborder"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon4fontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                       <div class="iconParagh">
                                          <span class="inputgrid">내용</span>
                                          <span><textarea name="icon4Paragh"
                                                class="sentence inputgrid"></textarea></span>
                                          <span>
                                             <select name="Icon4PFonts" class="inputgrid">
                                                <option value="0" selected>폰트를 선택해주세요</option>
                                                <option value="1">나눔고딕</option>
                                                <option value="2">Baloo Thambi</option>
                                                <option value="3">FredokaOne</option>
                                                <option value="4">Tmoney</option>
                                             </select>
                                          </span>
                                          <span><input type="number" name="Icon4PFontSize"
                                                class="fontsize inputborder inputgrid"></span>
                                          <span class="gridinputcolor"><input type="color" class="inputcolor"><input
                                                type="text" name="Icon4Pfontcolor" class="fontcolor inputborder"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="iconBottom"></div>
                           </div><!-- .widget -->
                        </div><!-- END column -->
                        <div class="gotop">
                           <a href="#">TOP</a>
                        </div>
                     </div><!-- .row -->
                     <input type="hidden" name="ver" value="<?=$id?>">
                  </form>
               </section><!-- #dash-content -->
            </div><!-- .wrap -->
            <!-- end content -->
         </div>
         <!-- end the real content -->
      </div>
      <!-- end content -->
   </section>
   <!-- end admin -->
   <!-- start screpting -->
   <script src="js/jquery.min.js"></script>
   <script src="js/tether.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- <script src="js/highcharts.js"></script> -->
   <!-- <script src="js/chart.js"></script> -->
   <script src="js/app.js?Ver=12"></script>
   <?php include "assets/process/getintoindex.php"; ?>
   <script>
      $('.nav-link').removeClass('active');
      $('.nav-link:eq(1)').addClass('active');
      <?= $script ?>
      contents = document.getElementsByName("contents[]");
      if ( cont == '' ) {
      } else {
         cont = cont.split(',');
         for ( j = 0; j < cont.length; j++ ) {
            for ( i = 0; i < contents.length; i++ ) {
               if ( contents[i].value == cont[j] ) {
                  contents[i].checked = true;
               }
            }
         }
      }
      console.log(cont);
   </script>

   <!-- end screpting -->
</body>

</html>