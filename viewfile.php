<html>
<head></head>
<body>



<table width="90%" border="1">
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
        <td><a href="forms/<?php echo $row['file'] ?>" target="uploads/".basement($_FILE['file']['name']);>view file</a></td>
        </tr>
    <?php
 }
 ?>
</table>
</body>
</hmtl>