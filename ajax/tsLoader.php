<?php
    require_once('connection.php');
    
    $sql = "
        SELECT
            text1, text2, text3, cate
            FROM tsContainer
            ORDER BY id
    ";

    $data = array();

    $result = mysqli_query( $conn, $sql );
    while( $row = mysqli_fetch_row($result) ){
        $object = array(
            "texta" => $row[0],
            "textb" => $row[1],
            "textc" => $row[2],
            "cate" => $row[3]
        );
        array_push( $data, $object );
    }

    $out = json_encode($data);
    echo $out;
?>