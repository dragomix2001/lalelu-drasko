<?php
  if(isset($_POST['text'])){

    require('connConfig.php');
    

    $text = mysqli_real_escape_string($con,$_POST['text']);

    $textSRB = mysqli_real_escape_string($con,$_POST['textSRB']);
    $textDE = mysqli_real_escape_string($con,$_POST['textDE']);


    $flag =mysqli_real_escape_string($con,$_POST['flag']);
    $id =mysqli_real_escape_string($con,$_POST['id']);


  

    if($flag==0){ //onda radimo insert
        if(!$insert=mysqli_query($con,"INSERT INTO aboutus (Text,Text_SRB,Text_DE) VALUES ('$text','$textSRB','$textDE')")){

                echo mysql_error();
          }
        else{
              echo "<script>window.location.assign('AboutUsAdm.php')</script>";
            }

    } 
    else{ //ovde radimo update
    if(isset($text)){
        if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text',Text_SRB='$textSRB',Text_DE='$textDE' WHERE ID='$id'")){

                    echo mysql_error();
              }
            else{
                  echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }
          else{

               if(!$update=mysqli_query($con,"UPDATE aboutus SET Text='$text',Text_SRB='$textSRB',Text_DE='$textDE' WHERE ID='$id'")){

                    echo mysql_error();
              }
            else{
                 echo "<script>window.location.assign('AboutUsAdm.php')</script>";
                }
          }


      }

    
    mysqli_close($con); 

      } 
  

?>
