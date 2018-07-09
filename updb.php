
<?php

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'online electronic shop') or die('Error selecting database : ' . mysql_error());


if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $result=mysqli_query ($db,"INSERT INTO japplicationform(file,type,size) 
 	                       VALUES('$file','$file_type','$file_size')" 
 	                  );

 if($result)
 {
 	 echo "<script>alert('File successfully uploaded') </script>

 	      <script>window.location = 'mainmenu.php';</script>";

 }
 else
 {
 	echo("<script>alert('error occured')</script>").mysqli_error();
 	 echo("<script>window.location = 'upload.html';</script>");
 }


}
?>

