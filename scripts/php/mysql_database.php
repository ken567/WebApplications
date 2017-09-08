<?php

include'variables.php';

$mysql_connect = mysql_connect($mysql_hostname,$mysql_username,$mysql_password);
$mysql_db = mysql_select_db($mysql_db_name);

if(!$mysql_connect){
	if(!mysql_db){
		die();
	}
}
?>
