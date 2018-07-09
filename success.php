<?php
/* Displays all successful messages */
session_start();
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
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: mainmenu.php" );
    endif;
    ?>
    </p>
    <a href="mainmenu.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
