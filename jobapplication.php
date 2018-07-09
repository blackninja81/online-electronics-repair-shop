

<!DOCTYPE html>
<html>
<head>
  <title>Job Application</title>
  <link rel="icon" type="image/png" href="img/tool.jpg">
   
       
        <link rel="stylesheet" type="text/css" href="new.css"> 
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="mobile.css">
        <link rel="stylesheet" href="device.css">
        <link rel="stylesheet" href="respond.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">       
       
</head>
<body>
   

      <nav class="menu animated fadeInRightBig">
  <ul>
          <li><a href ="mainmenu.php#home">  <i class = "fa fa-home"></i> HOME</a></li>
          <li><a href =mainmenu.php"#about"> <i class = "fa fa-user"></i> ABOUT US</a></li>
          <li><a href="mainmenu.php#contacts"><i class = "fa fa-envelope"></i> CONTACT US</a></li> 
          <li><a href="">         <i class = "fa fa-device"></i> DEVICES</a>

        <ul>
           <li><a href="mobile.php"><i class = "fa fa-mobile"></i> Mobile Phone</a></li>
           <li><a href="gaming.php"><i class = "fa fa-gamepad"></i> Gaming Consoles</a></li>
           <li><a href="laptop.php"><i class = "fa fa-laptop"></i> Laptop</a></li>
           <li><a href="tv.php"><i class = "fa fa-tv"></i> Television</a></li>
           <li><a href="desktop.php"><i class = "fa fa-desktop"></i> Desktop</a></li>
           <li><a href="fridge.php">Fridge</a></li>
         </ul>
      </li>
          
</ul>  
      </nav>  


      <div id ="home" class="text">
<div class="title fadeInLeftBig">

          <h1><i class = "fa fa-pencil"></i>Job Appication</h1>
</div>
</div>

      
  
 <div class="contac">


<form id="contact" method="post" action="japplicationdb.php">

<div class="userinfo">
<h1>Enter Your Information</h1>
<br>
  <fieldset>
    <h3>Your SurName</h3>
    <input placeholder="Your Surname" type="text" name="sname"  required >
    </fieldset>

    <fieldset>
    <h3>Your First Name</h3>
    <input placeholder="Your Firstname" type="text" name="lname"  required >
    </fieldset>
  
    <fieldset>
     <h3>Phone Number(+254)</h3>
     <input placeholder="Your Phone Number" name="phonenumber" type="text" required >
    </fieldset>

    <fieldset>
    <h3>Email</h3>
      <input placeholder="Your Email" name="email" type="email" ><br>  
      </fieldset>
          <fieldset>
    <h3>Date Of Birth</h3>
    <fieldset>
      <div id="" class="calendar">
<input type="date" id="dob" name="dob">

</div>
</fieldset>

    <h3>Enter your work address</h3>
    <fieldset>
    <input placeholder="Work Address" type="text" name="workaddress" required >
    </fieldset>
   
   <h3>Enter your home address</h3>
    <fieldset>
    <input placeholder="Home Address" type="text" name="homeaddress" required >
    </fieldset>
       <h3>What is your work expirience</h3>
    <fieldset>
    <input placeholder="Work expirience" type="text" name="workxp" required>
    </fieldset>

</div>

<div class="deviceinfo">
<h1></h1>
<br>
  <fieldset>
    <h3>What electronic device do you specialize</h3><fieldset>
    <input placeholder="Specialization" type="text" name="specialize" required>
    </fieldset>

    <h3>Enter your ID Number</h3>
    <fieldset>
    <input placeholder="ID Number" type="text" name="idno">
    </fieldset>


    <h3>Enter KRA pin</h3>
    <fieldset>
    <input placeholder="KRA pin" type="text" name="kra">
    </fieldset>
  <h3>Gender</h3>
  <fieldset>
      <div id="select" class="styled-select slate">
      <select name="gender">
  <option>Choose your gender</option>
  <option value="Male">Male</option>
  <option value="Male">Female</option>
</select>
</div>
</fieldset>

  <fieldset>

  <h3>How did you learn about us</h3>
      <div id="select" class="styled-select slate">
      <select name="getinfo">
  <option>How did you learn about us</option>
  <option value="Newspaper">Newspaper</option>
  <option value="Freind">Freind</option>
  <option value="Website">Website</option>
  <option value="Advertisement">Advertisment</option>
  <option value="Other">Other</option>
</select>
</div>
</fieldset>

    <h3>Have you ever been convicted of a crime?</h3>
    <fieldset>
    <input placeholder="Yes or No" type="text" name="crimerecord" required>
    </fieldset>

      <h3>If yes Please elaborate</h3>
       <fieldset>
      <textarea placeholder="Describe the problem" name="pdescription"></textarea>
    </fieldset>   
   <br>

<br><br><br> 
<fieldset>
      <button href="mainmenu.php" name="submit" type="submit" id="contact-submit" data-submit="...Sending">
      <h3>Submit</h3>
      </button>

</fieldset>
  </div>

</form>
</body>
</html>