<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php?action=login");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/w3.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: transparent; }
    </style>
</head>
<body>
    <div class="page-header">
        <h5>Welcome,<br> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
    </div>
    <p>
        <a href="reset-password.php" class="w3-btn w3-yellow">Reset Your Password</a>
        <a href="logout.php" class="w3-btn w3-blue">Sign Out of Your Account</a>
    </p>
    <hr />
 <div class="w3-container">
  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-green" onclick="openPage(event,'Home')">Home</button>
    <button class="w3-bar-item w3-button tablink" onclick="openPage(event,'Profile')">Profile</button>
    <button class="w3-bar-item w3-button tablink" onclick="openPage(event,'Games')">Games</button>
  </div>
  
  <div id="Home" class="w3-container w3-border page w3-animate-top">
    <h2>Home</h2>
    <p align="center">You may have noticed that the website got a overhaul. That is fine. I am going to be updating this next. :)</p>
  </div>

  <div id="Profile" class="w3-container w3-border page w3-animate-top" style="display:none">
    <h2><?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
    <p>User Status: <span class="w3-badge w3-green">User</span></p>
    <p>Account type: <span class="w3-badge w3-black">Free</span></p>
    <P>Registed on: <?php echo htmlspecialchars($_SESSION["registered"]); ?></P>
    <P>A user that knows what they are doing! Also, this user will receive special prizes!</P>
  </div>

  <div id="Games" class="w3-container w3-border page w3-animate-top" style="display:none">
    <h2>Games</h2>
    <p><a href="https://gamejolt.com/games/pokemondeltagreen/377091" target="_blank">Pok&eacute;mon Delta Green</a></p>
  </div>
</div>

<script>
function openPage(evt, pageName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("page");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
  }
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " w3-green";
}
</script>

</body>
</html>