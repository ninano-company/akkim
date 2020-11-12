<?php
    require_once('connection.php');
    require_once('../function/makeProcess.php');
    require_once('../function/direct.php');

    $root = '';
    $sql = "
        SELECT img FROM akkVis WHERE nick = '{$_POST['nick']}' AND note = '{$_POST['desc']}' AND created = '{$_POST['crt']}';
    ";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_row($result) ) {
        $root = $row[0];
    }

    // unlink( $root );
    $ex = explode("/", $root);
    $path = $ex[0].'/'.$ex[1].'/'.$ex[2].'/';
    unlink($root);
    rmdir($path);
    // echo $path;
    // echo $root;

    $sql="
    DELETE FROM akkVis
        WHERE nick = '{$_POST['nick']}' AND note = '{$_POST['desc']}' AND created = '{$_POST['crt']}'
    ";
    $result = mysqli_query( $conn, $sql );
    if( $result ) {
        echo 'success';
    } else {
        echo 'failed';
    }

    // $result = mysqli_query ( $conn, $sql );
    // if($result === false){
    //     echo 'failed';
    // } else {
    //     echo 'success';
    // }
?>
