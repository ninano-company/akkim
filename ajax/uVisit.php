<?php
    require_once('connection.php');
    require_once('../function/makeProcess.php');
    require_once('../function/direct.php');

    $condition1 = "";
    $condition1 .= makeUpdate( 'nick', $_POST['write_name'] );
    $condition1 .= makeUpdate( 'pwd', $_POST['password'] );
    $condition1 .= makeUpdateeNULL( 'note', $_POST['main_text'] );

    $sql="
    UPDATE akkVis
        SET
            {$condition1}
        WHERE nick = '{$_POST['nick']}' AND note = '{$_POST['desc']}' AND created = '{$_POST['crt']}'
    ";
    $result = mysqli_query ( $conn, $sql );
    if($result === false){
        echo 'failed';
    } else {
        echo 'success';
    }
?>
