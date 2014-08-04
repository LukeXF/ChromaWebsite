<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

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


		<!--========================= Benefit One ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<h3>
					Based on the resource pack using the popular Factions game mode with an awesome helping of RPGness!
					A very unique adventure themed spawn, rich In fantastic detail and design!
					Based on the Chroma Hills Resource Pack, we bring Chroma Hills to servers!
				</h3>
			</div>

		</div><!--row-->

		<!--========================= Benefit Four ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<a href="/assets/img/lightbox/FactionsInfo.png" data-lightbox="image-2" data-title="Factions Server">
					<img border="0" src="/assets/img/serverslabs/factions.png" alt="Server" width="800">
				</a>
			</div>

		</div><!--row-->

		<!--========================= Benefit One ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<a href="/assets/img/lightbox/Kitpvpinfo.png" data-lightbox="image-2" data-title="KitPvP Server">
					<img border="0" src="/assets/img/serverslabs/kitpvp.png" width="800">
				</a>
			</div>

		</div><!--row-->

		<!--========================= Benefit Two ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<a href="/assets/img/lightbox/CreativeInfo.png" data-lightbox="image-2" data-title="Creative Server">
					<img border="0" src="/assets/img/serverslabs/creative.png" width="800">
				</a>
			</div>

		</div><!--row-->

		<!--========================= Benefit One ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<h3>
					Join us today and get started on a large array of games we have to offer,
					get yourself known on the forums.<br/>
					Become part of the community today! Donate, vote or player. <br/>
					Eitherway, we look forward to meeting you!
				</h3>
			</div>

		</div><!--row-->

	</div><!--contain--></div><!--cream-->








	<div class="blue"><div class="container">

      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>Drag me around</p>
</div>
 
 

	</div><!--contain--></div><!--blue-->





<?php require './assets/footer.php'; ?>