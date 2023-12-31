<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include('includes/header.php');
include('../dbConnection.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='RequesterLogin.php'; </script>";
    exit();
}

if (isset($_REQUEST['passupdate'])) {
    $rPass = $_REQUEST['rPassword'];

    if (empty($rPass)) {
        // Display a warning message if the new password is empty
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    } else {
        $sql = "SELECT * FROM userlogin_tb WHERE u_email='$rEmail'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $sql = "UPDATE userlogin_tb SET u_password = '$rPass' WHERE u_email = '$rEmail'";
            if ($conn->query($sql) === TRUE) {
                // Display a success message if the password is updated successfully
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
            } else {
                // Display an error message if the update fails
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
            }
        }
    }
}
?>
<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5" method="POST">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password"
                        name="rPassword" required>
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if (isset($passmsg)) {echo $passmsg; } ?>
            </form>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>
