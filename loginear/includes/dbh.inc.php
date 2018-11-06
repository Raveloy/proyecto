<?php

$servername = "mysql-lumat.ciajzop2iybp.sa-east-1.rds.amazonaws.com";
$dbUsername = "admin";
$dbPassword = "administracion";
$dbName = "mysql-lumat";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}
