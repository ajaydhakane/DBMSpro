<?php
if(isset($_POST['name']))
{
$server="localhost";
$username="root";
$password="";
$dbname = "tripdata";
$con= mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    die ("failed".mysqli_connect_error());
}
// echo "sucess";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];
$typ=$_POST['typ'];
$sql = "INSERT INTO aj (name, age, gender, email, mobile, aadhar,typ,date) VALUES ('$name', '$age', '$gender', '$email', '$mobile', '$aadhar','$typ', current_timestamp())";
// echo $sql;

if(mysqli_query($con,$sql))
{
    echo "successfully inserted";
}
else
{
      echo "error:";
      echo $sql;
      echo mysqli_error($con);

}
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee information </title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
    footer
{
   background-color: azure; 
   margin: top 0px;;
}
.ro
{
    display: flex;
    justify-content: right;
    margin-right: 20px;
}
ul
{
    padding: 6px;
}

h1,h2
{
    text-align: center;
}
.bh
{
    display: block;
    margin: auto;
    width: 80%;
    margin-top: 23px;
}
p{
    display: block;
    margin: auto;
    width: 80%;
    margin-top: 23px;
    border:2px red hollow;
    background:white;
    border-radius:2px ;
}
input
{
    display: block;
    margin: auto;
    width: 80%;
    margin-top: 23px;
}
</style>
<body>
    <header>
        <ul class="ro">
            <ul><a href="index2.php">Old Account Holder</a> </ul>
            <ul><a href="index3.php">Loan Help</a> </ul>
            <ul><a href="fetch.php">View record</a> </ul>
            <ul><a href="delete.php">Delete record</a> </ul>
            <ul><a href="update.php">update record</a> </ul>

        </ul>
        <h1>Banking System</h1>
        <h2>For New Account User's</h2>
</header>
    <div class="l">
        <form action="index1.php" method="post">   
        <input type="text" name="name" id="name" placeholder=" Enter ur name">
        <input type="number" name="age" id="age" placeholder=" Enter ur age">
        <input type="test" name="gender" id="gender" placeholder=" Enter ur gender">
        <input type="email" name="email" id="email" placeholder=" Enter ur email">
        <input type="number" name="mobile" id="mobile" placeholder="Enter ur mobile">
        <input type="number" name="aadhar" id="aadhar" placeholder="Enter ur Aadhar Number">
        <select name="typ" class="bh">
        <option value="account">Which Account Type do you want</option>
        <option value="saving">saving</option>
        <option value="current">current</option>
        <option value="salary">salary</option>
    </select>

         <p>Attach Your pan card here</p>
        <input type="file" name="file" id="file">
        <button type="submit">submit</button>
       
        </form>
        </div>
</body>
</html>


        