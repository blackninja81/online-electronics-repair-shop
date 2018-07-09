<?php


$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'online electronic shop') or die('Error selecting database : ' . mysql_error());

$sname=$_POST['sname'];
$lname=$_POST['lname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$workaddress=$_POST['workaddress'];
$homeaddress=$_POST['homeaddress'];
$workxp=$_POST['workxp'];
$specialize=$_POST['specialize'];
$idno=$_POST['idno'];
$kra=$_POST['kra'];
$gender=$_POST['gender'];
$getinfo=$_POST['getinfo'];
$crimerecord=$_POST['crimerecord'];
$pdescription=$_POST['pdescription'];

$result=mysqli_query($db,"INSERT INTO japplications(sname,lname,pnumber,email, dob,waddress,haddress,workxp,specialize,id,krapin,gender,getinfo,crime,crimeinfo) VALUES ('$sname','$lname','$phonenumber','$email','$dob','$workaddress','$homeaddress','$workxp','$specialize','$idno','$kra','$gender','$getinfo','$crimerecord','$pdescription')");

if($result)
 {
 	 echo("<script>alert('Info successfully recorded')</script>");
 	  echo("<script>window.location = 'upload.php';</script>");

 }
 else
 {
 	 echo "error occured";
 	 
 }


 ?>
