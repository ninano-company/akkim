<?php
  require_once('makeProcess.php');
  require_once('fileInput.php');
  require_once('connection.php');
  
  $id = $_POST['ver'];
  
  $condition = '';
  $condition2 = '';
  
  $contents = '';
  if ( $_POST['contents'] ) {
    for( $i = 0; $i < count($_POST['contents']); $i++ ) {
      $contents .= $_POST['contents'][$i].',';
    }
    $contents = substr( $contents, 0, -1 );
  }

  $condition .= makeUpdateNULL( 'contents', $contents );

  for( $i = 0; $i < $_POST['slideNum']; $i++ ) {
    $condition .= makeUpdateNULL( 'useText'.$i, $_POST['useText'.$i] );
    $condition .= makeUpdateNULL( 'usebutton'.$i, $_POST['usebutton'.$i] );
    if ( $_POST['useText'.$i] == 1 ) {
      $condition .= makeUpdateNULL( 'bannerSentence'.$i, $_POST['BannerSentence'.$i] );
      $condition .= makeUpdateNULL( 'bannerfonts'.$i, $_POST['bannerFonts'.$i] );
      $condition .= makeUpdateNULL( 'bannerfontsize'.$i, $_POST['bannerFontSize'.$i] );
      $condition .= makeUpdateNULL( 'bannerfontcolor'.$i, $_POST['bannerfontcolor'.$i] );
    }
    if ( $_POST['usebutton'.$i] == 1 ) {
      $condition .= makeUpdateNULL( 'buttonSentence'.$i, $_POST['buttonSentence'.$i] );
      $condition .= makeUpdateNULL( 'buttonfont'.$i, $_POST['buttonFonts'.$i] );
      $condition .= makeUpdateNULL( 'buttonfontsize'.$i, $_POST['buttonFontSize'.$i] );
      $condition .= makeUpdateNULL( 'buttonfontcolor'.$i, $_POST['buttonfontcolor'.$i] );
      $condition .= makeUpdateNULL( 'buttoncolor'.$i, $_POST['buttoncolor'.$i] );
    }
  }
  
  for( $j = 1; $j < 5; $j++ ) {
    $condition .= makeUpdateNULL( 'icon'.$j.'subject', $_POST['Icon'.$j.'Subject']);
    $condition .= makeUpdateNULL( 'icon'.$j.'fonts', $_POST['Icon'.$j.'Fonts']);
    $condition .= makeUpdateNULL( 'icon'.$j.'fontsize', $_POST['Icon'.$j.'FontSize']);
    $condition .= makeUpdateNULL( 'icon'.$j.'fontcolor', $_POST['Icon'.$j.'fontcolor']);
    $condition .= makeUpdateNULL( 'icon'.$j.'Paragh', $_POST['icon'.$j.'Paragh']);
    $condition .= makeUpdateNULL( 'icon'.$j.'Pfonts', $_POST['Icon'.$j.'PFonts']);
    $condition .= makeUpdateNULL( 'icon'.$j.'Pfontsize', $_POST['Icon'.$j.'PFontSize']);
    $condition .= makeUpdateNULL( 'icon'.$j.'Pfontcolor', $_POST['Icon'.$j.'Pfontcolor']);
  }
  
  $condition .= makeUpdateNULL( 'logo_width', $_POST['logoSizeWidth'] );
  $condition .= makeUpdateNULL( 'logo_height', $_POST['logoSizeHeight'] );
  $condition .= makeUpdateNULL( 'nickName', $_POST['anneName'] );
  $condition .= makeUpdateNULL( 'customer', $_POST['infocustomer'] );
  $condition .= makeUpdateNULL( 'contact', $_POST['infomanager'] );
  $condition .= makeUpdateNULL( 'region', $_POST['region'] );
  $condition .= makeUpdateNULL( 'location', $_POST['infoPosition'] );
  $condition .= makeUpdateNULL( 'sctructDate', $_POST['infomake'] );
  $condition .= makeUpdateNULL( 'extra', $_POST['infoextra'] );
  $condition .= makeUpdateNULL( 'slideNum', $_POST['slideNum'] );
  $condition .= makeUpdateeNULL( 'chk', 1 );

  $sql="
    UPDATE manageAR
      SET
        {$condition}
      WHERE id = {$id}
  ";
  // die($sql);
  $result = mysqli_query( $conn, $sql );
  if($result == false){
    echo mysqli_error($conn);
  } else {
    $condition2 .= uploadImg( 'logo_file', 'logoFile' );
    $condition2 .= uploadImg( 'slide0_file', 'slideFile0' );
    $condition2 .= uploadImg( 'slide1_file', 'slideFile1' );
    $condition2 .= uploadImg( 'slide2_file', 'slideFile2' );
    $condition2 .= uploadImg( 'slide3_file', 'slideFile3' );
    $condition2 .= uploadImg( 'slide4_file', 'slideFile4' );
    $condition2 .= uploadImg( 'icon1_file', 'iconFile1' );
    $condition2 .= uploadImg( 'icon2_file', 'iconFile2' );
    $condition2 .= uploadImg( 'icon3_file', 'iconFile3' );
    $condition2 .= uploadImg( 'icon4_file', 'iconFile4' );

    if( $condition2 == '' ) {
      echo "<script>location.href='../../boardList.php';</script>";
    } else {
      $condition2 = substr( $condition2, 0, -1 );
      $sql="
        UPDATE manageAR
          SET
            {$condition2}
          WHERE id = {$id}
      ";
      $result = mysqli_query( $conn, $sql );
      if($result == false){
        echo mysqli_error($conn);
      } else {
      echo "<script>location.href='../../boardList.php';</script>";
      }
    }
  }
  

      
?>