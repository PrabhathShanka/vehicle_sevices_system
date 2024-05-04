<?php
session_start();
if (isset($_SESSION['nic'])) {

    $NIC = $_SESSION['nic'];
} else {

    exit();
}

if (isset($_GET['id'])) {
    $license_Plate	 = $_GET['id'];  
}
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

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #e5e5e5;
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




     <!-- Vehicle Details  Start -->
     <div class="main" id="go-contact">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-primary text-uppercase">- already booking appointment -</h1>
 
                
  
  
                <?php
$conn = new mysqli('localhost', 'root', '', 'reg');
if ($conn->connect_error) {
    die('Not Connected..');
} else {

    $rawValue = 'pending'; 

    $sql = "SELECT * FROM appoinment";
    $data = $conn->query($sql);

    // Move the table and header row outside of the loop
    echo "<table>
            <tr>
                <th>Date</th>
                <th>Time</th>

            </tr>";

    while ($raw = mysqli_fetch_array($data)) {
        if ($raw[7] == $rawValue) { 
            echo "<tr>
                    <td>" . $raw[3] . "</td>
                    <td>" . $raw[4] . "</td>
       
                </tr>";
        }
    }

    // Close the table outside of the loop
    echo "</table>";



    $conn->close();
}
?>
                
            </div>
        </div>
    </div>
    <!-- Vehicle Details  End -->


     <!-- Booking Start -->
     <div class="main" id="go-booking">
            <h1 class="text-white mb-0"> . </h1>
            <h1 class="text-white mb-0"> . </h1>
        </div>


   
   


        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">- Make an Appoinment -</h1>
        </div>

        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-3 py-10">
                        
                    </div>
                <div class="col-lg-6">   <!--dikkaranna-->
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Schedule Auto Service</h1>  
                               <h4> <?php echo "Your NIC nunber : $NIC"; ?></h4>
                               <br>

                               <h4> <?php echo "Your license Plate nunber : $license_Plate";  $_SESSION['license_Plate'] = $license_Plate;?></h4>
                               <br>


                            <form action = "appoinment.php" method="POST" id ="form1">
                                
                                <div class="row g-3">
                                        

                                      

                                    <h4>Appointment Details</h4>

                                        <div class="col-12 col-sm-6">
                                            <select class="form-select border-0" style="height: 55px;" name ="package" required>
                                                <option selected>--- Select A Package ---</option>
                                                <option value="Basic Package Rs.4000.00">Basic Package</option>
                                                <option value="Standard Package Rs.10000.00">Standard Package</option>
                                                <option value="Premium Package Rs.20000.00">Premium Package</option>    
                                                <option value="Other">Other</option>                                             
                                            </select>
                                        </div>

                                    

                                        <div class="col-12 col-sm-6">
                                            <input type="date" name="date" class="form-control border-0" placeholder="date" style="height: 55px;"required>
                                        </div>

                                        <div class="col-12 col-sm-6" name="timeslot">
                                            <select class="form-select border-0" style="height: 55px;" name="timeslot"required>
                                                <option selected>--- Choose Your Time Slot ---</option>
                                                <option >Morning</option>
                                                <option value="1 (8.00 a.m  - 9 a.m)">8.00 a.m  - 9 a.m</option>
                                                <option value="2 (10.00 a.m - 11.00 a.m)">10.00 a.m - 11.00 a.m</option>
                                                <option value="3 (11.00 a.m - 12.00 p.m)">11.00 a.m - 12.00 p.m</option>
                                                <option value="4 (12.00 p.m - 1.00 p.m)">12.00 p.m - 1.00 p.m</option>
                                                <option >Evening</option>
                                                <option value="5 (2.00 a.m - 3.00 p.m)">2.00 a.m - 3.00 p.m</option>
                                                <option value="6 (3.00 a.m - 4.00 p.m)">3.00 a.m - 4.00 p.m</option>
                                                <option value="7 (4.00 a.m - 5.00 p.m)">4.00 a.m - 5.00 p.m</option>
                                                <option value="8 (5.00 a.m - 6.00 p.m)">5.00 a.m - 6.00 p.m</option>
                                            </select>
                                        </div>
                                    <br>
                                        <div class="col-12">
                                            <textarea class="form-control border-0"  name="request" placeholder="Special Request (Optional)"></textarea>
                                        </div>


                                    
                                        <div class="col-12">
                                            <!-- Helicopter<input type="submit" value="Register" class="btn btn-primary w-100 py-3  spinner-border"> </input>  -->
                                            <input type="submit" name="submit" value="Book Now" class="btn btn-secondary w-100 py-3"> </input>
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