<?php
$server="localhost";
$username="root";
$password="";
$dbname = "tripdata";
$con= mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
echo "failed".mysqli_connect_error()();
exit;
} 

$sql = "UPDATE aj SET name='Shubhaman Gill' WHERE age=30";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?> 