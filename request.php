
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

     <li 
       class="active">
       <a data-toggle="pill" href="#home1">Request Allocation</a>
     </li>

     <li 
       class="">
       <a data-toggle="pill" href="#home">Mobile Phone</a>
     </li>

     <li 
     class=""><a data-toggle="pill" href="#menu1">Laptop</a>
     </li>

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
  
    <div class="tab-content">

<div id="home1" class="tab-pane fade in active">
<br><br>
  <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

            $sql = "SELECT * FROM allocation";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>CUSTOMER NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>EMPLOYEE NAME</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>EMPLOYEE ID</th>";
                            echo "<th>EMPLOYEE PHONENUMBER</th>";
                            
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";  
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['sname'] .$row['lname'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['id'] . "</td>";
                                 echo "<td>" . $row['pnumber'] . "</td>";
                                
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


      <div id="home" class="tab-pane fade6">
<br><br>
<?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}

            $sql = "SELECT * FROM mobile";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>PHONE NAME</th>";
                            echo "<th>PHONE TYPE</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['dname'] . "</td>";
                                 echo "<td>" . $row['dtype'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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

    <div id="menu1" class="tab-pane fade1">

<br><br>
    <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
            $sql = "SELECT * FROM laptop";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>LAPTOP NAME</th>";
                            echo "<th>SOFTWARE VERSION</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['lpname'] . "</td>";
                                 echo "<td>" . $row['sversion'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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
  
    <div id="menu2" class="tab-pane fade2">
<br><br>
<?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
            $sql = "SELECT * FROM mobile";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>PHONE NAME</th>";
                            echo "<th>PHONE TYPE</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['dname'] . "</td>";
                                 echo "<td>" . $row['dtype'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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

    <div id="menu3" class="tab-pane fade3">
  <br><br>
<?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
            $sql = "SELECT * FROM desktop";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>DESKTOP NAME</th>";
                            echo "<th>DESKTOP TYPE</th>";
                            echo "<th>SOFTWARE VERSION</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                              
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['dname'] . "</td>";
                                 echo "<td>" . $row['dtype'] . "</td>";
                                 echo "<td>" . $row['sversion'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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

    <div id="menu4" class="tab-pane fade4">
  <br><br> 
<?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
            $sql = "SELECT * FROM gaming";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>CONSOLE TYPE</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                                 
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['ctype'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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

    <div id="menu5" class="tab-pane fade5">
<br><br>
    <?php
            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
            $sql = "SELECT * FROM fridge";
            if($result = mysqli_query($link, $sql))
        {
                       if(mysqli_num_rows($result) > 0)
           {
                          echo "<table border=";">";
                            echo "<tr>";
                            echo "<th>NAME</th>";
                            echo "<th>PHONE NUMBER</th>";
                            echo "<th>ADDRESS</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>FRIDGE NAME</th>";
                            echo "<th>FRIDGE TYPE</th>";
                            echo "<th>PROBLEM</th>";
                            echo "<th>PROBLEM DESCRIPTION</th>";
                          echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                {
                             echo "<tr>";
                                 echo "<td>" . $row['name'] . "</td>";
                                 echo "<td>" . $row['phonenumber'] . "</td>";
                                 echo "<td>" . $row['address'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 
                                 echo "<td>" . $row['fname'] . "</td>";
                                 echo "<td>" . $row['ftype'] . "</td>";
                                 echo "<td>" . $row['problem'] . "</td>";
                                 echo "<td>" . $row['pdescription'] . "</td>";

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


</div>



</body>
</html>