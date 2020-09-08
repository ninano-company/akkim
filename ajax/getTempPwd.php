<?php
    require_once('connection.php');
    $out = '';
    $sql = "
        SELECT
            pwd
            FROM akkVis
            WHERE nick = '{$_POST['nick']}' AND note = '{$_POST['desc']}'
    ";

    $result = mysqli_query( $conn, $sql );
    if( $row = mysqli_fetch_row($result) ){
        $out = $row[0];
    }

    echo $out;
?>