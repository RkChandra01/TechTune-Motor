<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="Css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Css/custom.css">
    
    <title>GSMS</title>
    <style>
        /* Custom CSS can be added here */
    </style>
</head>
<body>
    
<!-- Start Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary pl-5 fixed-top">
    <a href="index.php" class="navbar-brand text-light">TechTune Motors</a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="myMenu">
        <ul class="navbar-nav custom-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#Services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#registration" class="nav-link">Registration</a>
            </li>
            <li class="nav-item">
                <a href="User/userLogin.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="#Contact" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
</nav><!-- End Navigation -->
<script>
  // Get the hamburger menu button
  const hamburgerMenuButton = document.querySelector('.navbar-toggler');
  // Add a click event listener to the button
  hamburgerMenuButton.addEventListener('click', () => {
    // Get the mobile menu
    const mobileMenu = document.querySelector('#myMenu');
    // Toggle the mobile menu's visibility
    mobileMenu.classList.toggle('show');
  });
</script>
<header class="jumbotron back-image" style="background-image:url(images/homePage4.jpg);">
    <div class="container text-center">
        <h1 class="text-uppercase text-warning font-weight-bold">Welcome to TechTune Motors</h1>
        <p class="font-italic text-warning">We Keep Your Wheels Turning</p>
        <div class="text-center text-lg-right mt-3">
        <a href="#registration" class="btn btn-danger mr-4">Create</a>
        <a href="User/userLogin.php" class="btn btn-success mr-4">Login</a>
        </div>
    </div>
</header><!-- End Header Jumbotron -->

<!-- Start Introduction Section -->
<div class="container mt-5">
    <div class="jumbotron bg-light border rounded">
        <h3 class="text-center">TechTune Motor Services</h3>
        <p>
            At TechTune Motors, excellence is our commitment. Our website offers effortless access to vital information and streamlined appointment booking, ensuring a seamless experience. Trust us for all your automotive needs, and we'll keep your vehicle operating at peak performance. Our certified technicians, state-of-the-art facilities, transparent pricing, and dedication to customer satisfaction set us apart. We're not just a garage; we're a community-oriented, environmentally conscious team dedicated to your vehicle's well-being. Choose TechTune Motors for quality service and peace of mind, knowing your vehicle is in expert hands.
        </p>
    </div>
</div><!-- End Introduction Section -->

<!-- Start Services Section -->
<div class="container text-center border-bottom mt-5" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-car fa-8x text-success"></i></a>
            <h4 class="mt-4">4-Wheeler</h4>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-tools fa-8x text-danger"></i></a>
            <h4 class="mt-4">Mechanical Repairs</h4>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-paint-roller fa-8x text-warning"></i></a>
            <h4 class="mt-4">Paint and Body Work</h4>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="User/userLogin.php"><i class="fas fa-wrench fa-8x text-secondary"></i></a>
            <h4 class="mt-4">Customization</h4>
        </div>
    </div>
</div><!-- End Our Services Section -->

<!-- Start Registration Form Section -->
<?php include('userRegistration.php') ?>
<!-- End Registration Form Section -->

<!-- ... (previous code) ... -->

<!-- Start Happy Customer Section -->
<div class="jumbotron bg-secondary mt-5">
    <div class="container">
        <h2 class="text-center text-dark">Happy Customers</h2>
        <div class="row mt-5">
            <!-- Customer 1 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-light mb-2">
                    <div class="card-body text-center">
                        <img src="images/p2.jpg" class="img-fluid rounded-circle" style="width: 100px; height: 100px;" alt="Customer 1">
                        <h4 class="card-title text-dark"><span style="color: #007bff;">Saanvi R</span></h4>
                        <p class="card-text text-dark custom-font">TechTune Motors is amazing! They fixed my car quickly, and the service was outstanding. I highly recommend them.</p>
                    </div>
                </div>
            </div>
            <!-- Customer 2 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-light mb-2">
                    <div class="card-body text-center">
                        <img src="images/p3.png" class="img-fluid rounded-circle" style="width: 100px; height: 100px;" alt="Customer 2">
                        <h4 class="card-title text-dark"><span style="color: #007bff;">Himanshu Gupta</span></h4>
                        <p class="card-text text-dark custom-font">I've been a customer of TechTune Motors for years. They always provide top-notch service, and their staff is friendly and knowledgeable.</p>
                    </div>
                </div>
            </div>
            <!-- Customer 3 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-light mb-2">
                    <div class="card-body text-center">
                        <img src="images/p4.jpg" class="img-fluid rounded-circle" style="width: 100px; height: 100px;" alt="Customer 3">
                        <h4 class="card-title text-dark"><span style="color: #007bff;">Pankaj Kumar</span></h4>
                        <p class="card-text text-dark custom-font">TechTune Motors saved the day! I had a breakdown, and they came to my rescue quickly. Their service is reliable and efficient.</p>
                    </div>
                </div>
            </div>
            <!-- Customer 4 -->
            <div class="col-lg-3 col-sm-6">
                <div class="card bg-light mb-2">
                    <div class="card-body text-center">
                        <img src="images/veer.jpg" class="img-fluid rounded-circle" style="width: 100px; height: 100px;" alt="Customer 4">
                        <h4 class="card-title text-dark"><span style="color: #007bff;">Veer</span></h4>
                        <p class="card-text text-dark custom-font">I trust TechTune Motors with all my car maintenance needs. They are professional, honest, and always provide top-quality service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Happy Customer Section -->

<!-- ... (remaining code) ... -->

<!-- Start Contact Us Section -->
<div class="container mt-5" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        <!-- Contact form goes here -->
        <?php include('contactForm.php') ?>

        <!-- Contact Info Column -->
        <div class="col-md-4 text-center">
            <strong>Headquarter:</strong><br>
            TechTune Motors,<br>
            RR Nagar, Bengaluru<br>
            <a href="#" target="_blank">www.techtunemotors.com</a><br>
            <br>
            <br>
            <strong>Co-Partner:</strong><br>
            Varcons Technologies Pvt Ltd<br>
            MG Road, Bengaluru<br>
            <a href="#" target="_blank">https://www.varconstech.com/</a><br>
            <br>
            <br>
        </div> 
    </div>
</div><!-- End Contact Us Section -->


<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span class="pr-2">Follow Us: </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <small>Designed by R.K Chandra &copy; 2023</small>
                <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<!-- <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>
