<?php
if(isset($_POST['r_acc_name']))
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
$r_acc_name=$_POST['r_acc_name'];
$r_acc_n=$_POST['r_acc_n'];
$s_bank_name=$_POST['s_bank_name'];
$s_ifsc=$_POST['s_ifsc'];
$s_acc_name=$_POST['s_acc_name'];
$s_acc_n=$_POST['s_acc_n'];
$amt=$_POST['amt'];
// $t_id=$_POST['t_id'];

$sql = "INSERT INTO aj1 (r_acc_name,r_acc_n,s_bank_name,s_ifsc,s_acc_name,s_acc_n,amt,date) VALUES ('$r_acc_name', '$r_acc_n', '$s_bank_name', '$s_ifsc', '$s_acc_name', '$s_acc_n','$amt',current_timestamp())";
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
    <link rel="stylesheet" href="style.css">
    <title>student trip form </title>
    
</head>

<body>
    <header>
        <ul class="ro">
            <li><a href="index.html">New Customer</a></li>
           <li><a href="Money_tra.php">Money Transfer</a></li>
           <li><a href="Loan.php">Loan Help</a></li>
           <li><a href="View.php">View record</a></li>
           <li><a href="delete.php">Delete record</a></li>
           <li><a href="update.php">Update record</a></li>
       </ul>
        <h1>Money Transfer</h1>
</header>
<div class="l">
    <form action="Money_tra.php" method="post">   
        <input type="text" name="r_acc_name" id="r_acc_name" placeholder="Enter Recipient Account Name" required>
        <input type="number" name="r_acc_n" id="r_acc_n" placeholder="Enter Recipient Account Number" required>
        <input type="text" name="s_bank_name" id="s_bank_name" placeholder="Enter Sender Bank Name" required>
        <input type="text" name="s_ifsc" id="s_ifsc" placeholder="Enter Sender Bank IFSC Code" required>
        <input type="text" name="s_acc_name" id="s_acc_name" placeholder="Enter Sender Account Name" required>
        <input type="number" name="s_acc_n" id="s_acc_n" placeholder="Enter Sender Account Number" required>
        <input type="number" name="amt" id="amt" placeholder="Enter Your Amount" required>
       
        <button type="submit">Send</button>
    </form>
</div>
</body>
</html>