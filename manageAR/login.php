<html lang="kr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>아낌 관리자 페이지 - 로그인</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <section class="loginBox">
      <img class="loginImg" src="img/loginPanelImg.jpg" alt="">
      <form class="infoBox" action="assets/process/loginProcess.php" method="POST">
        <h1>Sign In</h1>
        <div class="row">
          <label for="uname">Login Id</label><br>
          <input name="uname" class="loginInput" type="text"/>
        </div>
        <div class="row">
          <label for="pwd">Password</label><br>
          <input name="pwd" class="loginInput" type="password"/>
        </div>
        <div class="btnContainer">
          <input class="btn" type="submit" name="login" value="Log in">
        </div>
      </form>
    </section>
  </div>
</body>
</html>