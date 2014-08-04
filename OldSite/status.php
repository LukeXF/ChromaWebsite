<?php include "navbar.php"; ?>
<?php include "headerwrap.php"; ?>
<body><br><br><br><br><br><br>
    <div class="container">

    <style type="text/css">
		.ch-col2 {
			background: #CECECE;
			padding-top: 3px;
			padding-bottom: 3px;
			background-color: rgba(114, 114, 114, 0.03);
			border: 1px solid;
			border-color: rgba(207, 207, 207, 0.82);
			border-radius: 5px;
			margin-bottom: 1em;
			margin-right: 4px;
			width: 223px;
		}
		i.fun {
			color: #E7E7E7;
			padding-right: 20px;
			font-size: 44px;
			float: right;
		}
		h1 {
			font-size: 44px;
			padding-left: 7px;
		}
	 </style>

	<?php if( isset( $Exception ) ): ?>
			<div class="panel panel-primary">
				<div class="panel-heading"><?php echo htmlspecialchars( $Exception->getMessage( ) ); ?></div>
				<p><?php echo nl2br( $e->getTraceAsString(), false ); ?></p>
			</div>
	<?php else: ?>


	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 ch-col"><!--CH Modal-->
			<h1>Factions <i class="fun">
				<?php
				   	try	{ $Query->Connect( 'chromahills.net', 25567 ); echo count( $Query->GetPlayers() );	}
				    catch( MinecraftQueryException $e )	{ echo $e->getMessage( ); }
				?>
				players online</i>
			</h1>

			<tbody>
				<?php if( ( $Players = $Query->GetPlayers( ) ) !== false ): ?>
				<?php foreach( $Players as $Player ): ?>

				<?php
					echo "<div class='col-3 col-md-3 col-sm-3 ch-col2'>";
					echo "<img src='http://skin.luke.sx/face/".$Player."&s=30' /> ";
					echo htmlspecialchars( $Player );
					echo "</div>";

				 ?>

				<?php endforeach; ?>
				<?php else: ?><tr><td>No players in da house</td></tr><?php endif; ?>

			</tbody>
		</div><!--CH Modal-->



		<div class="col-lg-12 col-md-12 col-sm-12 ch-col"><!--CH Modal-->
			<h1>KitPvP <i class="fun">
				<?php
				   	try	{ $Query->Connect( '192.99.160.108', 25596 ); echo count( $Query->GetPlayers() );	}
				    catch( MinecraftQueryException $e )	{ echo $e->getMessage( ); }
				?>
				players online</i>
			</h1>

			<tbody>
				<?php if( ( $Players = $Query->GetPlayers( ) ) !== false ): ?>
				<?php foreach( $Players as $Player ): ?>

				<?php
					echo "<div class='col-3 col-md-3 col-sm-3 ch-col2'>";
					echo "<img src='http://skin.luke.sx/face/".$Player."&s=30' /> ";
					echo htmlspecialchars( $Player );
					echo "</div>";

				 ?>

				<?php endforeach; ?>
				<?php else: ?><tr><td>No players in da house</td></tr><?php endif; ?>

			</tbody>
		</div><!--CH Modal-->




		<div class="col-lg-12 col-md-12 col-sm-12 ch-col"><!--CH Modal-->
			<h1>Creative <i class="fun">
				<?php
				   	try	{ $Query->Connect( 'creative.chromahills.net'); echo count( $Query->GetPlayers() );	}
				    catch( MinecraftQueryException $e )	{ echo $e->getMessage( ); }
				?>
				players online</i>
			</h1>

			<tbody>
				<?php if( ( $Players = $Query->GetPlayers( ) ) !== false ): ?>
				<?php foreach( $Players as $Player ): ?>

				<?php
					echo "<div class='col-3 col-md-3 col-sm-3 ch-col2'>";
					echo "<img src='http://skin.luke.sx/face/".$Player."&s=30' /> ";
					echo htmlspecialchars( $Player );
					echo "</div>";

				 ?>

				<?php endforeach; ?>
				<?php else: ?><tr><td>No players in da house</td></tr><?php endif; ?>

			</tbody>
		</div><!--CH Modal-->

	</div>


<?php endif; ?>
	</div>
</body>
</html>
<?php include "footer.php"; ?>
