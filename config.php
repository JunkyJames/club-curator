<?php

session_start();

$sqlip = "localhost";
$sqluser = "root";
$sqlpass = "root";
$sqldatabase = "clubcurator";

$con = mysql_connect($sqlip,$sqluser,$sqlpass);
if (!$con){die('Could not connect: ' . mysql_error());}

?>