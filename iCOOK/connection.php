<?php

DEFINE ('DB_USER', 'auxstudDB5');
DEFINE ('DB_PASSWORD', 'auxstud5DB1!');
DEFINE ('DB_HOST', '166.62.8.11');
DEFINE ('DB_NAME', 'auxstudDB5');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' .
		mysqli_connect_error());
?>