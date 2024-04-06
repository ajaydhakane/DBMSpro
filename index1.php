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
$sql = "INSERT INTO aj (name, age, gender, email, mobile,aadhar,date) VALUES ('$name', '$age', '$gender', '$email', '$mobile', '$aadhar', current_timestamp())";
// echo $sql;

if(mysqli_query($con,$sql))
{
    echo "<script>alert('submitted successfully!');</script>";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul class="ro">
            <li><a href="index1.php">New Customer</a></li>
           <li><a href="Money_tra.php">Money Transfer</a></li>
           <li><a href="Loan.php">Loan Help</a></li>
           <li><a href="View.php">View record</a></li>
           <li><a href="delete.php">Delete record</a></li>
           <li><a href="update.php">Update record</a></li>
       </ul>
        <h1>Banking System</h1>
        <h2>For New Account User's</h2>
</header>
<div class="l">
    <form action="index1.php" method="post" enctype="multipart/form-data">   
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <input type="number" name="age" id="age" placeholder="Enter your age" required>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <input type="number" name="mobile" id="mobile" placeholder="Enter your mobile" required>
        <input type="number" name="aadhar" id="aadhar" placeholder="Enter your Aadhar Number" required>
        <select name="typ" class="bh" required>
            <option value="account" disabled selected>Which Account Type do you want</option>
            <option value="saving">Saving</option>
            <option value="current">Current</option>
            <option value="salary">Salary</option>
        </select>

        <p>Attach Your pan card here</p>
        <input type="file" name="file" id="file">
        
        <button type="submit" id="submit">Submit</button>
    </form>
</div>
</body>
<script src="index.js"></script>
</html>