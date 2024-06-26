<?php
if (isset($_GET['id'])) {
  $NIC	 = $_GET['id'];  


  $conn = new mysqli('localhost', 'root', '', 'reg');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve user data
$sql = "SELECT * FROM registration WHERE NI = '$NIC'"; // Replace 'user_NI' with the specific user's NI

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      
      $firstName = $row["first"];
        $lastName = $row["last"];
        $gender = $row["gen"];
        $address = $row["addre"];
        $number = $row["num"];
        $email = $row["em"];
        $pass1 = $row["pass1"];
    }
} else {
    echo "0 results";
}

$conn->close();
}



if(isset($_POST["submit"])) {

 
  $first = $_POST['firstName'];
  $last = $_POST['lastName'];
  $gen = $_POST['gender'];
  $addre = $_POST['address'];
  $num = $_POST['number'];
  $em = $_POST['email'];
  $password1 = $_POST['pass1'];
  $password2 = $_POST['pass2'];



$servername = "localhost";
$username = "root";
$password = "";
$database = "reg";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
  die("error:" . mysqli_connect_error());
}   if($password1 == $password2) {

 $sql = "UPDATE `registration` SET `first`='$first',`last`='$last',`gen`='$gen',`addre`='$addre',`num`='$num',`em`='$em',`pass1`= '$password1' WHERE `NI`='$NIC'";
 

  // Debugging: Output the SQL query
  echo "Debug: SQL query: $sql<br>";

  if ($con->query($sql)) {
      echo "Registration updated successfully..";
      header("Location: admin_dash.php?vri=+Register+Info");
      exit();
  } else {
      echo "Something went wrong: " . $con->error;
  }

  $con->close();

}


}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Service Centers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .heading{
        color: rgb(13, 0, 114);
        font-size:100%;
        }
        .heading:hover {
        color: rgb(255, 255, 255);
        font-size:110%;
        }

    </style>
</head>

<body>

    <div class="main" id="go-home"></div>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <!--i class="fa fa-car me-3"--> </i>GPSI PREMIUM</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="admin_dash.php?vri=+Register+Info" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Home<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


<!--Sign in Start-->

<div class="container-fluid bg-secondary booking my-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-3 py-10">
                
            </div>
         <div class="col-lg-6">   <!--dikkaranna-->
                <div class="bg-primary h-100 d-flex flex-column justify-content-center  p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-center text-white mb-4">Update Registration</h1>  
                    <h4> <?php echo "Your NIC nunber : $NIC"; ?></h4>


                    <form action="#" method="POST">
    <div class="row g-3">
        <div class="col-12 col-sm-6">
            <h5>First Name:</h5>
            <input type="text" name="firstName" class="form-control border-0" placeholder="First Name" style="height: 55px;" value="<?php echo isset($firstName) ? $firstName : ''; ?>" required>
        </div>
        <div class="col-12 col-sm-6">
            <h5>Last Name:</h5>
            <input type="text" name="lastName" class="form-control border-0" placeholder="Last Name" style="height: 55px;" value="<?php echo isset($lastName) ? $lastName : ''; ?>" required>
        </div>
        <div class="col-12 col-sm-6">
            <h5>Gender:</h5>
            <br>&nbsp;&nbsp;
            <input type="radio" name="gender" id="male" value="Male" <?php echo (isset($gender) && $gender === 'Male') ? 'checked' : ''; ?>>
            <b><span id="male">male</span></b>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" id="female" value="Female" <?php echo (isset($gender) && $gender === 'Female') ? 'checked' : ''; ?>>
            <B><span id="female">female</span></B>
        </div>
        <div class="col-12 col-sm-6">
            <h5>Address:</h5>
            <input type="text" name="address" class="form-control border-0" placeholder="Address" style="height: 55px;" value="<?php echo isset($address) ? $address : ''; ?>" required>
        </div>
        <div class="col-12 col-sm-6">
            <h5>Contact Number:</h5>
            <input type="text" name="number" class="form-control border-0" placeholder="Contact" style="height: 55px;" value="<?php echo isset($number) ? $number : ''; ?>" required>
        </div>
        <div>
            <h5>Email:</h5>
            <input type="email" name="email" class="form-control border-0" placeholder="Email" style="height: 55px;" value="<?php echo isset($email) ? $email : ''; ?>" required>
            <br>
            <h5>Password:</h5>
            <input type="password" name="pass1" class="form-control border-0" placeholder="Password" style="height: 55px;"  value="<?php echo isset($pass1) ? $pass1 : ''; ?>"required>
            <br>
            <h5>Confirm Password:</h5>
            <input type="password" name="pass2" class="form-control border-0" placeholder="Confirm Password" style="height: 55px;" value="<?php echo isset($pass1) ? $pass1 : ''; ?>" required>
            <br>
        </div>
        <div class="col-12">
        <input type="submit" name="submit" value="UPDATE NOW" class="btn btn-secondary w-100 py-3"> </input>
        </div>
        <div class="text-center text-white">
            Already a member? &nbsp;
            <a class="heading" href="Sign in.html">Login</a>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Sign in end-->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-0 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-0">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>GPSI Premium, Homagama, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9476 771 1597</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>gpsi@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <ul><li><a>Tyre Replacement</a> </li>
                        <li><a>Engine Service</a> </li>
                        <li><a>Tuning Service </a> </li>
                        <li><a>System Service</a> </li>
                        <li> <a>Washing Service</a> </li> </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Informations</h4>
                    <a class="btn btn-link" href="Terms and Conditions.html">Terms and Conditions</a>
                    <a class="btn btn-link" href="FAQ.html">FAQ</a>
                    <a class="btn btn-link" href="Privacy.html">Privacy</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                        &copy; All Right Reserved.
                        Designed By <a class="border-bottom" href="index.html">GPSI Premium</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>