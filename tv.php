<?php
if(! empty($_POST))
{

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$sql1 = "INSERT into tv(name,phonenumber,address,email,freetime,dname,dtype,problem,pdescription) 
  
VALUES (
'{$mysqli->real_escape_string($_POST['name'])}',
'{$mysqli->real_escape_string($_POST['phonenumber'])}',
'{$mysqli->real_escape_string($_POST['address'])}',
'{$mysqli->real_escape_string($_POST['email'])}',
'{$mysqli->real_escape_string($_POST['freetime'])}',
'{$mysqli->real_escape_string($_POST['dname'])}',
'{$mysqli->real_escape_string($_POST['dtype'])}',
'{$mysqli->real_escape_string($_POST['problem'])}',
'{$mysqli->real_escape_string($_POST['pdescription'])}')";

$insert = $mysqli->query($sql1);
  
  if ($insert)
{
 Header("Location: submittv.php");
}     

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Television</title>
  <link rel="icon" type="image/png" href="img/tool.jpg">
   
       
         <link rel="stylesheet" type="text/css" href="new.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="mobile.css">
        <link rel="stylesheet" href="device.css">
        <link rel="stylesheet" href="respond.css"> <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">       
             
       
</head>
<body>
    <nav>
  <ul>
          <li><a href = "mainmenu.php"><i class = "fa fa-home"></i> HOME</a></li> 
      <li><a href="">DEVICES</a>
        <ul>
           <li><a href="laptop.php"><i class = "fa fa-laptop"></i> Laptop</a></li>
            <li><a href="gaming.php"><i class = "fa fa-gamepad"></i> Gaming Consoles</a></li>
           <li><a href="television.php"><i class = "fa fa-mobile"></i> Mobile Phones</a></li>
           <li><a href="desktop.php"><i class = "fa fa-desktop"></i> Desktop</a></li>
           <li><a href="fridge.php">Fridge</a></li>
         </ul>
      </li>
          
         
</ul>  
      </nav>   

      <div id ="home" class="text">
<div class="title fadeInLeftBig">

          <h1><i class = "fa fa-tv"></i>  TVs</h1>
</div>
</div>

        
  
 <div class="contac">
<form id="contact" method="post" action="">

<div class="userinfo">
<h1>Enter Your Personal Information</h1>
<br>
  <fieldset>
    <h3>Your Name</h3><input placeholder="Your name" type="text" name="name" tabindex="1" required >
    </fieldset>
    <fieldset>
     <h3>Phone Number(+254)</h3><input placeholder="Your Phone Number" name="phonenumber" type="text" tabindex="2" required >
    </fieldset>
    <fieldset>
    <h3>Address</h3><input placeholder="Your Address" type="text" name="address" tabindex="3" required >
    </fieldset>
    <h3>Email</h3><fieldset>
      <input placeholder="Your Email" name="email" type="email" tabindex="4"><br>
     </fieldset>
     
</div>

<div class="deviceinfo">
<h1>Enter The Device Information</h1>
<br>
  <fieldset>
    <h3>Device Name</h3><input placeholder="Device Name" type="text" tabindex="5" name="dname" required >
    </fieldset>

     <h3>Device Type</h3>   
    <fieldset>
    <input placeholder="Enter the Device Type(i.e flat screen,smart tv)" type="text" tabindex="6" name="dtype" >
    </fieldset>

      <h3>Problem</h3><fieldset>
      <div id="select" class="styled-select slate">
      <select name="problem">
  <option>Choose the Problem</option>
  <option value="deadscreen">Dead Screen</option>
  <option value="unresponsivescreen">unresponsive screen</option>
  <option value="crackedscreen">Cracked Screen</option>
  <option value="spoiledremote">remote sensor problems</option>
  <option value="imagedistotion">image distortion</option>
  <option value="resolutionmalfuntion">resolution malfunction</option>
  <option value="shutdownissues">Shutdown issues</option>
  <option value="other">Other Problem</option>

</select>
</div>

      <h3>Problem Description</h3>
       <fieldset>
      <textarea placeholder="Describe the problem" name="pdescription" tabindex="10"></textarea>
    </fieldset>
   
   <br>
  
<fieldset>
      <button onclick="" name="submit" type="submit" id="contact-submit" data-submit="...Sending">
      <h3>Submit</h3>

      </button>
    </fieldset>
  </div>

</form>
</body>
</html>