<?php
    require_once 'assets/process/connection.php';
    $sql = "
        INSERT INTO manageAR( chk )
            VALUES
                ( 2 )
    ";
    $result = mysqli_query( $conn, $sql );
    if ( $result ) {
        $id = mysqli_insert_id( $conn );
    } else {
        $id = 'failed';
    }
?>

<script>
    location.href='Anne1.php?ver=<?=$id?>';
</script>