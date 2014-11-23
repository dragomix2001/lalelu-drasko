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

          <script type="text/javascript" charset="utf8" src="/js/contactAdmin.js"></script>
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
                <li><a href="/employee.php">Employee</a></li>
                  <li><a href="/index4.php">Photo</a></li>
                  <li class="active"><a href="/ContactAdmin.php">Contact</a></li>
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
        <h1>Contact <small>welcome Admin</small></h1>
    </div>


      <?php
        function ucitaj(){     
        require('connConfig.php');
       
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
            $result = mysqli_query($con,"SELECT * FROM contact");
            //"<select id=\"ID_FunkcijeZadatka\" name=\"ID_FunkcijeZadatka\" style=\"width:775px;\">"
            echo "<div class=\"table-responsive\">";
            echo "<table id=\"tabela\" class=\"display dataTable table table-bordered table-responsive\">
            <thead>
                  <tr>
                  <th>City</th>
                  <th>Street</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Longitude[x]</th>
                  <th>Latitude[y]</th> 
                  <th></th>                 
                  </tr>
            </thead>"; 
                  echo "<tbody>";

            while($row = mysqli_fetch_array($result)) {
                
                echo "<tr>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['Street'] . "</td>"; 
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";               
                echo "<td>" . $row['Lon'] . "</td>";
                echo "<td>" . $row['Lat'] . "</td>";
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
    <h3>Insert address</h3>   
        <div class="form" role="form">  
            <form method="post" enctype="multipart/form-data" class="jumbotron form-group" action="insertContact.php" >
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <fieldset>
                  <legend>City: </legend>
                <input type="text" name="city" id="city" class="form-control" required/>    
                <legend>Street: </legend>
                <input type="text" name="street" id="street" class="form-control" required/>
                <legend>Phone: </legend>
                <input type="tel" name="phone" id="phone" class="form-control" required/>              
                <legend>Email: </legend>
                <input type="email" name="email" id="email" class="form-control" required/>
                <br>
                <br>
                    <a href="https://www.google.rs/maps?source=tldso">Google Maps</a>
                <br>
                <br>
                <legend>Longitude[x]: </legend>
                <input type="text" name="long" id="long" class="form-control" required/>
                <legend>Latitude[y]: </legend>
                <input type="text" name="lati" id="lati" class="form-control" required/>
                
           
            <p id="btnSubNew">
            <input type="submit" id="btn_Upload" class="btn btn-primary btn-lg" value="Save"/>
            </p>
            </fieldset>  
                <input id="flag" name="flag" type="text" value="0" hidden/>  
                <input id="id" name="id" type="text" hidden/>       
        </form>
        </div>
    </div>
</div>        
    </body>
</html>

