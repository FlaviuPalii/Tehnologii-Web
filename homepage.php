<!DOCTYPE html>
<head>
<title>JDS's go STUTUTU</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="./css/homepage.css">

</head>

<body>      
<!--    <div class="login-form">
        <form>
          <a href="../homepage.php" id="closetab">Close Tab</a>
          <div class="content">
            <div class="input-field">
              <input type="email" placeholder="Email" autocomplete="nope">
            </div>
            <div class="input-field">
              <input type="password" placeholder="Password" autocomplete="new-password">
            </div>
            <a href="#" class="link">Forgot Your Password?</a>
          </div>
          <div class="action">
            <button><a href="./register.php">Register</a></button>
            <button><a href="./loggedin.php">Sign in</a></button>
          </div>
        </form>
      </div> -->

   
      
      <div id="bg-form"></div>

    <div class="container">
         <div class="header">
             Japanese Domestic Market - HOMEPAGE
             <?php
              session_start();
              if($_SESSION['errors'] == false && $_SESSION['conUser'] == ''){
                echo '<a id="blackgray_text" style="float:right" href="site/login_page.php">Login</a>';
              }else{
                echo '<a id="blackgray_text" style="float:right" href="php/logout.php">Logout</a>';
              }
             ?>
         </div>
         
<?php
  require('site/menu.php');
  ?>

         <div class="content-large" >
            <h2 id="lime_text">What is Japanese Domestic Market?</h2>
            <p style="color:#8E8E8E">&emsp;There’s no doubt that car enthusiasts consider
                the 1990s to be the golden era for Japanese Domestic Market (JDM) cars.
                Electric cars were still a distant vision at the tail end of the last decade
                and the performance vehicles rolling off the production line in Japan’s powerhouse
                motor industry were still entirely mechanical.<br>&emsp;These are cars or versions of cars that
                have been produced solely for their local, Japanese market and have not been exported
                to most (or any) other markets. The 1990s, in particular, gave birth to most of the iconic
                JDM cars, we lust after today. Without further due, these are the best JDM cars that came in
                that period.</p>
                <img name="slideshow" class="img_1">
                <h1 id="lime_text">Live Comment Section</h1>
            
                <div class="form-all-comments" id="lime_text"></div>
                <form>
                    <input class="form-text" type="text" placeholder="Tap to send a message">
                    <button class="form-submit" id="lime_text" type="submit">Submit</button>
                </form>
        </div>
         <div class="content-small">Our favorite this week, the LS400
            <img src="./photos/celsior-container-small.png" id="img_ls400">
         </div>
         <div class="content-small">
             <p id="lime">&emsp;1UZ-FE: The Gem That Became One of the World’s Most Reliable V8s</p>
             <p id="blackgray_text">&emsp;In its original form, the engine had a 10.0:1 compression ratio that enabled an output of 256 hp and 
                 260 lb-ft (353 Nm) of torque. It was revised for the 1995 model year, receiving a host of upgrades 
                 which included lighter rods and pistons, sequential fuel injection, new cams with a slightly more 
                 aggressive profile, or an improved exhaust manifold. The compression ratio increased to 10.4:1, 
                 resulting in an increase of power to 261 hp and 269 lb-ft (365 Nm) of torque. A second revision came 
                 in 1997 when among the new goodies Toyota added its trademark VVT-i (variable valve timing) technology. In this final form, the V8 
                 could make up to 300 hp and 310 lb-ft (420 Nm) of torque.</p>
         </div>
         <div class="footer" id="lime_text">Follow JDM influencers here:
        <img src="./photos/ig+no+back.png" id="icon">
        <a href="https://www.instagram.com/maenmobil/" id="white_text">&emsp;MAENMOBIL&emsp;</a>
        <a href="https://www.instagram.com/blackbird_pl/" id="white_text">&emsp;BLACKBIRD_PL&emsp;</a>
        <a href="https://www.instagram.com/explore/tags/bippu/" id="white_text">&emsp;#BIPPU&emsp;</a>
        <a href="homepage.php"id="lime_text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Back to the top&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
        </div>
    </div>
    <script src="./js/formComment.js"></script>
</body>

</html>