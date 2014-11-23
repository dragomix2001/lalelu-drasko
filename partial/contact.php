<?php
    require('../lang/lan_en.php');
    require('../lang/lan_srb.php');
    require('../lang/lan_ger.php');

    $lan = isset($_GET['lan']) ? $_GET['lan'] : 'EN';
    switch ($lan) {
    case 'SRB':
    $TEXT = $TEXT_SRB;
    break;
    case 'EN':
    $TEXT = $TEXT_EN;
    break;
    case 'GER':
    $TEXT = $TEXT_GER;
    break;
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> <?php echo($TEXT['contact_title']); ?></title>
            <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">
         <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
       <style type="text/css">
           html { 
  background: url(../img/bg1.jpg) no-repeat center center fixed; 
  padding-top: 50px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
       </style> 

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand nav-link" href="#top">Lalelu kindergarden</a>-->
            <a class="navbar-brand logo" href="#"></a>
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a  href="/index.php?lan=<?php echo $lan?>"><?php echo($TEXT['home']); ?></a></li>
                <li><a href="/partial/aboutUs.php?lan=<?php echo $lan?>"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li><a href="/partial/photo.php?lan=<?php echo $lan?>"><?php echo($TEXT['photo']); ?></a></li>
                <li class="active"><a href="/partial/contact.php?lan=<?php echo $lan?>"><?php echo($TEXT['contacts']); ?></a></li>
            <!--<li><button class="btn btn-warning btn-sm navbar-btn">Sign Up</button></li>-->             
              <li style="padding-top: 15px;">
                  <span style="cursor: pointer" onclick="window.location.href='contact.php?lan=EN'">EN |</span><span style="cursor: pointer" onclick="window.location.href='contact.php?lan=SRB'">SRB |</span><span style="cursor: pointer" onclick="window.location.href='contact.php?lan=GER'">GER</span>
              </li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav>
        <div class="container" style="text-align: center;">
        <h1><?php echo $TEXT['contact_title']?></h1>
    </div>
         <!--kraj nav-->
        <!--meni-->
            <!--<div class="text-vertical-center contactMenu">
            <h1>Lalelu Kindergarden</h1>
           <div class="menu row">
                    <div id="menuBall1" class="menuBall">
                        <a href="/index.php?lan=<?php echo $lan?>" class="ball blueball">
                            <div class="menuText">
                               <?php echo($TEXT['home']); ?>
                            </div>
                        </a>
                    </div>
                <div id="menuBall2" class="menuBall">
                    <a href="/partial/aboutUs.php?lan=<?php echo $lan?>" class="ball blueball">
                        <div class="menuText">
                           <?php echo($TEXT['aboutUs']); ?>
                        </div>
                    </a>
                </div>
                <div id="menuBall3" class="menuBall">
                    <a href="/partial/photo.php?lan=<?php echo $lan?>" class="ball blueball">
                        <div class="menuText">
                            <?php echo($TEXT['photo']); ?>
                        </div>
                    </a>
                </div>
                <div id="menuBall4" class="menuBall">

                    <a href="/partial/contact.php?lan=<?php echo $lan?>" class="ball blueball">

                        <div class="menuText">
                            <?php echo($TEXT['contacts']); ?>
                        </div>
                    </a>
                </div>
            </div>
                </div>-->
            <!--meni-->
        <div class="container" style="padding-top: 100px;">
            
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center contactCaption"><?php echo($TEXT['contact_legend']); ?></legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder=<?php  echo "\"".($TEXT['contact_Fname']) . "\""; ?> class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_Lname']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_Email']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder=<?php  echo "\"". ($TEXT['contact_phone']) . "\""; ?> class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder=<?php  echo "\"". ($TEXT['contact_message']) . "\""; ?> rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg"><?php  echo ($TEXT['contact_BtnSubmit']); ?></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="well well-sm">

                <form class="form-horizontal text-center">
                    <fieldset>
                        <legend class="text-center contactCaption"><?php  echo ($TEXT['contact_ourOffice']); ?></legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <?php  echo ($TEXT['contact_adressOfice']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <div>
                            <?php
                             require('../connConfig.php');
                            
                                if(mysqli_connect_error())
                                    echo mysqli_connect_error();
                                 else{
    
                                    $result = mysqli_query($con,"SELECT * FROM contact");
                                     while($row = mysqli_fetch_array($result)) {
                                         echo $row['Street'] . "<br>";
                                         echo $row['City'] . "<br>";
                                         echo $row['Phone'] . "<br>";
                                         $mail = $row['Email'];
                                         $lon=$row['Lon'];
                                         $lat=$row['Lat'];
                                         echo "<a href=mailto:'$mail'>" .$mail. "</a><br>";
                                        
                                         echo "<input type='text' id='cooLong' hidden value='$lon'/>";
                                         echo "<input type='text' id='cooLat' hidden value='$lat'/>";


                                     }
                                 }
                                mysqli_close($con);
                            ?>
                        
                        </div>
                            </div>
                        </div>

                      
                    </fieldset>
                    <hr />
                    <div id="profile" style="padding-left: 4px;">
                           <div id="map1" class="map" >
                           </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

     <!--<footer>
      <div class="container clearfix">
        <p class="pull-left">
          Copyright &copy;DViG 2014
        </p>
        <p class="pull-right">
          Visit Us <a href="http://dvig.rs">DViG</a>
        </p>
      </div>
    </footer> -->





        <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            //var myLocation = new google.maps.LatLng(44.801013, 20.522408);
            var myLocation = new google.maps.LatLng($("#cooLong").val(),$("#cooLat").val());
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
            $('a[href="#profile"]').on('shown', function(e) {
            google.maps.event.trigger(map, 'resize');
        });
        }
        init_map1();
        $("#map1").css("width", 400).css("height", 255);
    });
</script>


    </body>
</html>