<html>
<head>
  <title>Results</title>
  <?php include 'css.html'; ?>
  
  <link rel="stylesheet" type="text/css" href="allocation.css">
  <link rel="stylesheet" href="font-awesome.css">
  <link rel="icon" type="image/png" href="img/tool.jpg">
  <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="font-awesome.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="respond.css">
        
</head>

<body>
  <nav class="menu">
   <ul>
          <li><a href = "mainmenu.php#home">  <i class = "fa fa-home"></i> HOME</a></li>
          
          <div style="float: right;">
          <li><a href = "index.php"><i class = "fa fa-key"></i> LOG IN</a></li>
</div>
   </ul>  
  </nav>  
  
    <br><br><br>
</body>
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
$allocation = 'laptop';
$output = NULL;
//query the database
$query = $mysqli->query("SELECT * FROM employeedtails where specialize = 'laptop'") or die("cant search");

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
$query = $mysqli->query("SELECT * FROM laptop") or die("cant search");


while ($rows = $query -> fetch_assoc()) 
 {
  $name = $rows['name'];
  $phonenumber = $rows['phonenumber'];
  $email = $rows['email'];
  $address = $rows['address'];
  $problem = $rows['problem'];
  $freetime = $rows['freetime'];
 }

  if($address === $waddress )
{
$query = $mysqli->query("SELECT * FROM rating where phonenumber1 = '$pnumber' ") or die("ascant search again");

while ($rows = $query -> fetch_assoc()) 
 {
  $rating = $rows['rating'];
  $phonenumber1 = $rows['phonenumber1'];
 }

?>
<h1 style="font-size: 30px;">Results</h1>
<div class="card">
  <img src="img/elec.png" alt="" style="height: 40%; width:100%">

  <h1><?php echo $sname?> <?php echo $lname?></h1>
  <p class="title">Email:<?php echo $email1?></p>
  <p>Phone Number:+254<?php echo $pnumber ?></p>
  <p>Id Number:<?php echo $id?></p>
  <p>Rating:<?php echo $rating?>/5
<br><br>
<button>
  <form action="insertallocation.php">
    <input style="color: white; background-color: black;border-style: none;margin-top: 5px;width: 100%;height: 20px;" type="submit" value="SELECT" />
</form>
</button>
</div>        

<?php
  {
  $sqlz =  "INSERT into allocation (name,phonenumber,address,sname,lname,pnumber,id,email,problem) 

VALUES ('$name','$phonenumber','$address','$sname', '$lname', '$pnumber','$id','$email1','$problem')";

$insertz = $mysqli->query($sqlz);
}

}else{
  ?>
  <div class="form">
    <h1><?= 'Match Not Found'; ?></h1>
    <p>
    There are no free repairmen near you.Please Check in after 5 minutes. Thank you.
    </p>
    <a href="mainmenu.php"><button class="button button-block"/>Home</button></a>
</div>
<?php
}

?>
<body>
</body>
</html>
