<?php
include'connection.php';

$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address1'];
$email=$_REQUEST['email'];

$sqDB1="INSERT INTO person(first_name,last_name,gender,address1,email)
       VALUES('$first_name','$last_name','$gender','$address','$email')";


if (mysqli_query($con,$sqDB1)) {
    echo "data inserted successfully";
}
else {
    echo 'Error in inserting data'.mysqli_error($con);
}
?>