<?php
$mysql_hostname = "localhost"; //here's where you put the host
$mysql_user     = "root"; //the db username
$mysql_password = "password";//the db password
$mysql_database = "databasename";//the databasename goes here


$link = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_database", $mysql_user, $mysql_password);



?>
