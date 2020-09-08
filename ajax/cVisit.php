<?php
    require_once('connection.php');
    require_once('../function/makeProcess.php');
    require_once('../function/direct.php');

    $condition1 = "";
    $condition2 = "";
    $condition1 .= makeCreatea( 'nick', $_POST['write_name'] );
    $condition2 .= makeCreateb( $_POST['write_name'] );
    $condition1 .= makeCreatea( 'note', $_POST['main_text'] );
    $condition2 .= makeCreateb( $_POST['main_text'] );
    $condition1 .= makeCreateae( 'pwd', $_POST['password'] );
    $condition2 .= makeCreatebe( $_POST['password'] );

    $sql="
    INSERT INTO akkVis(
        ". $condition1 ."
    )VALUES(
        ". $condition2 ."
    )";
    $result=mysqli_query($conn, $sql);
    if($result === false){
        echo 'failed';
    } else {
        $id = mysqli_insert_id( $conn );

        if ( $_FILES['imageUp']['tmp_name'][0] != '' ) {
            $existsCounter = 1;
            $filename = array();
            $target_dir = "../uploads/".date("Ymd")."id{$id}/";
            if ( !file_exists($target_dir) ) {
                mkdir($target_dir, 0777, true);
            }
            for ($i=0; $i < count($_FILES["imageUp"]["name"]); $i++) {
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $target_file = $target_dir . basename( $_FILES["imageUp"]["name"] );
                
                $basename = basename( $_FILES["imageUp"]["name"] );
                // Check if file already exists
                while ( true ) {
                    if (file_exists($target_file)) {
                        $basename = "({$existsCounter}) ".basename($_FILES["imageUp"]["name"]);
                        $target_file = $target_dir . $basename;
                        $existsCounter++;
                    } else {
                        $existsCounter = 1;
                        break;
                    }
                }
                // Check file size
                if ($_FILES["imageUp"]["size"] > 16000000) {
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($uploadOk == 0) {
                    // if everything is ok, try to upload file
                } else {
                    if ($p = move_uploaded_file($_FILES["imageUp"]["tmp_name"], $target_file)) {
                        $filename = $target_file;
                    }
                }
            }
            $condition3 = makeUpdateeNULL( 'img', $filename );

            $sql = "
                UPDATE akkVis
                SET {$condition3}
                WHERE id = {$id}
            ";

            $result = mysqli_query( $conn, $sql );
            if($result === false){
                echo 'failed';
            } else {
                echo 'success';
            }
        } else {
            echo 'true';
        }
    }
?>
