<?php
    require_once('connection.php');
    
    $sql = "
        SELECT
            nick, note, likey, img
            FROM akkVis
            ORDER BY created DESC
            LIMIT 10
    ";

    $data = array();

    $result = mysqli_query( $conn, $sql );
    while( $row = mysqli_fetch_row($result) ){
        $object = array(
            "nName" => $row[0],
            "desc" => $row[1],
            "like" => $row[2],
            "image" => $row[3]
        );
        array_push( $data, $object );
    }

    $out = json_encode($data);
    echo $out;
?>