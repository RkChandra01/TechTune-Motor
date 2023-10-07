<?php
define('TITLE', 'Success'); 
include('../dbConnection.php');
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script>location.href='userLogin.php'</script>";
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
 $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
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
    <div class="row ml-5 mt-5">
        <div class="col-md-6">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Request ID</th>
                        <td><?php echo $row['request_id']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['requester_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email ID</th>
                        <td><?php echo $row['requester_email']; ?></td>
                    </tr>
                    <tr>
                        <th>Request Info</th>
                        <td><?php echo $row['request_info']; ?></td>
                    </tr>
                    <tr>
                        <th>Request Description</th>
                        <td><?php echo $row['request_desc']; ?></td>
                    </tr>
                    <tr>
                        <td><form class='d-print-none'><input class="btn btn-print" type="submit" value="Print" onClick="window.print()"></form></td>
                        <td><a href='SubmitRequest.php' class='btn btn-secondary d-print-none'>Close</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<?php
} else {
  echo "Failed";
}
?>
