<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

<!-- Begin page content -->

<style type="text/css">
/* Preload images */
body:after {
  content: url(../img/close.png) url(../img/loading.gif) url(../img/prev.png) url(../img/next.png);
  display: none;
}

.lightboxOverlay {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9999;
  background-color: black;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
  opacity: 0.8;
  display: none;
}

.lightbox {
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 10000;
  text-align: center;
  line-height: 0;
  font-weight: normal;
}

.lightbox .lb-image {
  display: block;
  height: auto;
  max-width: inherit;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
}

.lightbox a img {
  border: none;
}

.lb-outerContainer {
  position: relative;
  background-color: white;
  *zoom: 1;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}

.lb-outerContainer:after {
  content: "";
  display: table;
  clear: both;
}

.lb-container {
  padding: 4px;
}

.lb-loader {
  position: absolute;
  top: 43%;
  left: 0;
  height: 25%;
  width: 100%;
  text-align: center;
  line-height: 0;
}

.lb-cancel {
  display: block;
  width: 32px;
  height: 32px;
  margin: 0 auto;
  background: url(../img/loading.gif) no-repeat;
}

.lb-nav {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 10;
}

.lb-container > .nav {
  left: 0;
}

.lb-nav a {
  outline: none;
  background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
}

.lb-prev, .lb-next {
  height: 100%;
  cursor: pointer;
  display: block;
}

