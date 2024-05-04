
<?php


session_start();
if (isset($_SESSION['appoimentID'])) {
  $appoimentID = $_SESSION['appoimentID'];
  // Use the $appoimentID as needed...
} else {
  header("Location: Sign in3.html");
}

    echo "<p> $appoimentID </p>";



    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'reg');
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    // SQL query to select license_Plate based on appoimentID
    $sql = "SELECT license_Plate FROM appoinment WHERE appoimentID = $appoimentID";
    
    // Execute the query
    $result = $conn->query($sql);
    
    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Fetch the license_Plate value
        $row = $result->fetch_assoc();
        $plate = $row["license_Plate"];
    } else {
        echo "0 results";
    }
    
    // Close the connection
    $conn->close();
    
    // Now $plate contains the license_Plate value where appoimentID = 1
  











if(isset($_POST["submit"])) {



$appoimentIDup = $_POST['appoimentID'];
$totalAmountup = $_POST['totalAmountup'];





$servername = "localhost";
$username = "root";
$password = "";
$database = "reg";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("error:" . mysqli_connect_error());
} else {

    $sql = "UPDATE `appoinment` SET `totalPrice`='$totalAmountup', `status`='completed' WHERE `appoimentID`=$appoimentIDup";

    // Debugging: Output the SQL query
    echo "Debug: SQL query: $sql<br>";

    if ($con->query($sql)) {

        ?>
        <script type="text/javascript">
            var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
            alert("Appointment complete Successful !!!");
            window.location.href = "admin_dash.php?msg=Messages+";
        </script>
        <?php
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
 
 label.checkbox-label {
        display: flex;
        align-items: center;
        color: white;
    }

    label.checkbox-label input {
        margin-right: 5px;
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


     <!-- Booking Start -->
     <div class="main" id="go-booking">
            <h1 class="text-white mb-0"> . </h1>
            <h1 class="text-white mb-0"> . </h1>
        </div>

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">- Completed Appoinment -</h1>
        </div>


        <?php
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search query
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Prevent SQL injection by using prepared statements
    $sql = "SELECT * FROM services WHERE serviceName LIKE ?";
    $stmt = $conn->prepare($sql);
    // Bind parameter with '%' to match any character sequence before and after the search term
    $search_term = "%$search%";
    $stmt->bind_param("s", $search_term);
    // Execute statement
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no search query, fetch all records
    $sql = "SELECT * FROM services";
    $result = $conn->query($sql);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
           cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Services Search</h2>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Search by Product Name">
        <button type="submit">Search</button>
    </form>

    <h3>Search Results:</h3>
    <table>
        <tr>
            <th>Service ID</th>
            <th>Service Name</th>
            <th>Service Price</th>
            <th>Actions</th>
        </tr>
        <?php
        // Output search results
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['serviceID'] . "</td>";
            echo "<td>" . $row['serviceName'] . "</td>";
            echo "<td>" . $row['servicePrice'] . "</td>";
            echo "<td><a href='services_record_add.php?id=" . $row['serviceID'] . "'>SELECT</a></td>"; // Link to buy_now.php with product id
            echo "</tr>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>




<!-- search services End -->
  
















        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-3 py-10">
                        
                    </div>
                <div class="col-lg-6">   <!--dikkaranna-->
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Services Detail</h1>  
                              
                               <br>





                                      <!-- start seleted services -->    
       
                                      <?php
                                        echo "License Plate: " . $plate;
                                  
// Database connection parameters
$conn = new mysqli('localhost', 'root', '', 'reg');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from multiple tables
$sql = "SELECT s.serviceName, s.servicePrice, sr.appoimentID
      FROM servicerecord sr
      JOIN services s ON sr.serviceID = s.serviceID
      WHERE sr.licensePlate = '$plate'";

$result = $conn->query($sql);

$totalAmount = 0; // Initialize total amount variable

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Orders</title>
    <!-- Add your CSS styles here -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <table>
        <tr>
        <th>Service Name</th>
        <th>Service Price</th>
            
        </tr>
        <?php
      
        // Output data from the SQL query
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Check if the Order ID matches the desired ID
                if ($row['appoimentID'] == $appoimentID) {
                
               
                    echo "<tr>";
                    echo "<td>" . $row['serviceName'] . "</td>";
                    echo "<td>" . $row['servicePrice'] . "</td>";
                    echo "</tr>";
    
                    // Add the service price to the total amount
                    $totalAmount += $row['servicePrice'];
                }
           }
        } else {
            echo "<tr><td colspan='3'>No orders found</td></tr>";
        }
        ?>
       
    
    </table>
</body>
</html>


         <!-- end seleted services -->      
                          
                                

    <!-- end seleted services -->                     



    <form action = "#" method="POST" id ="form1">
                                
                                <div class="row g-3">
                                                

                                    <h4>Total Amount : <?php echo $totalAmount; ?></h4>

                                    <input type="hidden" id="totalAmountup" name="totalAmountup" value="<?php echo isset($totalAmount) ? $totalAmount : ''; ?>" required>
                                    <input type="hidden" id="appoimentID" name="appoimentID" value="<?php echo isset($appoimentID) ? $appoimentID : ''; ?>" required>
                                    
                                        <div class="col-12">
                                            <!-- Helicopter<input type="submit" value="Register" class="btn btn-primary w-100 py-3  spinner-border"> </input>  -->
                                            <input type="submit" name="submit" value="Confirm  Now" class="btn btn-secondary w-100 py-3"> </input>
                                        </div>
                                </div>
                            </form>
                                
                        
                            
                                <br>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking services end -->
             


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


