<?php
include'connection.php';
$sqDB="CREATE TABLE class
(
    classID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(classID),
    className varchar(30) NOT NULL,
    classLocation varchar(30) NOT NULL,
    classHead varchar(30)
)";
if (mysqli_query($con,$sqDB)) {
    echo "class table created successfully";
}
else {
    echo 'Error in creating class table'.mysqli_error($con);
}

$sqlD="CREATE TABLE department
(
    deptID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(deptID),
    deptName varchar(30) NOT NULL,
    deptLocation varchar(30) NOT NULL,
    deptHead varchar(30)
)";
if (mysqli_query($con,$sqlD)) {
    echo "department table created successfully";
}
else {
    echo 'Error in creating department table'.mysqli_error($con);
}

$sql="CREATE TABLE person
(
    personID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(personID),
    first_name varchar(30) NOT NULL,
    last_name varchar(30) NOT NULL,
    gender varchar(10) NOT NULL,
    address1 varchar(30) NOT NULL,
    email varchar(50) NULL
)";
if (mysqli_query($con,$sql)) {
    echo "person table created successfully";
}
else {
    echo 'Error in creating person table'.mysqli_error($con);
}

mysqli_close($con);

?>