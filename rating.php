<?php
if(isset($_POST['rating']))
{
$rating = $_POST['rating'];
/*  Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'online electronic shop';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$sql1 = "INSERT into rating(name,phonenumber1,rating) 
 
VALUES (
'{$mysqli->real_escape_string($_POST['name'])}',
'{$mysqli->real_escape_string($_POST['phonenumber'])}',
'{$mysqli->real_escape_string($_POST['rating'])}')";

$insert = $mysqli->query($sql1);
    
if ($insert)
{
 Header("Location: submitrating.php");
}else{
Header("Location: rating.php");

}     
 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee ratings</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="rating.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">

	form{
		width: 70%;
		height: 100%;
		font-size: 25px;
		margin:auto; 
	}	
	label,input{
		display: block;
		width: 100%;
		text-align: center;
	}
	ul{
		text-align: center;
		padding: 0;
		margin: 0;
	}
	ul li{
		list-style-type: none;
		display: inline-block;
		color: white;
		text-shadow: 2px 2px 7px grey;
		font-size: 25px !important;
		margin: 10px;
	}
	ul li:hover{
		color: yellow;
	}

	ul li.active,ul li.secondary-active{
		color: yellow;
	}
	input[type = "radio"]{
          display:none
	}
	</style>
</head>


<body>
<nav>
	<a href="mainmenu.php">Home</a>
</nav>
<br><br><br>

<h1 style="text-align: center;">Rate A Repairman</h1>
<br>
<form action="rating.php" method="post">
<br>
    <label>Repairman Name</label>
	<input type="text" name="name" placeholder="Employee Name" style="padding: 10px; ">
	<br><br>
	<label>Repaiman Phone Number</label>
	<input type="text" name="phonenumber" placeholder="Employee Phone Number" style="padding: 10px; ">
<br><br>
<label>Rate</label>
<ul>	
	<li>
	<label for="rating_1"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="rating" placeholder="" value="1" id="rating_1">
	</li>

	<li>
	<label for="rating_2"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="rating" placeholder="" value="2" id="rating_2">
	</li>

	<li>
	<label for="rating_3"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="rating" placeholder="" value="3" id="rating_3">
	</li>

	<li>
	<label for="rating_4"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="rating" placeholder="" value="4" id="rating_4">
	</li>

	<li>
	<label for="rating_5"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="rating" placeholder="" value="5" id="rating_5">
	</li>

</ul>
  <button style="width: 50%; height: 20%; text-align: center; margin-left: 250px; margin-top: 50px; padding-bottom: 20px;">

  <input style="color: black; background-color: ;border-style: none;margin-top: 15px;width: 100%;height: 40%;" type="submit" value="SUBMIT" />
  </button>
</form>

<script>
	$('li').on('click',function(){
	$('li').removeClass('active');
	$('li').removeClass('secondary-active');	
	$(this).addClass('active');
	$(this).prevAll().addClass("secondary-active");	 
	})
</script>
</body>
</html>