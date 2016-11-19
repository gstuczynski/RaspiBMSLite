<?php

$mode = $_GET['mode'];


if($mode == 'bulb'){

	$x = $_GET['ctl'];
   system("pigs m 18 ".$x);
}elseif ($mode == 'motionservice'){

	$x = $_GET['motionstat'];
	system("sudo /etc/init.d/motion ".$x);
}elseif ($mode == 'poweroff'){

	system("sudo shutdown -h now");
}elseif ($mode == 'sensor'){
	$x = $_GET['sMode'];
	system("sudo python2 sensor.py ".$x);
}elseif ($mode == 'turn'){
	$angle = (int)$_GET['a'];
	system("pigs s 4 ".$angle);
}



?>
