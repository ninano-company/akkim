<?php
    // print_r($_POST);
    require_once('connection.php');
    require_once('../function/makeProcess.php');
    require_once('../function/direct.php');

    $sql="
    UPDATE akkVis
        SET
            likey = likey {$_POST['updown']}
        WHERE nick = '{$_POST['nick']}' AND note = '{$_POST['desc']}' AND created = '{$_POST['crt']}'
    ";

    $result = mysqli_query ( $conn, $sql );
    if($result === false){
        echo 'failed';
    } else {
        echo 'success';
    }
?>
