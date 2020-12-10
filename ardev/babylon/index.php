<?php
    require_once '../../manageAR/assets/process/connection.php';
    
    $section = '';
    $contents = '';

    $sql = "
        SELECT  m.contents
            FROM manageAR AS m
            WHERE id = {$_GET['ver']}
    ";
    $result = mysqli_query( $conn, $sql );
    while( $row = mysqli_fetch_row( $result ) ) {
        $contents = $row[0];
    }

    $sql = "
        SELECT  ARs
            FROM akkARs
            WHERE id IN ( {$contents} )
    ";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_row($result) ) {
        $section .= $row[0];
    }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>AR</title>
    <link rel="stylesheet" href="css/main.css?Ver=22">
    <script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../assets/js/my-app.js?ver=25"></script>
</head>

<body>
    <div class="btnsound">
		<audio src="../assets/sounds/effects/cleanSound.wav" class="btn1sound"></audio>
		<audio src="../assets/sounds/effects/ryangSound.wav" class="btn2sound"></audio>
		<audio src="../assets/sounds/effects/tiktokSound.wav" class="btn3sound"></audio>
	</div>
    <header>
        
        <a href="javascript:setTimeout(()=>{window.location = '../index.html' },770);" class="goHome backbutton"></a>
        <a href="javascript:setTimeout(()=>{window.history.back(); },770);" class="goBack backbutton"></a>
        <h1>AR Park</h1>
    </header>
    <main>
        <?= $section ?>
    </main>

    <script>
        function NoRight() {
            return false;
        }
        document.oncontextmenu = NoRight;
    </script>
    
</body>

</html>