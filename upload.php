<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload</title>
<link rel="icon" type="image/png" href="img/tool.jpg">
        <link rel="stylesheet" href="mainmenu.css">
        <link rel="stylesheet" href="contacts.css">
         <link rel="stylesheet" type="text/css" href="new.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="font-awesome.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="respond.css">

</head>
<body>
<nav class="menu animated fadeInRightBig">
   <ul>
          <li><a href = "#home">  <i class = "fa fa-home"></i> HOME</a></li>
          <li><a href = "#about"> <i class = "fa fa-user"></i> ABOUT US</a></li>
          <li><a href="#contact"> <i class = "fa fa-envelope"></i> CONTACT US</a></li>

      <li><a href=""> <i class = "fa fa-device"></i> DEVICES</a>
          <ul>
             <li><a href="mobile.php"><i class = "fa fa-mobile"></i> Mobile Phone</a></li>
             <li><a href="gaming.php"><i class = "fa fa-gamepad"></i> Gaming Consoles</a></li>
             <li><a href="laptop.php"><i class = "fa fa-laptop"></i> Laptop</a></li>
             <li><a href="tv.php"><i class = "fa fa-tv"></i> Television</a></li>
             <li><a href="desktop.php"><i class = "fa fa-desktop"></i> Desktop</a></li>
             <li><a href="fridge.php">Fridge</a></li>
          </ul>
      </li>
          
         <li> <a href="jobapplication.php" target="_blank"><i class = "fa fa-pencil"></i> JOB APPLICATION</a></li>     

          <li><a href = ""><i class = "fa fa-key"></i> LOG IN</a>
        <ul>
          <li><a href="index1.php"><i class = "fa fa-sign-in"></i> As Admin</a></a></li>
          <li><a href="index2.php"><i class = "fa fa-sign-in"></i> As Repairman</a></li>
        </ul>
          </li>

   </ul>  
  </nav>  
<br><br><br><br><br>
<form action="updb.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" style="width: 1125px;height: 110px;" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>