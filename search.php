<?php
require_once 'db.php';
?>

<html>
    <head>
        <title>SEARCH</title>
        <style type="text/css">
            body{
                background-image: url();
                background-size: cover;
            }
            #search{
                width: 90%;
                padding: 10px;
                border: 1px solid #333;
                margin-left: 20px;
                
            }
            #submit{
                padding: 10px;
                background: orange;
                height: 40px;
                width: 60px;
            }
.login{
              float: right;
            }

            
            </style>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="search.css"/>
    </head>
    <body>
         
      <nav>

          <a href = "mainmenu.php">HOME</a>
         <div class="login">      
          <a href="index.php">LOG IN</a>
          <a href = "index.php">SIGN UP</a>
</div>


      </nav>  
<br/>
<br/>
<br/>
      <form action ="search1.php" method = "get" >
<label>
<input type = "text" name="keywords" placeholder ="search">
</label>

<input type = "submit" value ="search">
</form>


        <div class="content"></div>
        </br>
         </br>
          </br>
          
       

           
    </body>
</html>
