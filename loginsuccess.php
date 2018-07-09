<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index1.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css.html'; ?>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
         Welcome <?php echo $login_session; ?><br>
<br>
    <a href="request.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
