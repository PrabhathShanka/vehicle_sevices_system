<?php
session_start();

if (isset($_SESSION['nic'])) {
    $NIC = $_SESSION['nic'];
    echo "No of records inserted: . $NIC";
} else {
    header("Location: Sign in3.html");
    exit();
}


if(isset($_POST["submit"])) {
    $license_Plate = $_POST['license_Plate'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "reg";
    
    $con = mysqli_connect($servername, $username, $password, $database);
    
    if (!$con) {
        die("error:" . mysqli_connect_error());
    } else {
    
        $sql = "INSERT INTO `vehicle` (`license_Plate`,`NI`, `model`, `manufacturedYear`) VALUES ('$license_Plate','$NIC','$model',$year)";
    
        // Assuming $noa should be a variable representing a condition. Define it accordingly.
        $noa = 2;
    
        if ($noa < 5) {
            if ($con->query($sql)) {
                echo "Vehicle insert successful..";
                header("Location: index-AfterLogin.php#go-contact");
                exit();
            } else {
                echo "Error inserting data: " . $con->error;
            }
        } else {
            echo "Time Slot is Full.. Please Choose another Time..";
        }
    
        $con->close();
    }
    }
    ?>



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GPSI Service Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon1.png" rel="icon">

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

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <a href="#go-home" class="nav-item nav-link "></a>
                    <a href="#go-about" class="nav-item nav-link"></a>
                    <a href="#go-services" class="nav-item nav-link"></a>
                    <a href="#go-pricing" class="nav-item nav-link"></a>
                    <a href="#go-booking" class="nav-item nav-link active"></a>
                    <a href="#go-contact" class="nav-item nav-link"></a>

                        <div class="nav-item dropdown">
                            <a href="index-AfterLogin.php" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Home</a>
                        </div>
                </div>
        </div>   
    </nav>
    <!-- Navbar End -->


     <!-- Booking Start -->
     <div class="main" id="go-booking">
            <h1 class="text-white mb-0"> . </h1>
            <h1 class="text-white mb-0"> . </h1>
        </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">- Add New Vehicle -</h1>
        </div>

        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-3 py-10">
                        
                    </div>
                <div class="col-lg-6">   <!--dikkaranna-->
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Vehicle Details</h1>  
                               <h4> <?php echo "Your NIC nunber : $NIC"; ?></h4>
                               <br>
                            <form action = "#" method="POST" id ="form1">
                                
                                <div class="row g-3">

                                        <div class="col-12 col-sm-6">
                                      
                                           
                                            <input type="text" name = "license_Plate" class="form-control border-0" placeholder="License plate (eg: CAB-7598)" style="height: 55px;"required>
                                            <br>
                                            <input type="text" name = "model"  class="form-control border-0" placeholder="Model (eg: TOYOTA)" style="height: 55px;"required>
                                            <br>
                                            <input type="number" name = "year"  class="form-control border-0" placeholder="Year (eg: 2022)" style="height: 55px;"required>
                                            <br>
                                        </div>
                                        <div class="col-12">
                                            <!-- Helicopter<input type="submit" value="Register" class="btn btn-primary w-100 py-3  spinner-border"> </input>  -->
                                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-secondary w-100 py-3"> </input>
                                        </div>
                                </div>
                            </form>  
                           <br>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking End -->
             


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

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>