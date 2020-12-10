<?php
  require_once 'connection.php';
  
  $sql = "
    UPDATE manageAR
      SET
        del = 1
        WHERE id = {$_GET['ver']}
  ";
  $result = mysqli_query( $conn, $sql );
  if ( $result ) {
    header("Location: ../../boardList.php");
  }
?>