.lb-nav a.lb-prev {
  width: 34%;
  left: 0;
  float: left;
  background: url(../img/prev.png) left 48% no-repeat;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
  -o-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

.lb-nav a.lb-prev:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

.lb-nav a.lb-next {
  width: 64%;
  right: 0;
  float: right;
  background: url(../img/next.png) right 48% no-repeat;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
  -o-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

.lb-nav a.lb-next:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

.lb-dataContainer {
  margin: 0 auto;
  padding-top: 5px;
  *zoom: 1;
  width: 100%;
  -moz-border-radius-bottomleft: 4px;
  -webkit-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  -webkit-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

.lb-dataContainer:after {
  content: "";
  display: table;
  clear: both;
}

.lb-data {
  padding: 0 4px;
  color: #ccc;
}

.lb-data .lb-details {
  width: 85%;
  float: left;
  text-align: left;
  line-height: 1.1em;
}

.lb-data .lb-caption {
  font-size: 13px;
  font-weight: bold;
  line-height: 1em;
}

.lb-data .lb-number {
  display: block;
  clear: left;
  padding-bottom: 1em;
  font-size: 12px;
  color: #999999;
}

.lb-data .lb-close {
  display: block;
  float: right;
  width: 30px;
  height: 30px;
  background: url(../img/close.png) top right no-repeat;
  text-align: right;
  outline: none;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
  opacity: 0.7;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  transition: opacity 0.2s;
}

.lb-data .lb-close:hover {
  cursor: pointer;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
</style>






	<div class="dark"><div class="container">

		<div class="page-header">
			<img onclick="prompt('Connect to the server with this IP','chromahills.net')" src="./assets/img/CHLogo.png" alt="some_text" width="1000px">
		</div>
		<div class="row">


				<div class="col-md-4 col-md-offset-1" style="text-align:right;">					
						<h1 onclick="prompt('Connect to the server with this IP','chromahills.net')" class="welcome">chromahills.net<br/><i onclick="prompt('Connect to the server with this IP','chromahills.net')">click to copy</i></h1>
				</div><!--end of 4th-->

				<div class="col-md-5 why-donate" style="text-align:left;">

					<h3 class="welcome2">
					<?php
					$data = json_decode( file_get_contents( 'http://minecraft-api.com/v1/get/chromahills.net' ), true );

					if ( $data['status'] == true ) {
					    // This will only be displayed if the server up and kick'in
					    echo 'Come join the us and the other <a>2' . $data['players']['online'] . ' players</a> online!';
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
				<a href="/assets/img/lightbox/Kitpvpinfo.jpg" data-lightbox="image-2" data-title="KitPvP Server">
					<img border="0" src="/assets/img/serverslabs/kitpvp.png" width="800">
				</a>
			</div>

		</div><!--row-->

		<!--========================= Benefit Two ========================= -->
		<div class="row">

			<div class="col-md-12 why-donate">
				<a href="http://placehold.it/800x600" data-lightbox="image-2" data-title="Creative Server">
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

		<h1 class="hobo">Vote for our server!</h1>
		<p class="lead width-limit">
			Support our network by voting and help get our network more known.<br/>
			Vote for the network and receive awesome rewards!
		</p>

		<a href="http://www.minecraftservers.org/server/122452">
			<img border="0" align="middle" src="/assets/img/vote1.png" alt="Pulpit rock" width="200">
		</a>
		<a href="http://www.planetminecraft.com/server/chroma-hills-factions---100k-custom-biome-world---custom-dungeons---custom-loot-more/vote/">
			<img border="0" align="middle" src="/assets/img/vote2.png" alt="Pulpit rock" width="200">
		</a>
		<a href="http://minecraft-mp.com/server-s38321">
			<img border="0" align="middle" src="/assets/img/vote3.png" alt="Pulpit rock" width="200">
		</a>
		<a href="https://minestatus.net/106316-chroma-hills">
			<img border="0" align="middle" src="/assets/img/vote4.png" alt="Pulpit rock" width="200">
		</a>

	</div><!--contain--></div><!--blue-->













	<div id="donate" class="donate"><div class="container">

		<h1 class="hobo">Donate to the network.</h1>
		<p class="lead">
			Want to further show your ultimate support and get even more rewarding features for in game!<br/>
			Donating to our network allows us to bring you more content and brand new ideas to you.
		</p>


		<form method='get' action='http://store.chromahills.net' target="_blank">
			<div class="browser">

				<div class="bar">
					<input class="address" value="" placeholder="Notch" target="_blank" name="ign" id="ign">
					<input type="submit" value="enter" class="button button-grey">
				</div>

			</div>
			<p class="lead2"><i>Enter your username above to begin.</i></p>
		</form>


	</div><!--contain--></div><!--grey-->










<div class="cream"><div class="container">

			<div class="row">


				<div class="col-md-4 col-md-offset-1" style="text-align:right;">
					<img src="/assets/img/app.png" style="box-shadow: 2px 2px 1px rgba(136, 136, 136, 0.58); border-radius: 10px;" alt="some_text" height="450px">
				</div><!--end of 4th-->

				<div class="col-md-5 why-donate" style="text-align:left;">
					<h1 class="hobo">Download the app.</h1>
					<h2>
						We've designed a handy app for the players of Chroma Hills to use at their will.
					</h2><br/>
					<h4>
						And as we're always trying to improve<br/>
						the best experiences for our network.<br/><br/>
						Please consult the footer bar to see our wiki,<br/>
						suggestions or staff lists.
					</h4><br>
					<a href="chrome.php" target="_blank">
						<img border="0" align="middle" src="/assets/img/chromeapp.png" alt="Chrome App" width="300">
					</a>
				</div><!--end of 8th-->


			</div><!--row-->

</div><!--contain--></div><!--cream-->








	<div class="more"><div class="container">

		<h1 class="hobo">Join the community!</h1>
		<p class="lead width-limit">
			Support our network by voting and help get our network more known.<br/>
			Vote for the network and receive awesome rewards!
		</p>

		<a href="http://facebook.com/chromahills">
			<img border="0" align="middle" src="/assets/img/icon/facebook-128.png" alt="Facebook" width="150">
		</a>
		<!--<a href="http://chromahills.net">
			<img border="0" align="middle" src="/assets/img/icon/-128.png" alt="Forum" width="150">
		</a>-->
		<a href="http://twitter.com/syclonesjs">
			<img border="0" align="middle" src="/assets/img/icon/twitter-128.png" alt="Twitter" width="150">
		</a>
		<!--<a href="teamspeak:join">
			<img border="0" align="middle" src="/assets/img/icon/-128.png" alt="TeamSpeak" width="150">
		</a>-->
		<a href="skype:?chat&amp;blob=Nodspqazb1ycjihFdAoB5qYeD2VkYWdKUp8G9tVyUMyZOYaRElAsYuLn7MZ0WMLapEyvAeTO7Qg">
			<img border="0" align="middle" src="/assets/img/icon/skype-128.png" alt="Skype" width="150">
		</a>
		<a href="https://youtube.com/chromahills">
			<img border="0" align="middle" src="/assets/img/icon/youtube-128.png" alt="YouTube" width="150">
		</a>

	</div><!--contain--></div><!--blue-->



<?php require './assets/footer.php'; ?>