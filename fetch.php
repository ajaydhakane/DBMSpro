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



$sql = "select * from aj ";

$result=mysqli_query($con,$sql);  


if(!$result)
{
    echo "Error:". mysqli_error($con);
    exit;
}

while($row=mysqli_fetch_assoc($result))
{

    
    echo "<br>".$row['name']."<br>";
    echo $row['age']."<br>";
    echo $row['gender']."<br>";
    echo $row['email']."<br>";
    echo $row['mobile']."<br>";
    echo $row['aadhar']."<br>";

}
mysqli_close($con);

?>