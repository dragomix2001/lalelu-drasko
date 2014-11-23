<!DOCTYPE html>
<html lang="en">
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
    <head>
        <meta charset="utf-8" />
        <title><?php echo($TEXT['aboutUs_title']); ?></title>
        <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/aboutUs.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
    </head>
    <body style="padding:0px">
        <!--nav-->
         <!--<form>
            <select onchange="window.location.href= this.form.URL.options[this.form.URL.selectedIndex].value" name="URL">
            <option>Select language</option>
            <option value="/partial/aboutUs.php?lan=EN">English</option>
            <option value="/partial/aboutUs.php?lan=SRB">Srpski</option>        
            </select>
        </form>-->

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
            <li ><a href="/index.php?lan=<?php echo $lan?>"><?php echo($TEXT['home']); ?></a></li>
                <li class="active"><a href="/partial/aboutUs.php?lan=<?php echo $lan?>"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li><a href="/partial/photo.php?lan=<?php echo $lan?>"><?php echo($TEXT['photo']); ?></a></li>
                <li><a href="/partial/contact.php?lan=<?php echo $lan?>"><?php echo($TEXT['contacts']); ?></a></li>
            <li style="padding-top: 15px;">
                  <span style="cursor: pointer" onclick="window.location.href='aboutUs.php?lan=EN'">EN |</span><span style="cursor: pointer" onclick="window.location.href='aboutUs.php?lan=SRB'">SRB |</span><span style="cursor: pointer" onclick="window.location.href='aboutUs.php?lan=GER'">GER</span>
              </li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->

        <div id="top" class="jumbotron">
      <div class="container">
        <h1>Lalelu Kindergarden</h1>
        <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h2>
        <!--<p><a class="btn btn-warning btn-lg">Sign Up Today <span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>-->
      </div> <!-- /.container -->
    </div> <!-- /.jumbotron -->

      <!--<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
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
                <li class="active"><a href="#"><?php echo($TEXT['home']); ?></a></li>
                <li><a href="/partial/aboutUs.php"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li><a href="/partial/photo.php"><?php echo($TEXT['photo']); ?></a></li>
                <li><a href="partial/contact.html"><?php echo($TEXT['contacts']); ?></a></li>
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>-->
         <!--kraj nav-->
         
        <!--cloud menu-->
          <!--<div class="menu row text-vertical-center">
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
            </div>-->

        <!--kraj za courasel-->
    
        <div class="container">
            <h1><?php echo $TEXT['aboutUS_title']?></h1>

            <p>
               <?php
                 require('../connConfig.php');
                 
                    if(mysqli_connect_error())
                       echo mysqli_connect_error();        
                    else{    
                        $result = mysqli_query($con,"SELECT * FROM aboutus");  
                        }
                     while($row = mysqli_fetch_array($result)) {
                         if($lan=="SRB"){
                          $oNama=$row['Text_SRB'];   
                         }else if($lan=="EN"){
                          $oNama=$row['Text'];    

                         }else if($lan=="GER"){
                             $oNama=$row['Text_DE']; 
                         }
                     }        
                    echo $oNama;
                ?>
            </p>

            <p><a href="/partial/contact.php?lan=<?php echo $lan?>" class="btn btn-primary btn-lg" role="button"><?php echo $TEXT['btn_aboutUs_Contact']?></a></p>
        </div>
        <!--staff-->
        <div class="container">
	<div class="row">
		<h2><?php echo $TEXT['aboutUS_OurEmp']?></h2>
        <div class="col-lg-12">
            <input type="search" class="form-control" id="input-search" placeholder=<?php echo "\"" . $TEXT['aboutUs_Search']. "\""?> >
        </div>


        <div class="searchable-container">
    <?php      
   require('../connConfig.php');
   
    if(mysqli_connect_error())
        echo mysqli_connect_error();        
    else{    
        $result = mysqli_query($con,"SELECT * FROM employee");

        while($row = mysqli_fetch_array($result)) { 
            echo "<div class=\"items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix\">";
                echo "<div class=\"info-block block-info clearfix\">";
                     echo "<div class=\"square-box pull-left\">";
                        if($row['Photo']!=NULL){
                           echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['Photo'] ) . '" width=\'75px;\' height=\'75px;\'/>';
                        
                        }
                        else{
                            echo "<span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>";
                        }
                        echo "</div>";
                        echo "<h4>" . $TEXT['aboutUs_name']. ": " . $row['Name'] . "</h4>";
                        echo "<p>". $TEXT['aboutUs_titleEmp']. ": " . $row['Title'] . "</p>";
                        echo " <span>". $TEXT['aboutUs_phone']. ": " . $row['Phone'] ."</span></br>
                                <span>". $TEXT['aboutUs_email']. ": " . $row['Email'] ."</span>";
                        echo "</div>
                            </div>";
       }
    }     
    mysqli_close($con);      
     
?>



            <!--<div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                       <img src="/img/1.jpg" alt="Nemas slike" width="75px;" height="75px;"/>
                    </div>
                    <h4>Name: Tyreese Burn</h4>
                    <p>Title: Teacher</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>-->
            <!--<div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Brenda Tree</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Glenn Pho shizzle</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>
            <div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                    <h4>Name: Brian Hoyies</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span></br>
                    <span>Email: sample@company.com</span>
                </div>
            </div>-->
        </div>

	</div>
</div>
        <footer>
      <div class="container clearfix">
        <p class="pull-left">
          Copyright &copy;DViG 2014
        </p>
        <p class="pull-right">
          Visit Us <a href="http://dvig.rs">DViG</a>
        </p>
      </div> <!-- /.container -->
    </footer> 
        <!--kraj staff-->
  
       

    <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/aboutUs.js"></script>
    </body>
</html>