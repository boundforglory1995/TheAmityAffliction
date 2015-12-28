<?php
$mysql_hostname = "localhost"; 
$mysql_user     = "darkn_nl_TheAmit"; 
$mysql_password = "Punter14"; 
$mysql_database = "darknessdevelopment_nl_TheAmit"; 
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps error! occurred");
mysql_select_db($mysql_database, $con) or die("Opps error! occurred");
?>