<?php
if(! empty($_POST))
{

/*  Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$sql1 = "INSERT into rating(name,phonenumber,rate) 
 
VALUES (
'{$mysqli->real_escape_string($_POST['name'])}',
'{$mysqli->real_escape_string($_POST['phonenumber'])}',
'{$mysqli->real_escape_string($_POST['rating'])}')";

$insert = $mysqli->query($sql1);
    
if ($insert)
{
 Header("Location: submitrating.php");
}else{
Header("Location: submitmobile.php");

}     
 
}

?>
