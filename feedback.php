<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'online electronic shop') or die('Error selecting database : ' . mysql_error());
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $info=$_POST['info'];


 $result=mysqli_query($db,"INSERT INTO feedback (name,email,pnumber,info) VALUES ('$name','$email','$pnumber','$info')");


 if($result)
 {
 	 echo("<script>alert('Feedback info successfully recorded')</script>");
 	  echo("<script>window.location = 'mainmenu.php';</script>");

 }
 else
 {
 	echo("<script>alert('error occured')</script>").mysqli_error();
 	 echo("<script>window.location = '';</script>");
 }


 ?>