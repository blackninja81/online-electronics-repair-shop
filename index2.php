<?php
include('login1.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: employeeprofile.php");
}
?><?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Repairman Login</title>
  <link rel="icon" type="image/png" href="img/tool.jpg">
  <?php include 'css.html'; ?>
  <link rel="stylesheet" href="style.css">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'loginemp.php';
        
    }
    
        
    }

?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome Repairman!</h1>
          
          <form action="loginemp.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <h2>Email Address</h2>
            
            <input type="email" name="email"/>
          </div>
          
          <div class="field-wrap">
            <h2>Password</h2>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
