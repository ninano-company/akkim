<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- start linking  -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
   <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/app.css?ver=1">
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
         <?= require_once('layout/aside.php') ?>
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
                  <h1>1번 안내판</h1>
               </div>
               <a href="#none" class="btn toList"><i class="fa fa-table"></i>목록으로</a>
            </div>
            <!-- end head bottom -->
         </div>
         <!-- end content head -->
         <!-- start with the real content -->
         <div id="real">
            <!-- start content here -->
            <div class="wrap">
               <section class="app-content">
                  <div class="row">
                     <div class="col-md-12 buttonList">
                        <ul class="navbutton">
                           <li class="annebutton">안내판 정보</li>
                           <li class="annebutton">슬라이드 정보</li>
                           <li class="annebutton">아이콘 정보</li>
                        </ul>
                        <ul class="editbutton">
                           <li><button class="btn removeform">삭제</button></li>
                           <li><button class="btn saveform">저장</button></li>
                        </ul>
                     </div><!-- END column -->

                     <div class="col-md-12 basicInfo">
                        <div class="widget p-lg">
                           <h4 class="m-b-lg">안내판 정보</h4>
                           <ul>
                              <li class="infoList infoName"><span class="listLabel">안내판 이름</span><input type="text" class="anneName"></li>
                              <li class="infoList"><span class="listLabel">위치</span><input type="text" class="infoPosition"></li>
                              <li class="infoList"><span class="listLabel">링크 주소</span><input type="text" class="infoURL"></li>
                              <li class="infoList infoLogo"><span class="listLabel">로고 수정정보</span>
                                 <div class="Logoinfo widget">
                                    <div class="logoframe">현재 적용중인 이미지<span></span></div>
                                    <span class="file"><input type="file" name="logoFile"></span>
                                    <span class="logoimgsize">가로 <input type="number" name="logoSizeWidth" class="inputsize logosize"> px &nbsp;&nbsp;
                                       세로 <input type="number" name="logoSizeHeight" class="inputsize logosize"> px
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </div><!-- .widget -->
                     </div><!-- END column -->

                     
                     <div class="col-md-12 slideInfo">
                        <div class="widget p-lg">
                           <h4 class="m-b-lg">슬라이드 정보</h4>
                              <div class="slideBanner">슬라이드 배너 갯수  <input type="number" name="slideNum" class="inputsize fontsize"
                                    min="1" max="5" value="<?=$row[3]?>"></div>
                        </div><!-- .widget -->
                     </div><!-- END column -->

                     <div class="col-md-12">
                        <div class="widget p-lg">
                           <h4 class="m-b-lg">아이콘 정보</h4>
                           <p class="m-b-lg docs">
                              Create responsive tables by wrapping any <code>.table</code> in
                              <code>.table-responsive</code> to make them scroll horizontally on small devices
                              (under 768px). When viewing on anything larger than 768px wide, you will not see
                              any difference in these tables.
                           </p>
                           <div class="table-responsive">
                              <table class="table">
                                 <tr>
                                    <th>#</th>
                                    <th>Tabel heading</th>
                                    <th>Tabel heading</th>
                                    <th>Tabel heading</th>
                                    <th>Tabel heading</th>
                                    <th>Tabel heading</th>
                                    <th>Tabel heading</th>
                                 </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                 </tr>
                              </table>
                           </div>
                        </div><!-- .widget -->
                     </div><!-- END column -->
                  </div><!-- .row -->
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
   <script src="js/highcharts.js"></script>
   <script src="js/chart.js"></script>
   <script src="js/app.js?Ver=3"></script>
   <script>
      $('.nav-link').removeClass('active')
      $('#menu3').addClass('show')
      $('#menu3 a:eq(0)').addClass('subactive')
      $('.collapsed').addClass('active')
   </script>

   <!-- end screpting -->
</body>

</html>