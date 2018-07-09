<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

 <?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $users['password']) ) {
        
        $_SESSION['email'] = $users['email'];
        $_SESSION['first_name'] = $users['first_name'];
        $_SESSION['last_name'] = $users['last_name'];
        $_SESSION['active'] = $users['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: loginsuccess.php");
    }
    else {
        $_SESSION['message'] = "WELCOME!";
        header("location: loginsuccess.php");
    }
}

?>
</body>
</html>