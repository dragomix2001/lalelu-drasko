<?php
  
 require('connConfig.php');

        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
             $id=mysqli_real_escape_string($con,$_POST['Id']);
             $result = mysqli_query($con,"DELETE FROM aboutus WHERE ID=" . $id);
             if($result)
                echo 1;
              else
                echo "Error in db";

         }
         mysqli_close($con); 



?>