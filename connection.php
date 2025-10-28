<?php
$serverName="localhost";
$userName="root";
$pass="";
$dbName="BData";
$con=mysqli_connect($serverName,$userName,$pass,$dbName);
if (!$con) {
    die('Connection unsuccessful'.mysqli_connect_error());
}

?>