
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Job Applications</title>
      <link rel="icon" type="image/png" href="img/tool.jpg">
    <!--links to all style sheets and scripts--> 

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" type="text/css" href="new.css"> 
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
       <link rel="stylesheet" href="respond.css">    
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
       <link rel="stylesheet" type="text/css" href="employees1.css">  
       <link rel="stylesheet" href="respond.css">
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">       
       
</head>
<body>
  <!--navigation bar-->
     <nav>

       <a href = "request.php">REQUESTS</a>
       <a href = "adminapplications.php">JOB APLLICATIONS</a>
       <a href = "employees.php">EMPLOYEES</a>
       <a href = "viewcontacts.php">FEEDBACK</a>
       <a href = "rating2.php">RATINGS</a>
       <a href = "logout.php">LOG OUT</a>        
    </nav>  
    <br>     
<!--navigation bar on page-->
<div class="container">  
   <ul class="nav nav-pills">
     <li class="active"><a data-toggle="pill" href="#home">job applications</a></li>
     <li>
     <a data-toggle="pill" href="#menu1">documents</a>
    </li>    
   </ul>
  
<div class="tab-content">

  <!--handles serch,retrival and save of data into employees table-->

  <div id="home" class="tab-pane fade in active">
    <br>
    <br>
    <h1>Search Job Application Records</h1>
<br>
    <!--form for hundling the search qeury-->

    <div class="sach1">
      <section class="webdesigntuts-workshop">
        <form action="adminapplications.php" method="post">       
            <input type="search" name="search2" placeholder="Search">         
            <button>Search</button>
        </form>
        <br>
        <br>
        <br>
        
<h2 style="text-align:center">Results</h2>

<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "online electronic shop");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
   $search1 = $mysqli->real_escape_string($_POST['search2']);
   $sql = "SELECT * FROM japplications where id = '$search1'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>EMAIL</th>";
                echo "<th>PHONE NUMBER</th>";
                echo "<th>WORK ADD</th>";
                echo "<th>WORKXP</th>";
                echo "<th>SPECIALIZE</th>";
                echo "<th>ID</th>";
                echo "<th>KRAPIN</th>";
                echo "<th>CRIME</th>";
                echo "<th>CRIMEINFO</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sname'] . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pnumber'] . "</td>";
                echo "<td>" . $row['waddress'] . "</td>";
                echo "<td>" . $row['workxp'] . "</td>";
                echo "<td>" . $row['specialize'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['krapin'] . "</td>";
                echo "<td>" . $row['crime'] . "</td>";
                echo "<td>" . $row['crimeinfo'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
      ?>
      <div style="text-align: center;font-size: 23px;">
      <?php
        echo "No records matching your query were found.";
        ?>
        </div>
        <?php
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<br><br>
</section>
    </div>

  </div>

    <div id="menu1" class="tab-pane fade">
<br>
<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
<?php

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'online electronic shop') or die('Error selecting database : ' . mysql_error());

 $sql="SELECT * FROM japplicationform";
 $result_set=mysqli_query($db,$sql);

 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="uploads/".basement($_FILE['file']['name']);>view file</a></td>
        </tr>
    <?php
 }
 ?>
</table>


    </div>
  </div>
</div>



</body>
</html>