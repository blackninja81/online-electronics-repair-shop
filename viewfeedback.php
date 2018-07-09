<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
      jQuery(function($){
        $('#search-trigger').click(function(){
          $('#search-input').toggleClass('search-input-open');
        });

        $(document).click(function(e){
          if(!$(e.target).closest('.ngen-search-form').length){
            $('#search-input').removeClass('search-input-open');
          }
        })
      });
    </script>
  
    <head lang="en">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

        <meta charset = "UTF-8">
        <title>ONLINE REPAIR SHOP</title>  
   

<body>     
      <nav>
  <ul>
 
      <li><a href = "request.php">REQUESTS</a></li>
      <li><a href = "adminapplications.php">JOB APLLICATIONS</a></li>
      <li><a href = "employees.php">EMPLOYEES</a></li>
      <li><a href = "viewcontacts.php">FEEDBACK</a></li>
      <li><a href = "logout.php">LOG OUT</a></li>
        
</ul>  
</nav>      
   <br><br> <br> <br>  


   <div class="vidal">       
<?php

$link = mysqli_connect("localhost", "root", "", "online electronic shop");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM contacts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>E-MAIL</th>";
                echo "<th>PHONE NUMBER</th>";
                echo "<th>FEEDBACK</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pnumber'] . "</td>";
                echo "<td>" . $row['info'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{

        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</div>
All Rights Reserved (2017)

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    

$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 3000);
       return false;
      }
    }
  });
});

       </script> 
    </body>
</html>