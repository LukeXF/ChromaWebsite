		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<link href="http://chromahills.net/owl/assets/css/bootstrapTheme.css" rel="stylesheet">
		<link href="http://chromahills.net/owl/assets/css/custom.css" rel="stylesheet">
		<!-- Owl Carousel Assets -->
		<link href="http://chromahills.net/owl/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="http://chromahills.net/owl/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="http://chromahills.net/owl//assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	</head>
	<body>


<div id="demo">
	<div class="container">
		<div class="row">
			<div class="span12">

			<div id="owl-demo" class="owl-carousel">
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(1).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(2).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(3).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(4).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(5).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(6).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(7).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(8).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(9).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(10).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(11).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(12).jpg" class="server" alt="Server" width="304">
				</div>
				<div class="item">
					<img border="0" src="http://chromahills.net/assets/img/server/server%20(13).jpg" class="server" alt="Server" width="304">
				</div>
			</div>
				<div class="customNavigation">
					<a class="btn prev">Previous</a>
					<a class="btn next">Next</a>
					<a class="btn play">Autoplay</a>
					<a class="btn stop">Stop</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="http://chromahills.net/owl/assets/js/jquery-1.9.1.min.js"></script>
<script src="http://chromahills.net/owl/owl-carousel/owl.carousel.js"></script>


		<!-- Demo -->

		<style>
		#owl-demo .item{
				background: #fff;
				padding: 30px 0px;
				margin: 10px;
				color: #FFF;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				text-align: center;
		}
		.customNavigation{
			text-align: center;
		}
		.customNavigation a{
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
		</style>


		<script>
		$(document).ready(function() {

			var owl = $("#owl-demo");

			owl.owlCarousel({

			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1000,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
			itemsTablet: [600,2], //2 items between 600 and 0;
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

			});

			// Custom Navigation Events
			$(".next").click(function(){
				owl.trigger('owl.next');
			})
			$(".prev").click(function(){
				owl.trigger('owl.prev');
			})
			$(".play").click(function(){
				owl.trigger('owl.play',2000);
			})
			$(".stop").click(function(){
				owl.trigger('owl.stop');
			})


		});
		</script>


		<script src="http://chromahills.net/owl/assets/js/bootstrap-collapse.js"></script>
		<script src="http://chromahills.net/owl/assets/js/bootstrap-transition.js"></script>
		<script src="http://chromahills.net/owl/assets/js/bootstrap-tab.js"></script>

		<script src="http://chromahills.net/owl/assets/js/google-code-prettify/prettify.js"></script>
		<script src="http://chromahills.net/owl/assets/js/application.js"></script>

	</body>
</html>
