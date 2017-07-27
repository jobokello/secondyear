<?php
	$payday = date("d.m.Y");
	echo $payday;

	$date = new DateTime();
	echo $date->format('U = Y-m-d H:i:s') . "\n";

	$date->setTimestamp(1171502725);
	echo $date->format('U = Y-m-d H:i:s') . "\n";
?>