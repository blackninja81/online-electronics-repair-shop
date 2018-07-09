
 <?php
 session_start();
/* User login process, checks if user exists and password is correct */
if(isset($_POST['login'])){
require 'db.php';
// Escape to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string($_POST['password']);
$id = $mysqli->escape_string($_POST['id']);
$result = mysqli_query($mysqli,'SELECT * FROM employeedtails WHERE email="'.$email.'" and password = "'.$password.'"');

if ( mysqli_num_rows($result) == 1 )
 // User doesn't exist
{
  $_SESSION['id'] = $id;
  header("location: test2.php");
}
else
 { 
  $_SESSION['message'] = "User with that email doesn't exist!";
header("location: error2.php");
   
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="test1.php" method="post">
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="submit" name="login">
</form>
</body>
</html>