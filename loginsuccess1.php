<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index2.php"); // Redirecting To Home Page
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
<div class="form" style="color: white;font-size: 20px; text-align: center;">

     Welcome <?php echo $login_session; ?><br>

<?php
error_reporting(0);
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$allocation = 'mobilephone';
$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM employeedtails where email = '$login_session'") or die("cant search");

while ($rows = $query -> fetch_assoc()) 
 {
  $sname = $rows['sname'];
  $lname = $rows['lname'];
  $pnumber = $rows['pnumber'];
  $email1 = $rows['email'];
  $waddress = $rows['waddress'];
  $id = $rows['id'];

 }


$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM mobile") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $problem = $rows['problem'];
 $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>
 <?php echo  $name; ?>
<?php echo ".Their phone number is ";?>
 <?php echo $phonenumber;?>
<?php echo "and their address is ";?>
 <?php echo $address;?>
<?php echo ".The problem is ";?>
 <?php echo $problem;?>
<?php echo ".Problem description:";?>
 <?php echo $pdescription;
 }
 ?>
 <br><br>
 <?php

 
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM laptop") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $freetime = $rows['freetime'];
  $lpname = $rows['lpname'];
  $sversion = $rows['sversion'];
  $problem = $rows['problem'];
 $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>

 <?php echo  $name; ?>
 <?php echo ".Their phone number is ";?>
 0<?php echo $phonenumber;?>
 <?php echo "and their address is ";?>
 <?php echo $address;?>
 <?php echo ".Laptop name" ;?>
 <?php echo $lpname;?>
 <?php echo "Software version" ;?>
 <?php echo $sversion;?>
 <?php echo ".The problem is" ;?>
 <?php echo $problem;?>
 <?php echo ".Problem description: ";?>
 <?php echo $pdescription;
 }
 ?>
 <br><br>
 <?php


$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM desktop") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $freetime = $rows['freetime'];
  $dname = $rows['dname'];
  $sversion = $rows['sversion'];
  $problem = $rows['problem'];
 $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>

 <?php echo  $name; ?>
<?php echo ".Their phone number is" ;?>
 <?php echo $phonenumber;?>
<?php echo "and their address is" ;?>
 <?php echo $address;?>
 <?php echo ".desktop name" ;?>
 <?php echo $dname;?>
 <?php echo "Software version" ;?>
 <?php echo $sversion;?>
<?php echo ".The problem is" ;?>
 <?php echo $problem;?>
<?php echo ".Problem description: ";?>
 <?php echo $pdescription;
 }

 ?>
 <br><br>
 <?php

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM tv") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $freetime = $rows['freetime'];
  $dname = $rows['dname'];
  $problem = $rows['problem'];
 $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>

 <?php echo  $name; ?>
<?php echo ".Their phone number is ";?>
 <?php echo $phonenumber;?>
<?php echo "and their address is ";?>
 <?php echo $address;?>
 <?php echo ".TV name";?>
 <?php echo $dname;?>
<?php echo ".The problem is ";?>
 <?php echo $problem;?>
<?php echo ".Problem description: ";?>
 <?php echo $pdescription;
 }
?>
 <br><br>
 <?php

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM fridge") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $freetime = $rows['freetime'];
  $lpname = $rows['fname'];
  $sversion = $rows['sversion'];
  $problem = $rows['problem'];
 $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>

 <?php echo  $name; ?>
 <?php echo ".Their phone number is" ;?>
 <?php echo $phonenumber;?>
 <?php echo "and their address is" ;?>
 <?php echo $address;?>
 <?php echo ".Fridge model" ;?>
 <?php echo $fname;?>
 <?php echo ".The problem is" ;?>
 <?php echo $problem;?>
 <?php echo ".Problem description:" ;?>
 <?php echo $pdescription;
 }
 ?>
 <br><br>
 <?php


$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM gaming") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $freetime = $rows['freetime'];
  $ctype = $rows['ctype'];
  $problem = $rows['problem'];
  $pdescription = $rows['pdescription'];
 }

  if($address === $waddress )
{
echo 'You have a pending request from'?>

 <?php echo  $name; ?>
 <?php echo ".Their phone number is ";?>
 <?php echo $phonenumber;?>
 <?php echo "and their address is ";?>
 <?php echo $address;?>
 <?php echo ".Console name ";?>
 <?php echo $cname;?>
 <?php echo ".The problem is ";?>
 <?php echo $problem;?>
 <?php echo ".Problem description: ";?>
 <?php echo $pdescription;
 }
 ?>
 <br><br>
 <?php


?>

    <a href="employeeprofile.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
