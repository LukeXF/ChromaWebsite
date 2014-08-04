<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

	<div class="donate"><div class="container">


			<img src="./assets/img/CHLogo.png" style="padding-top:50px" alt="some_text" width="1000px">


		<h1 class="hobo">Welcome back to the Chroma Hills Network</h1>
		<p class="lead">
			Login to access the exlusive admin area.
		</p>


	</div><!--contain--></div><!--dark-->

	<div id="cream" class="cream"><div class="container">

		<form method='post' action='assets/checklogin.php' name="form1">
			<div class="browser">

				<div class="bar2">
					<input class="address2" style="width:98.5%;" value="" placeholder="Email" target="_blank" name="Email" type="text" id="myusername">
				</div>

			</div>
			<div class="browser" style="margin-top: 10px">

				<div class="bar2">
					<input class="address2" style="width:98.5%;" value="" placeholder="password" target="_blank" name="Password" type="password" id="mypassword">
				</div>

			</div>

			<div class="browser2" style="margin-top: 10px">

				<div class="bar2">
					<input type="submit" name="Submit" value="Login" class="button button-grey">
				</div>

			</div>
			<p class="lead2"><i>Enter your username above to begin.</i></p>
		</form>


	</div><!--contain--></div><!--grey-->

	<div class="blue"><div class="container">

		<h1 class="hobo">Can't log in?</h1>
		<a href="reset.php">
			<img border="0" align="middle" src="/assets/img/resetpw.png" alt="Reset Password" width="200" height="50">
		</a>
		<a href="register.php">
			<img border="0" align="middle" src="/assets/img/resetacc.png" alt="Register" width="200" height="50">
		</a>
		<p class="lead width-limit">
			That's okay, we all have issues from time to time.<br/>
			If you still can't get in contact support in the footer below.
		</p>

	</div><!--contain--></div><!--blue-->



<?php require './assets/footer.php'; ?>