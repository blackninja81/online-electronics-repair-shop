<?php
if(! empty($_POST))
{

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>