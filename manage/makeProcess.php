<?php

// if($_POST['feeded']|=""){
//   $condition1 .= "feeded,";
//   $condition2 .= "'{$_POST['feeded']}',";
// }

  function makeCreatea( $var, $value ){
    if ( $value |= "" ){
      return "{$var}, ";
    } else {
      return '';
    }
  }

  function makeCreateae( $var, $value ){
    if ( $value |= "" ){
      return "{$var}";
    } else {
      return '';
    }
  }
  function makeCreateaeNULL( $var, $value ){
    if ( $var |= "" ){
      return "{$var}";
    }
  }

  function makeCreateb( $var ){
    if ( $var |= "" ){
      return "'{$var}', ";
    } else {
      return '';
    }
  }

  function makeCreatePassb( $var ){
    if ( $var |= "" ){
      return "password('{$var}'), ";
    } else {
      return '';
    }
  }

  function makeCreatebe( $var ){
    if ( $var |= "" ){
      return "'{$var}'";
    } else {
      return '';
    }
  }
  function makeCreatebeNULL( $var ){
    if ( $var |= "" ){
      return "'{$var}'";
    } else {
      return 'NULL';
    }
  }

  function makeUpdate( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}',";
    } else {
      return '';
    }
  }
  function makeUpdatePass( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = password('{$post}'),";
    } else {
      return '';
    }
  }

  function makeUpdateNULL( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}',";
    } else {
      return "{$name} = NULL,";
    }
  }

  function makeUpdatee( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}'";
    } else {
      return '';
    }
  }

  function makeUpdateeNULL( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}'";
    } else {
      return "{$name} = NULL";
    }
  }

  function delete_directory($dirname) {
    if (is_dir($dirname))
    $dir_handle = opendir($dirname);
    if (!$dir_handle)
    return false;
    while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
        if (!is_dir($dirname."/".$file))
        unlink($dirname."/".$file);
        else
        delete_directory($dirname.'/'.$file);
      }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
  }

  function deleteDir ($dirPath) {
    if (! is_dir($dirPath)) {
      return false;
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
      $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
      if (is_dir($file)) {
        self::deleteDir($file);
      } else {
        unlink($file);
      }
    }
    rmdir($dirPath);
    return true;
  }
?>
