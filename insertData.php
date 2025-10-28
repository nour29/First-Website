<?php
include'connection.php';

$sqDB="INSERT INTO class(className,classLocation,classHead)
       VALUES('BSEMBIT','Lab3','Abdul');";
$sqDB.="INSERT INTO class(className,classLocation,classHead)
       VALUES('BSEMBIT','Lab3','Abdul');";
$sqDB.="INSERT INTO class(className,classLocation,classHead)
       VALUES('BSEMBIT','Lab3','Abdul');";
$sqDB.="INSERT INTO class(className,classLocation,classHead)
       VALUES('BSEMBIT','Lab3','Abdul')";

if (mysqli_multi_query($con,$sqDB)) {
    echo "data inserted successfully";
}
else {
    echo 'Error in inserting data'.mysqli_error($con);
}

mysqli_close($con);

?>