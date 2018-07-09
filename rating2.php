<!DOCTYPE html>
<html>
<head>
  <title>Ratings</title>
  <link rel="stylesheet" type="text/css" href="employee.css">
</head>
<body>
  <nav>

       <a href = "request.php">REQUESTS</a>
       <a href = "adminapplications.php">JOB APLLICATIONS</a>
       <a href = "employees.php">EMPLOYEES</a>
       <a href = "viewcontacts.php">FEEDBACK</a>
       <a href = "rating2.php">RATINGS</a>
       <a href = "logout.php">LOG OUT</a>        
    </nav>  
   
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