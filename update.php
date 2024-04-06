<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "tripdata";

// Create connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$con) {
    echo "Failed: " . mysqli_connect_error();
    exit;
}


// Fetch data from 'aj' table
$sql = "SELECT * FROM aj";
$result = mysqli_query($con, $sql);

// Fetch data from 'aj1' table
$sql1 = "SELECT * FROM aj1";
$result1 = mysqli_query($con, $sql1);

// Fetch data from 'aj2' table
$sql2 = "SELECT * FROM aj2";
$result2 = mysqli_query($con, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System - View Records</title>
    <link rel="stylesheet" href="style.css">
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
        <h1>Banking System</h1>
        <h2>View Account Details</h2>
    </header>

    <div class="container">
        <h3>New Account User's</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Aadhar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['aadhar'] . "</td>";
                        echo "<td><a href='index.html?id=" . $row['id'] . "'>Update</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <h3>Money Transfer</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>R_Name</th>
                        <th>R_Acc</th>
                        <th>S_B_Name</th>
                        <th>S.IFSC</th>
                        <th>S_ACC</th>
                        <th>S_ACC_N</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['r_acc_name'] . "</td>";
                        echo "<td>" . $row['r_acc_n'] . "</td>";
                        echo "<td>" . $row['s_bank_name'] . "</td>";
                        echo "<td>" . $row['s_ifsc'] . "</td>";
                        echo "<td>" . $row['s_acc_name'] . "</td>";
                        echo "<td>" . $row['s_acc_n'] . "</td>";
                        echo "<td>" . $row['amt'] . "</td>";
                        echo "<td><a href='Money_tra.php?id1=" . $row['id'] . "'>Update</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <h3>Datail for Money Lender</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>L_name</th>
                        <th>L_mob</th>
                        <th>L_Bank_N</th>
                        <th>L_Acc</th>
                        <th>W_N</th>
                        <th>W_mob</th>
                        <th>W_Add</th>
                        <th>Loan_Amt</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['l_acc_name'] . "</td>";
                        echo "<td>" . $row['l_mob_n'] . "</td>";
                        echo "<td>" . $row['l_bank_name'] . "</td>";
                        echo "<td>" . $row['l_acc_n'] . "</td>";
                        echo "<td>" . $row['w_name'] . "</td>";
                        echo "<td>" . $row['w_mob_n'] . "</td>";
                        echo "<td>" . $row['w_add'] . "</td>";
                        echo "<td>" . $row['l_amt'] . "</td>";
                        echo "<td><a href='index3.php?id2=" . $row['id'] . "'>Update</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>

<?php
// Close connection
mysqli_close($con);
?>
