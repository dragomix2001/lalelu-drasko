<!DOCTYPE html>

<?php
    require('lang/lan_en.php');
    require('lang/lan_srb.php');
    require('lang/lan_ger.php');

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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lalelu kindergarden</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
	
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
            <li class="active"><a href="/index.php?lan=<?php echo $lan?>"><?php echo($TEXT['home']); ?></a></li>
                <li><a href="/partial/aboutUs.php?lan=<?php echo $lan?>"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li><a href="/partial/photo.php?lan=<?php echo $lan?>"><?php echo($TEXT['photo']); ?></a></li>
                <li><a href="/partial/contact.php?lan=<?php echo $lan?>"><?php echo($TEXT['contacts']); ?></a></li>
            <li style="padding-top: 15px;">
                  <span style="cursor: pointer" onclick="window.location.href='index.php?lan=EN'">EN |</span><span style="cursor: pointer" onclick="window.location.href='index.php?lan=SRB'"> SRB |</span><span style="cursor: pointer" onclick="window.location.href='index.php?lan=GER'"> GER</span>
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

    <div class="container">

      <h3 id="benefits" class="subhead"><?php echo($TEXT['rec_title']); ?></h3>
      <div class="row">
        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-home"></span>
          </div>
          <h3><?php echo($TEXT['rec_title1']); ?></h3>
          <p><?php echo($TEXT['rec_content1']); ?></p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-map-marker"></span>
          </div>
          <h3><?php echo($TEXT['rec_title2']); ?></h3>
          <p><?php echo($TEXT['rec_content2']); ?></p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-user"></span>
          </div>
          <h3><?php echo($TEXT['rec_title3']); ?></h3>
          <p><?php echo($TEXT['rec_content3']); ?></p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-bullhorn"></span>
          </div>
          <h3><?php echo($TEXT['rec_title4']); ?></h3>
          <p><?php echo($TEXT['rec_content4']); ?></p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-cutlery"></span>
          </div>
          <h3><?php echo($TEXT['rec_title5']); ?></h3>
          <p><?php echo($TEXT['rec_content5']); ?></p>
        </div> <!-- /.benefit -->

        <div class="col-md-4 col-sm-6 benefit">
          <div class="benefit-ball">
            <span class="glyphicon glyphicon-plus"></span>
          </div>
          <h3><?php echo($TEXT['rec_title6']); ?></h3>
          <p><?php echo($TEXT['rec_content6']); ?></p>
        </div> <!-- /.benefit -->
      </div> <!-- /.row -->

      <div class="sect-border"></div>

      <h3 id="tour" class="subhead"><?php echo($TEXT['indx_News']); ?></h3>
      <div class="row">
        <div class="col-md-12">
           <div id="slideshow" class="carousel slide" data-ride="carousel">
         
        <ol class="carousel-indicators">
          <li data-target="#slideshow" data-slide-to="0" class="active"></li>
          <li data-target="#slideshow" data-slide-to="1" class=""></li>
          <li data-target="#slideshow" data-slide-to="2" class=""></li>
          <li data-target="#slideshow" data-slide-to="3" class=""></li>
        </ol>

<?php   
        require('connConfig.php');   
        //require('connConfig.php');
       
        if(mysqli_connect_error())
            echo mysqli_connect_error();
        
        else{
    
         $result = mysqli_query($con,"SELECT * FROM news ORDER BY DATE DESC LIMIT 0 , 4");
 
         $counter=1;
       echo "<div class=\"carousel-inner\">";   
        while($row = mysqli_fetch_array($result)) {
            if($lan=="EN"){
               $sadrzaj=$row['Content'];
               $naslov=$row['Title'];
            }  
            else if($lan=="SRB"){
                 $sadrzaj=$row['Content_SRB'];
                 $naslov=$row['Title_SRB'];
            }
            else{
                 $sadrzaj=$row['Content_GER'];
                  $naslov=$row['Title_GER'];
            }
           if($counter==1)
            echo "<div class=\"item active\">";
            else
            echo "<div class=\"item\">";
                if($row['Image']!=NULL){
                    echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['Image'] ) . '" />';
                echo "<div class=\"carousel-caption\">";
                    echo "<h3 class=\"title\">" . $naslov . "</h3>";
                    echo "<p class=\"content\">" . $sadrzaj . "</p>";
                echo "</div>";
                }else{
                    echo "<div style=\"height: 330px;\">"; 
                     echo "<h3 class=\"title\">" . $naslov . "</h3>";
                     echo "<p class=\"content\">" .$sadrzaj . "</p>";
                     echo "</div>"; 
                }
            echo "</div>";  
            $counter=5; 
             }
        }
     echo "</div>";
 
     
        mysqli_close($con);      
     
?>
        <a class="left carousel-control" href="#slideshow"  data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#slideshow" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>  
            <br>
            <!--<a href="#about" class="btn btn-dark btn-lg">Find Out More</a>-->
        </div> <!-- #slideshow -->
        </div> <!-- /.col-md-12 -->
      </div> <!-- /.row -->

      <div class="sect-border"></div>

      <h3 id="about" class="subhead"><?php echo($TEXT['prevFoot']); ?></h3>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <?php echo($TEXT['prevFoot_Cont']); ?>
          </div> <!-- /.col-md-10 -->
      </div> <!-- /.row -->

    </div> <!-- /.container -->

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

     <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.js">\x3C/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>  

    <script>
      $(".nav-link").click(function(e) {
        e.preventDefault();
        var link = $(this);
        var href = link.attr("href");
        $("html,body").animate({scrollTop: $(href).offset().top - 80}, 500);
        link.closest(".navbar").find(".navbar-toggle:not(.collapsed)").click();
      });
    </script>
  </body>
</html>
