<?php
   require('connConfig.php');
   //$con=mysqli_connect("localhost","root","","lalalulu");
   
    $file = $_FILES['photo']['tmp_name'];

 /* if(isset($_POST['title'])){*/
    $target_dir = "partial/uploads/";
    $target_dir = $target_dir . basename( $_FILES["photo"]["name"]);
    $uploadOk=1;

    // Check if file already exists
    if (file_exists($target_dir . $_FILES["photo"]["name"])) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size       
    
    //$title = mysqli_real_escape_string($con,$_POST['title']);
    //$content =mysqli_real_escape_string($con,$_POST['content']);
    $image=NULL;
    //echo $image;
    if($_FILES['photo']['name']!=NULL){        
        $image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $image_name=addslashes($_FILES['photo']['name']);
        $image_size=getimagesize($_FILES['photo']['tmp_name']);
        //echo $con;

    }                
        if(!$insert=mysqli_query($con,"INSERT INTO photos (photo,path) VALUES ('$image', '$target_dir')")){
            echo mysql_error();
        }
        else{
            //echo "asdasddafdsf";
          echo "<script>window.location.assign('index4.php')</script>";
        }
    mysqli_close($con);   /*}*/

    /*if ($image_size > 500000000000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }*/
    if ($uploadOk==0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else { 
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir)) {
                //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                } else {
                echo "Sorry, there was an error uploading your file.";
        }
   }  

?> 