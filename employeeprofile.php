<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index2.php"); // Redirecting To Home Page
}

?>
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
     <nav style="position: fixed;margin-left: 70px;">
       
       <a href = "#">MY  INFORMATION</a>
       
       <div style="float: right;">
       <a href = "logout.php">LOG OUT</a>
       </div>       
    </nav>  
    <br><br><br><br><br>    

<!--navigation bar on page-->
<div class="container">  
   <ul class="nav nav-pills">

     <li 
       class="active">
       <a data-toggle="pill" href="#home1">Requests</a>
     </li>

     <li 
       class="">
       <a data-toggle="pill" href="#home">Profile Details</a>

     </li>

     <li 
     class=""><a data-toggle="pill" href="#menu1">Rating</a>
     </li>
<!--
     <li 
     class=""><a data-toggle="pill" href="#menu2">tv</a>
     </li>
     
     <li 
     class=""><a data-toggle="pill" href="#menu3">Desktop</a>
     </li>

     <li 
     class=""><a data-toggle="pill" href="#menu4">Gaming console</a>
     </li>

     <li>
     <a data-toggle="pill" href="#menu5">Fridge</a>
    </li>    
   </ul>
  -->
    <div class="tab-content">

<div id="home1" class="tab-pane fade in active">
<br><br><br><br>

  <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

            $sql = "SELECT * FROM allocation WHERE email ='$login_session' " ;
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>CUSTOMER NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            
                            echo "<th>PROBLEM</th>";
                            
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";  
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 
                                 echo "<td>" . $row['problem'] . "</td>";
                                 
                                 
                              echo "</tr>";
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

</div>
<br><br>

      <div id="home" class="tab-pane fade6">
<br><br>
<?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

            $sql = "SELECT * FROM employeedtails WHERE email ='$login_session' " ;
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>DOB</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>EMAIL</th>";
                            echo "<th>ID</th>";
                            echo "<th>KRA PIN</th>";
                            

                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['sname'] . $row['lname'] . "</td>";  
                                 echo "<td>" . $row['dob'] . "</td>";
                                 echo "<td>" . $row['pnumber'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['id'] . "</td>";
                                 echo "<td>" . $row['krapin'] . "</td>";

                                 
                                 
                              echo "</tr>";
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
<br><br><br>
      </div>

    <div id="menu1" class="tab-pane fade1">
    <br><br><br>
    <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }

            $sql = "SELECT * FROM rating";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>REPAIRMAN NAME</th>";
                            echo "<th>RATING</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";  
                                 echo "<td>" . $row['rating'] . "</td>";

                              echo "</tr>";
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

<br><br>

    </div>
  
    <div id="menu2" class="tab-pane fade2">
<br><br>

    </div>

    <div id="menu3" class="tab-pane fade3">
  <br><br>

    </div>

    <div id="menu4" class="tab-pane fade4">
  <br><br> 

    </div>

    <div id="menu5" class="tab-pane fade5">
<br><br>
    
    </div>


</div>



</body>
</html>