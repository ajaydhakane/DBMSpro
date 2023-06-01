

<?php
if(isset($_POST['l_acc_name']))
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
$l_acc_name=$_POST['l_acc_name'];
$l_mob_n=$_POST['l_mob_n'];
$l_bank_name=$_POST['l_bank_name'];
$l_acc_n=$_POST['l_acc_n'];
$w_name=$_POST['w_name'];
$w_mob_n=$_POST['w_mob_n'];
$w_add=$_POST['w_add'];
$l_amt=$_POST['l_amt'];
// $loan_id=$_POST['loan_id'];


$sql = "INSERT INTO aj2 (l_acc_name,l_mob_n,l_bank_name,l_acc_n,w_name,w_mob_n,w_add,l_amt,date) VALUES ('$l_acc_name', '$l_mob_n', '$l_bank_name', '$l_acc_n', '$w_name', '$w_mob_n','$w_add','$l_amt',current_timestamp())";

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
    <title>student trip form </title>
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
ul ro
{
    margin-right: 20px;
}
h1
{
    text-align: center;
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
        <h1>Details Of Money Lender</h1>
</header>
    <div class="l">
        <form action="index3.php" method="post">   
        <input type="text" name="l_acc_name" id="l_acc_name" placeholder=" Enter Money lender name">
        <input type="number" name="l_mob_n" id="l_mob_n" placeholder="Enter Money lender mobile number">
        <input type="text" name="l_bank_name" id="l_bank_name" placeholder=" Enter Money lender Bank name">
        <input type="number" name="l_acc_n" id="l_acc_n" placeholder=" Enter Money lender Account Number">
        <input type="text" name="w_name" id="w_name" placeholder=" Enter Name of Witness">
        <input type="number" name="w_mob_n" id="w_mob_n" placeholder="Enter mobile Number of witness">
        <input type="text" name="w_add" id="w_add" placeholder=" Enter address of Witness">
        <input type="number" name="l_amt" id="l_amt" placeholder="Enter Your loan Amount">
        <!-- <input type="number" name="loan_id" id="loan_id" placeholder="Enter Your loan ID"> -->
        <button type="submit">Submit</button>
       
        </form>
        </div>
</body>
</html>













