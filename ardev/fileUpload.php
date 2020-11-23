<?php
// $fontStrg = "assets/fonts/";
$targetDir = "assets/images/slideBanner/";

// $fontfileName = $_POST['fontfile']['name'];
// $fontfileDir = $fontstrg.basename($fontfileName);
// $fontfileTmpName = $_POST['fontfile']['tmp_name'];
// $fontSave = move_uploaded_file($fontfileTmpName,$fontfileDir);
// echo $fontSave;
// $fontfileType = $_POST['fontfile']['type'];

$logofileName = $_POST['logoFile']['name'];
// $logofileType = $_POST['logoFile']['type'];
// $logofileTmpName = $_POST['logoFile']['tmp_name'];
for($i=0; $i<$slideNum; $i++ ){
$slidefile[$i] = $_POST['slideFile'.$i];
}
for($j =1; $j<5; $j++){
  $iconfile[$j] = $_POST['icon'.$j.'File'];
}
?>