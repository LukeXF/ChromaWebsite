<!doctype html>
<html lang="en">
<head>

    <title>Chroma Hills Network</title>

    <!-- Fonts from TypeKit -->
    <script type="text/javascript" src="//use.typekit.net/gky2akt.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Meta information for search engines -->
    <meta name="description" content="Chroma Hills donation system for fans of the Chroma Hills resource pack.">
    <meta name="author" content="Luke Brown">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Stylesheet for the website -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Database connection loading-->
    <?php require './assets/protected/config.php'; ?>

</head>
<!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand divided-list" href="#">Chroma Hills</a>

                </div>


                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="http://chromahills.net">Home</a></li>
                        <li><a href="#about">Vote</a></li>
                        <li><a href="#donate">Donate</a></li>
                        <li><a href="#chrome">Chrome App</a></li>
                        <li><a href="#social">Social</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="divided-list"><a href="http://chromahills.net/login.php">Login</a></li>
                        <li><a href="http://chromahills.net/register.php">Register</a></li>

                    </ul>

                </div><!--/.nav-collapse -->

            </div>
        </div>

<body>

<!-- Begin page content -->








  <div class="dark"><div class="container">

    <div class="page-header">
      <img src="./assets/img/CHLogo.png" alt="some_text" width="1000px">
    </div>
    <div class="row">


        <div class="col-md-4 col-md-offset-1" style="text-align:right;">
          <h1 class="welcome">chromahills.net<br/><i>click to copy</i></h1>
        </div><!--end of 4th-->

        <div class="col-md-5 why-donate" style="text-align:left;">

          <h3 class="welcome2">
          <?php
          $data = json_decode( file_get_contents( 'http://minecraft-api.com/v1/get/chromahills.net' ), true );

          if ( $data['status'] == true ) {
              // This will only be displayed if the server up and kick'in
              echo 'Come join the us and the other <a>' . $data['players']['online'] . ' players</a> online!';
          } else {
              // This will only be displayed if the server is offline.
              echo 'Ohhh, &ensp;that&apos;s odd. &ensp;We can&apos;t ping the server. &ensp;Maybe it&apos;s offline.' ;
          }
          ?></h3>
          <h3 class="welcome2">Or <a href="http://chromahills.com">click here</a> to be taken to the official Chroma Hills texture pack site.</h3>
        </div><!--end of 8th-->


      </div><!--row-->

  </div><!--contain--></div><!--dark-->










  <div class="cream"><div class="container">

    <h1 class="hobo">Welcome to a new experience.</h1>


    <!--========================= Left ========================= -->
    <div class="row">

      <div class="col-md-12 why-donate">
        <h3>
         Shit get real
        </h3>
      </div>

    </div><!--row-->

  </div><!--contain-->

<img id="Image-Maps-Com-image-maps-2014-08-03-190120" src="./assets/img/map2.jpg" border="0" width="1204" height="650" orgWidth="1204" orgHeight="650" usemap="#image-maps-2014-08-03-190120" alt="" />
<map name="image-maps-2014-08-03-190120" id="ImageMapsCom-image-maps-2014-08-03-190120">
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="609,0,659,50" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="502,78,544,119" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="440,120,482,161" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="677,43,719,84" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="492,259,534,300" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="646,209,671,250" style="outline:none;" target="_self"     />
<area  alt="" title="" href="http://www.image-maps.com/" shape="rect" coords="419,226,452,267" style="outline:none;" target="_self"     />
<area shape="rect" coords="1202,648,1204,650" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
<area  alt="" title="" href="http://www.image-maps.com/" shape="poly" coords="304,380,644,548,584,617,250,443" style="outline:none;" target="_self"     />
</map>


</div><!--cream-->








  <div class="blue"><div class="container">


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery draggable map demo</title>
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="http://static.dannyvankooten.com/css/demo.css">
<style type="text/css">
.map-viewport{ position:relative; width:1500px; height:1258px; border:1px solid black; overflow:hidden; margin:0 0 20px -175px;}
.level{ position:absolute; left:0; top:0; z-index:10;}
.current-level{ z-index:20; }

.block{ width:49%; float:left; margin-right:1%; }

#map-1{ width: 1500px; height:1258px; position:absolute; right:0; top:0; cursor:move;}
img{ border:0; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://dannyvankooten.com/demo/mapz/js/jquery.mousewheel.min.js"></script>
<script src="http://dannyvankooten.com/demo/mapz/js/jquery.mapz.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
    $("#map-1").mapz({
        zoom : true,
        createmaps : true,
        mousewheel : true
    });
    $("#map-2").mapz();
});

</script>

</head>
<body>

    <div id="header">
        <a href="http://dannyvankooten.com"><img src="http://static.dannyvankooten.com/images/logo.png" alt="DannyvanKooten.com" /></a>
    </div>
    <div id="page-wrap">
        <p>This is a demonstration of the <a href="http://dannyvankooten.com/jquery-plugins/mapz/">jQuery Mapz</a> plugin showing a map with 4
        zoom levels and a html &lt;map&gt; element (check out the city name and try scrolling).</p>
        <p>The second map is just a simple
        draggable image with hard edges and no zoom functionality.</p>
        <div class="block">
            <h2>Map #1 - 4 levels of zoom</h2>
            <div class="map-viewport">
                <div id="map-1">
                    <img src="./assets/img/map2.jpg" width="6000" height="3375" alt="" usemap="#map" class="current-level level" />
                    <img src="./assets/img/map.jpg" width="1500" height="1258" alt="" class="level" />                
                    <img src="./assets/img/map.jpg" width="2000" height="1678" alt="" class="level" />
                    <img src="./assets/img/map.jpg" width="3796" height="2667" alt="" class="level" />
                </div>
                <map name="map">
                    <area title="City name" shape="rect" coords="0,0,50,50" href="#goes" alt="Goes" />
                    <area title="Train station" shape="rect" coords="270,365,320,390" href="#train-station" alt="Train Station" />
                    <area title="Rotary intersection" shape="circle" coords="51,146,20" href="sun.htm" alt="Sun" />
                </map>
            </div>
        </div>
        <!--<div class="block">
            <h2>Map #2 - no zoom</h2>
            <div class="map-viewport">
                <div id="map-2">
                    <img src="http://dannyvankooten.com/demo/mapz/img/map-4.jpg" width="1096" height="919" alt="" class="level" />
                </div>
            </div>
        </div>-->
        <br style="clear:both;" />
    </div>
    
    
</body>
</html>
 



  </div><!--contain--></div><!--blue-->





    <div id="footer">
      <div class="container">
        <p class="fLeft"><a href="http://syclonestudios.com">Chroma Hills &copy; 2011-2014</a></p>
        <p class="fRight">
            <a href="">Wiki</a> -
            <a href="/stats.php">Stats</a> -
            <a href="http://chromahills.info/ban">Bans</a> -
            <a href="/legal.php">Legal</a> -
            <a href="/legal.php">Contact</a>
        </p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Include Jquery at the bottom of your page -->

</html>