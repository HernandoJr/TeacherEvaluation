<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "teacherevaluation_database";

$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
