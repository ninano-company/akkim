<?php
function uploadImg( $colName, $inputName ) {
  if ( $_FILES[$inputName]['tmp_name'][0] != '' ) {
    $existsCounter = 1;
    $filename = array();
    $target_dir = "../images/".date("Ymd")."/";
    if ( !file_exists($target_dir) ) {
      mkdir($target_dir, 0777, true);
    }
    for ($i=0; $i < count($_FILES[$inputName]["name"]); $i++) {
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $target_file = $target_dir . basename( $_FILES[$inputName]["name"] );
      
      $basename = basename( $_FILES[$inputName]["name"] );
      // Check if file already exists
      while ( true ) {
        if (file_exists($target_file)) {
          $basename = "{$existsCounter}_".basename($_FILES[$inputName]["name"]);
          $target_file = $target_dir . $basename;
          $existsCounter++;
        } else {
          $existsCounter = 1;
          break;
        }
      }
      // Check file size
      if ($_FILES[$inputName]["size"] > 16000000) {
        $uploadOk = 0;
      }
      // Allow certain file formats
      if ($uploadOk == 0) {
        return '';
          // if everything is ok, try to upload file
      } else {
        if ($p = move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_file)) {
          $filename = $target_file;
          $condition3 = makeUpdateNULL( $colName, $filename );
          return $condition3;
        }
      }
    }
  } else {
    return '';
  }
}
?>