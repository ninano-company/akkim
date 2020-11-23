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
          <h1>안내판 목록</h1>
        </div>
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
      			<div class="col-md-12">
      				<h4 class="m-b-lg">Tables</h4>
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Basic example</h4>
      					<p class="m-b-lg docs">
      						For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.
      					</p>

      					<table class="table">
      						<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
      						<tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr>
      						<tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr>
      						<tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>
      					</table>
      				</div><!-- .widget -->
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Striped rows</h4>
      					<p class="m-b-lg docs">
      						Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.
      					</p>

      					<table class="table table-striped">
      						<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
      						<tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr>
      						<tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr>
      						<tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>
      					</table>
      				</div><!-- .widget -->
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Bordered table</h4>
      					<p class="m-b-lg docs">
      						Add <code>.table-bordered</code> for borders on all sides of the table and cells.
      					</p>

      					<table class="table table-bordered">
      						<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
      						<tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr>
      						<tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr>
      						<tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>
      					</table>
      				</div><!-- .widget -->
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Hover rows</h4>
      					<p class="m-b-lg docs">
      						Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
      					</p>

      					<table class="table table-hover">
      						<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
      						<tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr>
      						<tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr>
      						<tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>
      					</table>
      				</div><!-- .widget -->
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Contextual classes</h4>
      					<p class="m-b-lg docs">
      						Use contextual classes (e.g <code>.success</code>) to color table rows or individual cells.
      					</p>

      					<table class="table">
      						<tr>
      							<th>#</th>
      							<th>Column heading</th>
      							<th>Column heading</th>
      							<th>Column heading</th>
      						</tr>
      						<tr class="active">
      							<td>1</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr>
      							<td>2</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr class="info text-color">
      							<td>3</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr>
      							<td>4</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr class="success text-color">
      							<td>5</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr>
      							<td>6</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr class="warning text-color">
      							<td>7</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr>
      							<td>8</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      						<tr class="danger text-color">
      							<td>9</td>
      							<td>Column content</td>
      							<td>Column content</td>
      							<td>Column content</td>
      						</tr>
      					</table>
      				</div><!-- .widget -->
      			</div><!-- END column -->

      			<div class="col-md-12">
      				<div class="widget p-lg">
      					<h4 class="m-b-lg">Responsive tables</h4>
      					<p class="m-b-lg docs">
      						Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.
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
<script src="js/app.js"></script>

<!-- end screpting -->
</body>
</html>
