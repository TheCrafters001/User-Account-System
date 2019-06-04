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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: transparent; }
    </style>
</head>
<body>
  <div class="page-header">
        <h5>Welcome,<br> <i class="fa fa-user-circle" aria-hidden="true"></i> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
  </div>
    <p>
        <a href="reset-password.php" class="w3-btn w3-yellow">Reset Your Password</a>
        <a href="logout.php" class="w3-btn w3-blue">Sign Out of Your Account</a>
    </p>
    <hr />
    <!-- All your content below this line -->
    <p>Your Content Is Here</p>


</body>
</html>
