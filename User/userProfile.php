<?php 
define('TITLE','User Profile');
define('PAGE','UserProfile');
 include('../dbConnection.php');
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
 } else {
    echo "<script> location.href='userLogin.php'</script>";
 }
 $sql="SELECT u_name,u_email FROM userlogin_tb WHERE 
 u_email='$rEmail'";
 $result=$conn->query($sql);
 if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $rName=$row['u_name'];
 }

 if(isset($_REQUEST['nameupdate']))
 {
    if($_REQUEST['rName']==""){
        $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else {
      $rName=$_REQUEST['rName'];
      $sql="UPDATE userlogin_tb SET u_name='$rName' WHERE u_email='$rEmail'";
      if($conn->query($sql)==TRUE){
        $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
      }
      else 
      {
        $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
      }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <!-- Font Awesome  CSS-->
    <link rel="stylesheet" href="../Css/all.min.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="../Css/custom.css">
    <title>Profile</title>
</head>
<body>
   <!-- Top Navbar-->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="userProfile.php">TechTune Motors</a></nav>
    <!-- start container -->
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row"><!-- start row -->
            <nav class="col-sm-2 bg-light sidebar py-5"><!-- start side Bar 1st col-->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column"><li class="nav-item"><a class="nav-link active width-100"  href="userProfile.php"><i class="fas fa-user"></i>Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                    <li class="nav-item"><a class="nav-link" href="CheckStatus.php"><i class="fas fa-align center"></i>Service Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="ChangePassword.php"><i class="fas fa-key"></i>Change Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
                    </ul>
                </div>
            </nav><!--End side Bar 1st col-->
            <div class="col-sm-6 mt-5"><!-- Start Profile Area 2nd col-->
            <form action="" method="POST" class="mx-5">
                <div class="form-group">
                    <label for="rEmail">Email</label><input type="email" class="form-control"name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" >
                </div>
                <div class="form-group">
                    <label for="rName">Name</label><input type="text"class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
                </div>
                <button type="submit" class="btn btn-danger" name=nameupdate>Update</button>
                <?php if(isset($passmsg)) {echo $passmsg;}?>
</form>
</div><!--END Profile Area 2nd col-->
<?php 
include('includes/footer.php');
?>