<?php


/* ======================================================================
*                     LISTING OF THE SEXY SERVERS                      */

$serverID=array(
	"chromahills.net",
	"us.mineplex.com",
	"mo"
);

/*                    LISTING OF THE SEXY SERVERS                       *
====================================================================== */





/* ======================================================================
*                         DEBUG THIS SHIT MATE                         */

						   $debugmode=("false");

/*              ^^^ Changes debug on or off, simples ^^^               */

if ($debugmode=="true") {

// Introduction
	echo "<hr><br><b>DEBUG MODE</b><br><i class='debug'>";
	echo "Chroma hills is rocking the <br> following servers bruv:";
	echo "</i><br>";
	echo "<i class='debug-red'>Total amount: </i>";
	echo count($serverID) . "<br><br>";

// Load Time
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time2 = round(($finish - $start), 4);
	echo "<i class='debug-red'>Load time (midway)</i><br>";
	echo  $total_time2 . " seconds.";
	echo "<h5 class='timehint'>(view bottom of page for full results)</h5><br>";

// Crazy mode!
//	echo "<style> body { background: url(http://subtlepatterns.com/patterns/sativa.png); } </style>";

// Time check
	date_default_timezone_set('Europe/London');
	$current_date = date('d/m/Y - H:i:s');
	echo "<i class='debug-red'>Date Check:</i><br>" . $current_date . "<br><br>";

// Server list
	echo "<i class='debug-red'>Servers:</i><br>";

	$arrlength=count($serverID);
	for($x=0;$x<$arrlength;$x++) {
	  	echo $x . " - " . $serverID[$x];
	   	echo "<br>";
	}

/* A massive steamy load about a server */
	$response = $status->getStatus('chromahills.net');
	if(!$response) {
		echo"The Server is offline!";
	} else {
		echo"<img width=\"64\" height=\"64\" src=\"".$response['favicon']."\" /> <br>
		The Server ".$response['hostname']." is running on ".$response['version']." and is online,
		currently are ".$response['players']." players online
		of a maximum of ".$response['maxplayers'].". The motd of the server is '".$response['motd']."'.
		The server has a ping of ".$response['ping']." milliseconds.";
	}


// End
	echo "<hr>";

}

/*                        DEBUG THIS SHIT MATE                          *
====================================================================== */




/* ======================================================================
*                        PING STATUS OF SEXY SERVERS                   */

$arrlength2=count($serverID);
for($x=0;$x<$arrlength2;$x++) {

	$return[$x] = $status->getStatus($serverID[$x]);
	if(!$return[$x]) {
		echo "
		<a class='btn btn-danger btn-labeled' title='ohhh yarr' role='button'>
		<span class='btn-label'><i class='fa fa-times fa-lg'></i></span>". $serverID[$x] . "
		<span class='btn-players'><i class='fa fa-user fa-lg'></i> 00 </span>
		</a><br>";
	} else {
		echo "
		<a class='btn btn-success btn-labeled' title='ohhh yarr' role='button'>
		<span class='btn-label'><i class='fa fa-check fa-lg'></i></span>". $serverID[$x] . "
		<span class='btn-players'><i class='fa fa-user fa-lg'></i> ".$return[$x]['players']."</span>
		</a><br>";

	}

}

?>