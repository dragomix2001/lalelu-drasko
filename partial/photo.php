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
        <title> <?php echo($TEXT['photo_title']); ?></title>
            <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../css/buttons.css" rel="stylesheet">
         <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
       
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
            <li ><a href="/index.php?lan=<?php echo $lan?>"><?php echo($TEXT['home']); ?></a></li>
                <li><a href="/partial/aboutUs.php?lan=<?php echo $lan?>"><?php echo($TEXT['aboutUs']); ?></a></li>
                  <li class="active"><a href="/partial/photo.php?lan=<?php echo $lan?>"><?php echo($TEXT['photo']); ?></a></li>
                <li ><a href="/partial/contact.php?lan=<?php echo $lan?>"><?php echo($TEXT['contacts']); ?></a></li>
            <li style="padding-top: 15px;">
                  <span style="cursor: pointer" onclick="window.location.href='photo.php?lan=EN'">EN |</span><span style="cursor: pointer" onclick="window.location.href='photo.php?lan=SRB'">SRB |</span><span style="cursor: pointer" onclick="window.location.href='photo.php?lan=GER'">GER</span></span>
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
        <div class="text-vertical-center">
             <div class="row">
      <!--  <?php
            class Photo
                {
                    public $slika;
                    public $album;
                }
            $array[] = new Photo;


           require('../connConfig.php');
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
           if($result = mysqli_query($con,"SELECT photos.photo as photo, photos.Id as Id, photos.album_id as identifikator, albums.Name as album FROM photos join albums on photos.album_id = albums.ID group by album")){
            //"<select id=\"ID_FunkcijeZadatka\" name=\"ID_FunkcijeZadatka\" style=\"width:775px;\">"
            
            $list = array();
            while($row = mysqli_fetch_array($result)) {
                

                $list[$row['identifikator']]['photo'] = "";
                
                }

                }
                else
                echo "No photo table!";
            }
            
            // <div id="nanoGallery3">
        //<a href="../img/1.jpg" data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>
        //<a href="../img/a1.jpg" data-ngthumb="../img/a1.jpg">Title Image2</a>
   // </div>

            foreach ($list as $category => $products) {
                //echo '<input type="hidden" class="' . $category .'"';
                echo '<div id="' . $category . '">';
                
                 if($result = mysqli_query($con,"SELECT photos.photo, albums.Name as album FROM photos join albums on photos.album_id = albums.ID WHERE album_id=" .$category )){
                      while($row = mysqli_fetch_array($result)) { 
                echo '<a><img style="width:130px; height:115px;" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" /></a>';
               // echo '<a href=' .base64_encode( $row['photo'] .' data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>';
    
                }
                  echo '</div>';  //foreach ($products as $productId => $productInfo) {
                    //echo 'Product ' . $productId . ': ' . $productInfo;
                     // etc
            }
            //echo $i;
            

}
            mysqli_close($con);        
        ?> -->
                 <?php
            require('../connConfig.php');
            //$con=mysqli_connect("localhost","root","","lalalulu");
        if(mysqli_connect_error())
            echo mysqli_connect_error();
         else{
    
           if($result = mysqli_query($con,"SELECT * FROM photos")){                      
               echo "<div id='nanoGallery3'>";
            while($row = mysqli_fetch_array($result)) {
                $tmp =  $row['path'];  
                $path = substr($tmp, 8);  
                $name_tmp = substr($tmp, 16);   
                $name = substr($name_tmp, 0, -4);         
                //echo "<tr>";
                //echo "<td>" . $row['Title'] . "</td>";
                //echo "<td>" . $row['Content'] . "</td>";               
                //echo "<td>" . $row['Date'] . "</td>";
                if($row['photo']!=NULL)
                //echo '<td style="width:200px"><img style="width:130px; height:115px;" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" /></td>';
                   // echo "<td><i class=\"fa fa-camera\"></i></td>";
                   echo "<a href=\"" . $path . "\" data-ngthumb=\"" . $path . "\" data-ngdesc=\"\">" . $name ."</a>";
                else
                    echo "<td><i class=\"fa fa-times\"></i></td>";
                    //echo "<td>" . $row['path'] . "</td>";
                //echo "<td><i path=" . $row['path'] . " class=\"fa fa-trash-o del\" id=". $row['Id'] ."></i></td>";
                //echo "</tr>"; 
                }

                //echo "</tbody>";
                //echo "</table>";
                echo "</div>";

                }
                else
                echo "No photo table!";
            }
            mysqli_close($con);        
        ?>
    <!-- <div id="nanoGallery3">
        <a href="../img/1.jpg" data-ngthumb="../img/1.jpg" data-ngdesc="Description1">Title Image1</a>
        <a href="../img/a1.jpg" data-ngthumb="../img/a1.jpg">Title Image2</a>
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
     <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.0.3.min.js">\x3C/script>')</script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/css/nanogallery.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/jquery.nanogallery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
   <!-- <script src="../js/aboutUs.js"></script>-->   

   <script type="text/javascript">
        $(document).ready(function () {
        
        $("#nanoGallery3").nanoGallery({
        	 thumbnailWidth: 190, thumbnailHeight: 126,
		      breadcrumbAutoHideTopLevel: true,
		      maxWidth: 948,
		      thumbnailHoverEffect: [{ name: 'slideRight', duration:500 }, { name: 'labelAppear75' }],
		     // theme: 'clean',
		    //  i18n: { thumbnailImageDescription: 'View Photo', thumbnailAlbumDescription: 'Open Album' },
		      thumbnailLabel: { display: true, position: 'overImageOnMiddle', hideIcons: true, align: 'center' }
        });
        });
    </script>

         
          
    </body>
</html>