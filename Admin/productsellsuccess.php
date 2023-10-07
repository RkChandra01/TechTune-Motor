<?php
session_start();
define('TITLE', 'Success');
include('../dbConnection.php');
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href='login.php'; </script>";
}
$sql = "SELECT * FROM customer_tb WHERE custid = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
  $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../Css/all.min.css">
    <style>
        .ml-5 {
            margin-left: 5%;
        }
        .mt-5 {
            margin-top: 5%;
        }
        .table th, .table td {
            vertical-align: middle;
            border: 1px solid #ddd; /* Add outer border to table cells */
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        .btn-print {
            background-color: #007BFF;
            color: #fff;
            border: none;
        }
        .btn-print:hover {
            background-color: #0056b3;
        }
        .container {
            background-color: #f2f2f2; /* Shaded background color */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="header">
        Techtune Motors
    </div>
    <h3 class="text-center">Customer Bill</h3>
    <table class="table">
        <tbody>
            <tr>
                <th>Customer ID</th>
                <td><?php echo $row['custid']; ?></td>
            </tr>
            <tr>
                <th>Customer Name</th>
                <td><?php echo $row['custname']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['custadd']; ?></td>
            </tr>
            <tr>
                <th>Product</th>
                <td><?php echo $row['cpname']; ?></td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td><?php echo $row['cpquantity']; ?></td>
            </tr>
            <tr>
                <th>Price Each</th>
                <td><?php echo $row['cpeach']; ?></td>
            </tr>
            <tr>
                <th>Total Cost</th>
                <td><?php echo $row['cptotal']; ?></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><?php echo $row['cpdate']; ?></td>
            </tr>
            <tr>
                <td><form class='d-print-none'><input class="btn btn-print" type="submit" value="Print" onClick="window.print()"></form></td>
                <td><a href='assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<?php
} else {
  echo "Failed";
}
?>
