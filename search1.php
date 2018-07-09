<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>

<body>
 <nav>

  <a onclick="initscroll(); return false;" href = "mainmenu.php">HOME</a> 

    </nav>
       
</body>
</html>
<?php
echo "<br/><br/><h2>Search Results</h2>";
?>

<?php

require_once 'db.php';

       if(isset($_GET['keywords']))
    {
        $keywords = $mysqli->real_escape_string($_GET['keywords']);

          $query = $mysqli->query("SELECT id,fullname,job_type, phonenumber,areaofoperation FROM jobapplication 
            WHERE id_number LIKE '%{$keywords}%'");
?>

   <div class="result-count">
      found <?php echo $query->num_rows; ?> results.
  </div>

<?php

      if($query->num_rows)
 {
     while ($r = $query->fetch_object()) {
    # $id = $r['id'];
   #  $m = '../db_images/'. $image_name; ?>


   <div class="Result">

 <a href="user3.php?id=<?php echo $id;?>"><img src="img width='400' height='300' src='images/3.jpg' alt='Default Profile Pic'">
      <?php echo $r->fullname; ?> 
      <?php echo $r->job_type; ?> 
      <?php echo $r->phonenumber; ?> 
        
      </a>
   </div>
 <?php 
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
<style type="text/css">
  body{
    height: 100%;
    width: 100%;
  }


</style>

</head>
<body>

</body>
</html>