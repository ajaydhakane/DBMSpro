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
        <h1>Money Transfer</h1>
</header>
    <div class="l">
        <form action="index2.php" method="post">   
        <input type="text" name="r_acc_name" id="r_acc_name" placeholder=" Enter Recipent Account name">
        <input type="number" name="r_acc_n" id="r_acc_n" placeholder="Enter Recipent Account Number">
        <input type="text" name="s_bank_name" id="s_bank_name" placeholder=" Enter sender Bank name">
        <input type="text" name="s_ifsc" id="s_ifsc" placeholder=" Enter sender bank ifsc code">
        <input type="text" name="s_acc_name" id="s_acc_name" placeholder=" Enter Sender Account Name">
        <input type="number" name="s_acc_n" id="s_acc_n" placeholder="Enter sender Account Number">
        <input type="number" name="amt" id="amt" placeholder="Enter Your amount">
        <!-- <input type="number" name="t_id" id="t_id" placeholder="Enter Transcation ID"> -->
        <button type="submit">Send</button>
       
        </form>
        </div>
</body>
</html>