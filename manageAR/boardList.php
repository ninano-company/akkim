<?php
   require_once('assets/process/connection.php');

   $body = '';

   $sql = "
      SELECT
         m.id, m.nickName, m.customer, m.contact, m.region,
         r.name
         FROM manageAR as m
         LEFT JOIN akkSelect as r ON r.cate = 'region' AND r.ord = m.region
         WHERE m.chk = 1 AND m.del IS NULL
   ";
   $result = mysqli_query( $conn, $sql );
   while ( $row = mysqli_fetch_row($result) ){
      $body .= '<tr>';
      $body .= '<td>'. $row[1] .'</td>';
      $body .= '<td>'. $row[2] .'</td>';
      $body .= '<td>'. $row[3] .'</td>';
      $body .= '<td>'. $row[5] .'</td>';
      $body .= '<td>https://ninanobiz.com/akkim/ardev/ar.php?ver='. $row[0] .'</td>';
      $body .= '<td><input type="button" name="revise" value="수정" onclick="location.href=\'Anne1.php?ver='. $row[0] .'\'">' . '&nbsp<input type="button" name="delete" value="삭제" onclick="delConfirm('. $row[0] .')"</td>';
      $body .= '</tr>';

   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- start linking  -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
   <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/app.css?ver=8">
   
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
         <?php include 'layout/aside.php' ?>
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
                  <h1>안내판 목록</h1>
               </div>
               <button type="button" class="btn-warning makenew"><i class="fa fa-file"></i>새 안내판</button>
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

                        <div class="col-md-12 basicInfo">
                           <div class="widget p-lg">
                           <table id="boardList" class="display" style="width:100%">
                              <thead>
                                    <tr>
                                       <th>별명</th>
                                       <th>납품처</th>
                                       <th>연락처</th>
                                       <th>위치</th>
                                       <th>링크</th>
                                       <th></th>
                                    </tr>
                              </thead>
                              <tbody>
                              <?= $body ?>
                              </tbody>
                           </table>
                           </div><!-- .widget -->
                        </div><!-- END column -->
                     </div><!-- .row -->
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
   <script src="js/app.js?Ver=9"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   <?php include "assets/process/getintoindex.php"; ?>
   <script>
      $('.nav-link').removeClass('active');
      $('.nav-link:eq(1)').addClass('active');

      $(document).ready(function() {
         $('#boardList').DataTable( {
            "paging" : false,
            "info" : false,
            "order" : [[ 0, "desc" ]]
         });
      } );

      function delConfirm( ver ) {
         if ( confirm( '정말로 삭제하시겠습니까?' ) ) {
            location.href = 'assets/process/boardDelete.php?ver='+ver;
         }
      }
   </script>

   <!-- end screpting -->
</body>

</html>