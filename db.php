<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = mysqli_connect($host,$user,$pass,$db) or die($mysqli->error);
?>