<?php

  session_start();
  if( !isset($_SESSION['akkAdmin']) ) {
    header('location: login.php');
  }
  
  require_once 'assets/process/connection.php';

  $today = date("Y-m-d");
  $date1 = date("Y-m-d", strtotime("-3 months") );
  $date2 = date("Y-m-d", strtotime("-6 months") );

  $countAll = 0;
  $count1 = 0;
  $count2 = 0;

  $sql = "
    SELECT COUNT(id) AS count
      FROM akkViews
  ";
  $result = mysqli_query( $conn, $sql );
  while( $row = mysqli_fetch_row($result) ) {
    $countAll = $row[0];
  }

  $sql = "
    SELECT COUNT(id) AS count
      FROM akkViews
      WHERE DATE(created) > '{$date1}'
  ";
  $result = mysqli_query( $conn, $sql );
  while( $row = mysqli_fetch_row($result) ) {
    $count1 = $row[0];
  }

  $sql = "
    SELECT COUNT(id) AS count
      FROM akkViews
      WHERE DATE(created) <= '{$date1}' AND DATE(created) > '{$date2}'
  ";
  $result = mysqli_query( $conn, $sql );
  while( $row = mysqli_fetch_row($result) ) {
    $count2 = $row[0];
  }

  $sql = "

  ";


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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- icon -->
  <link rel="icon" href="img/log.png">
  <!-- end linking -->
  <title>아낌없이주는나무 - 관리자페이지</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <?php include 'layout/aside.php'; ?>
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>Dashboard</h1>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <!-- start analytics -->
        <div class="col-lg-4">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-video"></i></div>
              <div class="text">
                <h1><?= $count1 ?></h1>
                <p>이번 분기 총 조회수</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fab fa-vimeo-v"></i></div>
              <div class="text">
                <h1><?= $count2 ?></h1>
                <p>지난 분기 총 조회수</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="text">
                <h1><?= $countAll ?></h1>
                <p>총 누적 조회수</p>
              </div>
            </div>
          </div>
        </div>
        <!-- start chatts -->
        <div class="col-lg-4">
          <div class="card">
            <div id="boardRegion" style="height: 320px;" ></div>
          </div>
        </div>
        <!-- end charts -->
        <!-- end analytics -->
        <div class="col-lg-8">
          <div id="money">
            <div class="card">
              <div id="chart" style="width:100%; height:270px;"></div>
            </div>
          </div>
        </div>
        <!-- end head content -->

      </div>
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
<script src="js/app.js"></script>
<script>
  var myChart = Highcharts.chart('chart', {
      chart: {
          type: 'bar'
      },
      title: {
          text: '상위 5개 안내판 조회수'
      },
      xAxis: {
          categories: ['대왕암1', '신불산1', '대왕암3','북구청', '태화강1']
      },
      yAxis: {
          title: {
              text: ''
          }
      },
      series: [{
          name: '조회수',
          data: [17,10,30,44,33]
      }]
  });

  Highcharts.chart('boardRegion', {
      chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
      },
      title: {
          text: '지역별 안내판 비율'
      },
      tooltip: {
          pointFormat: '{series.name}: <b>{point.y}</b>'
      },
      plotOptions: {
          pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                  enabled: true
              }
          }
      },
      series: [{
          name: '안내판 수',
          colorByPoint: true,
          data: [{
              name: '울산광역시',
              y: 10,
              sliced: true,
              selected: true
          }, {
              name: '경상남도',
              y: 5
          }, {
              name: '경상북도',
              y: 3
          }, {
              name: '충청도',
              y: 1
          }]
      }]
    });
</script>
<!-- end screpting -->
</body>
</html>
