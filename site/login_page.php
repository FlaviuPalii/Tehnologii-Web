<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->

  </div>
  <div class="login-form">
    <form action="../php/login.php" method="post" id="lgform">
      <h1>Login</h1>
      <a id="errMsg" style="color:red">
        <?php
          session_start();
          if($_SESSION['errors'] == true){
            echo $_SESSION['errMsg'];
            $_SESSION['errMsg'] = '';
            $_SESSION['errors'] = false;
          }
        ?>
      </a>
      <div class="content">
        <div class="input-field">
          <input type="email" name="iemail" placeholder="Email" autocomplete="nope">
        </div>
        <div class="input-field">
          <input type="password" name="ipassword" placeholder="Password" autocomplete="new-password">
        </div>
      </div>
      <div class="action">
        <a onclick="document.location='../site/register.php'">Register</a>
        <button type="submit">Sign in</button>
      </div>
    </form>
    <!-- partial -->
    <script src="../js/script.js"></script>
    <script src="../js/validare.js"></script>
</body>

</html>