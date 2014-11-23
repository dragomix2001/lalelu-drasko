<?php
session_start();
//echo $_SESSION["myusername"];
if($_SESSION["myusername"] != "drasko"){
	header("Location: /partial/admin.php");
    //echo "<script>window.location.assign('/partial/admin.php')</script>";
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/a5734b29083/integration/jqueryui/dataTables.jqueryui.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.js">\x3C/script>')</script>
        <script src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/jqueryui/dataTables.jqueryui.js"></script>
         <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <script type="text/javascript" charset="utf8" src="/js/employee.js"></script>
        <script src="../js/inputFile.js"></script>
        <meta charset="utf-8" />
        <title></title>

<style type="text/css">
             /*za unos file*/
    .container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
/*legend {
    color: #36A0FF;
}*/
    #btnSubNew {
        margin-top: 5px;
    }
    /*kraj za unos*/
    .del:hover {
        cursor: pointer;
    }
    .edit:hover {
        cursor: pointer;
    } 
    .logo {
   
    width: 150px;
    text-align: center;
    /*padding-top: 17px;
    margin-right: 50px;*/
    background: url(../img/Logo.jpg) no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
    #id, #flag {
        display: none;
    }     
        </style>
    </head>
    <body>
         <!--nav-->
      <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="/index3.php">News</a></li>
                <li class="active"><a href="/employee.php">Employee</a></li>
                <li><a href="/index4.php">Photo</a></li>
                   <li><a href="/ContactAdmin.php">Contact</a></li>
                <li><a href="/AboutUsAdm.php">AboutUs</a></li>
               
              </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../logout.php">Log out</a></li>
                </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
         <!--kraj nav-->
    <div class="container">
    <div class="page-header">
        <h1>Employee <small>welcome Admin</small></h1>
    </div>

      <?php
        function ucitaj(){     
        require('connConfig.php');
        
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
            $result = mysqli_query($con,"SELECT * FROM employee");
            //"<select id=\"ID_FunkcijeZadatka\" name=\"ID_FunkcijeZadatka\" style=\"width:775px;\">"
            echo "<div class=\"table-responsive\">";
            echo "<table id=\"tabelaEMP\" class=\"display dataTable table table-bordered table-responsive\">
            <thead>
                  <tr>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Phone</th>
                  <th>E-mail</th>
                  <th>Photo</th>
                  <th></th>
                  </tr>
            </thead>"; 
                  echo "<tbody>";

            while($row = mysqli_fetch_array($result)) {
                
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";               
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";                
                if($row['Photo']!=NULL)
                    echo "<td><i class=\"fa fa-camera\"></i></td>";
                else
                    echo "<td><i class=\"fa fa-times\"></i></td>";
             
                echo "<td><i class=\"fa fa-trash-o del\" id=". $row['ID'] . "></i> &nbsp&nbsp&nbsp <i class=\"fa fa-pencil-square-o edit\" id=". $row['ID'] . "></i></td>";
                echo "</tr>"; 
                }

                echo "</tbody>";
                echo "</table>";
                echo "</div>";

            }
            mysqli_close($con);
        }
        ucitaj(); 
?>
</div>   
<div class="container">
    <div class="row"> 
    <h3>Insert employee</h3>   
        <div class="form" role="form">  
            <form method="post" enctype="multipart/form-data" class="jumbotron form-group" action="insertEmployee.php" >
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <fieldset>
                  <legend>Name: </legend>
                <input type="text" id="name" name="name" class="form-control" required/>
                <!--Prezime:
                <input type="text" name="" required/>-->
                <legend>Title: </legend>
                <input type="text" id="title" name="title" class="form-control" required/>
               <legend>Email: </legend>
                <input type="email" id="email" name="email" class="form-control" required/>
               <legend>Phone: </legend>
                <input type="tel" id="phone" name="phone" class="form-control" required/>
            <legend>Image Upload</legend>
            <div class="input-group image-preview">
                <input type="text" name="photo" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <div class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/> <!-- rename it -->
                    </div>
                    <!--<p class="help-block">Example block-level help text here.</p>-->
                </div>
            </div><!-- /input-group image-preview [TO HERE]--> 
            <p id="btnSubNew">
            <input type="submit" id="btn_Upload" class="btn btn-primary btn-lg" value="Save"/>
            </p>
            </fieldset>  
                <input id="flag" name="flag" type="text" value="0"/>  
                <input id="id" name="id" type="text"/>      
        </form>
        </div>
    </div>
</div>        <div class="container">

</div>
    </body>
</html>

