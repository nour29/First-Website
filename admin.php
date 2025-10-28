<?php
$serverName="localhost";
$userName="root";
$pass="";
$con=mysqli_connect($serverName,$userName,$pass);
if (!$con) {
    die('Connection unsuccessful'.mysqli_connect_error());
}
/*
else {
    echo "Successful connection";
}
*/
$sqDB="CREATE DATABASE BData";
if (mysqli_query($con,$sqDB)) {
    echo "Database created successfully";
}
else {
    echo 'Error in creating database'.mysqli_error($con);
}
mysqli_close($con);
?>