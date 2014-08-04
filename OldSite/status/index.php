<?php
	require __DIR__ . '/MinecraftQuery.class.php';
	$Query = new MinecraftQuery( );
?>
<?php
	try	{ $Query->Connect( 'chromahills.net', 25565 ); echo count( $Query->GetPlayers() );	}
	catch( MinecraftQueryException $e )	{ echo $e->getMessage( ); }
?>
</html>
