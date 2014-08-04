<?php include_once("analyticstracking.php") ?>
<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chroma Hills Network Site">
    <meta name="author" content="Luke Brown">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="/owl/assets/css/custom.css" rel="stylesheet">
	<link href="/owl/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/owl/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="/owl/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link rel="stylesheet" href="http://lokeshdhakar.com/projects/lightbox2/css/lightbox.css">

    <title>Chroma Hills</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://typecast.com/project_css/luke-sx/198159a4b7f984.js"></script>
    <!--[if lt IE 9]>
    	<script src="../../assets/js/ie8-responsive-file-warning.js"></script>
      	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://chromahills.net">chromahills.net</a><br>
          <a class="navbar-brand-sub" href="#">click to copy IP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://chromahills.net">Home</a></li>
            <!--li><a href="#leaderboards#and#shit">Stats</a></li>-->
            <li><a href="http://chromahills.net/donate.php">Donate</a></li>
            <li><a href="http://www.chromahills.com/forum/viewforum.php?f=43">Forum</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vote<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">MC Servers.org</a></li>
                <li><a href="#">Planet Minecraft</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="divider"></li>
                <li class="dropdown-header" href="#google">Want to learn more?</li>
              </ul>
            </li>
            <li><a href="http://chromahills.net/status.php">Stats</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#you#will#copy#ip">There are currently <b>
            <?php
              $data = json_decode( file_get_contents( 'http://minecraft-api.com/v1/get/?server=chromahills.net' ), true );

              if ( $data['status'] == true ) {
                  // This will only be displayed if the server up and kick'in
                  echo $data['players']['online'];
              } else {
                  // This will only be displayed if the server is offline.
                  echo 'The server is Offline! :[ Check back later.';
              }
            ?>
            </b> players online!</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  <body>