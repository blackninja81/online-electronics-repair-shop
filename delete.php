
      <?php

            $link = mysqli_connect("localhost", "root", "", "online electronic shop"); 
            // Check connection
            if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());}
           
            $sql = "DELETE FROM employeedtails WHERE 
            id='$_GET[ID]'";
           
            if (mysqli_query($link,$sql))
              header("refresh:1; url=employees.php");
            else
              echo "Not deleted";

                  ?>