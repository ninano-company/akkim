<?php
  session_start();
  require_once('connection.php');
  if (isset($_POST['login'])) {
    if (empty($_POST['uname']) || empty($_POST['pwd'])) {
      header("Location: ../../login.php?Empty=계정 정보를 입력해주세요");
    }else {
      $sql="
      SELECT
        u.uname, u.name, u.id, u.class, s.name
        FROM akkAdminUser AS u
        LEFT JOIN akkSelect AS s ON s.id = u.class
        WHERE uname='{$_POST['uname']}' AND pwd=password('{$_POST['pwd']}')";
      $result=mysqli_query($conn, $sql);
      if($row = mysqli_fetch_array($result)){
        $_SESSION['akkAdmin']=$_POST['uname'];
        $_SESSION['akkAdminName']=$row[1];
        $_SESSION['akkAdminId']=$row[2];
        $_SESSION['akkAdminClassName']=$row[4];
        header("Location: ../../index.php");
      }else{
        header("Location: ../../login.php?Invalid=아이디 혹은 비밀번호가 올바르지 않습니다.");
      }
    }
    echo 'Working Now';
  }else{
    header("Location: ../../login.php");
  }

?>
