<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="../css/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="register-form">
    <form action="../js/validare.js" method="post" id="rgform">
      <h1>Register</h1>
      
      <a href="../homepage.php" id="closetab">Close Tab</a>

      <a id="errMsg" style="color:red"></a>

      <div class="content">
        <div class="input-field">
          <input type="email" name="iemail" placeholder="Email" autocomplete="nope">
        </div>
        <div class="input-field">
          <input type="password" name="ipassword" placeholder="Password" autocomplete="new-password">
        </div>
        <div class="input-field">
          <input type="password" name="ipassword2" placeholder="Confirm password" autocomplete="new-number">
        </div>
      </div>
      <div class="action">
        <button type='submit'>Register</button>
        <a onclick="document.location='../site/login_page.php'">Signup</a>
      </div>
    </form>
  </div>

  <script src="../js/validare.js"></script>
</body>

</html>