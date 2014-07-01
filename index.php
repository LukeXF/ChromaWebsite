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
					</h4>
					<a href="https://minestatus.net/106316-chroma-hills">
						<img border="0" align="middle" src="/assets/img/voste4.png" alt="Chrome App" width="200">
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

		<a href="http://www.minecraftservers.org/server/122452">
			<img border="0" align="middle" src="/assets/img/voste1.png" alt="Facebook" width="200">
		</a>
		<a href="http://www.planetminecraft.com/server/chroma-hills-factions---100k-custom-biome-world---custom-dungeons---custom-loot-more/vote/">
			<img border="0" align="middle" src="/assets/img/voste2.png" alt="Forum" width="200">
		</a>
		<a href="http://minecraft-mp.com/server-s38321">
			<img border="0" align="middle" src="/assets/img/voste3.png" alt="Twitter" width="200">
		</a>
		<a href="https://minestatus.net/106316-chroma-hills">
			<img border="0" align="middle" src="/assets/img/voste4.png" alt="TeamSpeak" width="200">
		</a>
		<a href="https://minestatus.net/106316-chroma-hills">
			<img border="0" align="middle" src="/assets/img/voste4.png" alt="Skype" width="200">
		</a>

	</div><!--contain--></div><!--blue-->



<?php require './assets/footer.php'; ?>