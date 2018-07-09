
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Employees</title>
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
       <link rel="stylesheet" type="text/css" href="employee.css">  
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
     <li class="active"><a data-toggle="pill" href="#home">Add New Employees</a></li>
     <li>
     <a data-toggle="pill" href="#menu1">View current Employee List</a>
    </li>    
   </ul>
  
<div class="tab-content">

  <!--handles serch,retrival and save of data into employees table-->

  <div id="home" class="tab-pane fade in active">
    <br>
    <br>
    <h1>Search ID Number to retrieve information</h1>
    <br>
    <br>
    <!--form for hundling the search qeury-->

    <div class="sach">
      <section class="webdesigntuts-workshop">
        <form action="employees.php" method="post">       
            <input type="search" name="search" placeholder="Enter ID Number">         
            <button>Search</button>
        </form>
</section>

<?php
error_reporting(0);

if(! empty($_POST))
{

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$output = NULL;
$search1 = $mysqli->real_escape_string($_POST['search']);

//query the database
$query = $mysqli->query("SELECT * FROM japplications where id = '$search1'") or die("cant search");

if($query->num_rows > 0)
  {
while ($rows = $query -> fetch_assoc()) 
 {
  $sname = $rows['sname'];
  $lname = $rows['lname'];
  $pnumber = $rows['pnumber'];
  $email = $rows['email'];
  $dob = $rows['dob'];
  $waddress = $rows['waddress'];
  $haddress = $rows['haddress'];
  $workxp = $rows['workxp'];
  $specialize = $rows['specialize'];
  $id = $rows['id'];
  $krapin = $rows['krapin'];
  $gender = $rows['gender'];
  $getinfo = $rows['getinfo'];
  $crime = $rows['crime'];
  $pdescription = $rows['pdescription'];
 
 }

  }
}
?>

     <!--output data from database to page-->
<br><br><br><br>

<div class="field">
<form method="get" action="employees.php">

  Surname:        <br><input type="text" placeholder="Surname" name="sname" value="<?php echo htmlspecialchars($sname); ?>"><br><br>

  First Name:     <br><input type="text" placeholder="First Name" name="email" value="<?php echo htmlspecialchars($lname); ?>"><br><br>

  Phone Number: <br><input type="text" placeholder="Phone Number" name="pnumber" value="<?php echo htmlspecialchars($pnumber);?>"><br><br>

  Email:       <br><input type="text" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

    DOB:         <br><input type="text" placeholder="Date of Birth" name="Date of Birth" value="<?php echo htmlspecialchars($dob); ?>"><br><br>

  Work address:        <br><input type="text" placeholder="Work Address" name="Work Address" value="<?php echo htmlspecialchars($waddress); ?>"><br><br>

</div>

 <div class="field1">

<form method="get" action="employees.php">

  Home Address: <br><input type="text" placeholder="Home Address" name="haddress" value="<?php echo htmlspecialchars($haddress);?>"><br><br>

  specialize:<br><input type="text" placeholder="Specialization" name="specialize" value="<?php echo htmlspecialchars($specialize); ?>"><br><br>

  ID NO: <br><input type="text" placeholder="ID Number" name="idno" value="<?php echo htmlspecialchars($id); ?>"><br><br>

  KRA PIN:  <br><input type="text" placeholder="Kra Pin" name="krapin" value="<?php echo htmlspecialchars($krapin); ?>"><br><br>

  Crime:   <br><input type="text" placeholder="Crime" name="crime" value="<?php echo htmlspecialchars($crime); ?>"><br><br>
  
  Crime Information:  <br><input type="text" placeholder="Crime Explanation" name="pdescription" value="<?php echo htmlspecialchars($pdescription); ?>"><br><br>

  
  <br><br>
       </div>
</form>

<?php
if(! empty($_POST))
{


$sqlz =  "INSERT into employeedtails (sname,lname,pnumber,email,dob,waddress,haddress,specialize,id,krapin,crime,pdescription) 

VALUES ('$sname', '$lname', '$pnumber', '$email', '$dob' , '$waddress' , '$haddress' , '$specialize' , '$id' , '$krapin' , '$crime' , '$pdescription' )";

$insertz = $mysqli->query($sqlz);
}

?>

      <!--end of form query-->
       <br><br>
       <br><br>
       <br><br>
       <!--button to savee data into employees table-->
       <button class="w3-btn w3-ripple w3-black" type="submit" name="save">Save Records</button>
<br>
<br>
<br>
    </div>

  </div>

    <div id="menu1" class="tab-pane fade">
         <br><br>

      <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

            $sql = "SELECT * FROM employeedtails";

            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                        while($row = mysqli_fetch_array($result))
                {
                  ?>

<div class="card">

  <img src="img/elec.png" alt="" style="height: 20%; width:100%">
  <h1><?php echo $row['lname'] ?> <?php echo $row['sname'] ?></h1>

  <p class="title"><?php echo $row['email'] ?></p>
  <p>+254<?php echo $row['pnumber'] ?></p>
  <p><?php echo $row['id'] ?></p>
  <p><?php echo $row['waddress'] ?></p>
  <p><?php echo $row['specialize'] ?></p>
<br>
 
<button>
<?php
     echo"<a href=delete.php?ID=" .$row['id']. "> Delete </a>"
?>
</button>
 <br><br><br>
</div>
                             <tr>
                                 <td><?php $row['lname'] ?><p> </p><?php $row['sname'] ?></td>
                                 <td><?php $row['email'] ?></td>
                                 <td><?php $row['pnumber'] ?></td>
                                 <td><?php $row['id'] ?></td>
                                 

                              </tr>

                              <?php
                }
                              echo "</table>";
                              // Free result set
                              mysqli_free_result($result);
                 }else{
                              echo "No records matching your query were found.";
                      }

                      }else{
                             echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
 
                             // Close connection
                             mysqli_close($link);
      ?>

      <br><br><br><br><br>

    </div>
  </div>
</div>



</body>
</html>