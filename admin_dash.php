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

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="css/dashboard button.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    <style>
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table tr{background-color: #f2f2f2;}
            
            #table tr:hover {background-color: #ddd;}
            
            #table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #cd0606;
                color: white;
            }
            .heading{
                    color: rgb(13, 0, 114);
                    font-size:100%;
                    }
            .heading:hover {
                    color: rgb(255, 255, 255);
                    font-size:110%;
                    }

            .sidebar0{
                    display:flex;
            }

            .sidebar1{
                    width:10%;
            }

            .sidebar2{
                    width:90%;
            }


            .box4 {
                width: 150%;
                height: 150%;
                
            }

            
    </style>
</head>

<body>

<div class="main" id="go-home"></div>

<!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
 Spinner End -->


 
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
                    <a href="?msg=Messages+" class="nav-item nav-link ">Pending Appoinment</a>
                    <a href="?record=serviseRecord" class="nav-item nav-link">Service Record</a>
                    <a href="?app=Appoinment" class="nav-item nav-link">Vehicle Details</a>
                    <a href="?vri=+Register+Info" class="nav-item nav-link">Register Details</a>
                    <a href="?dashb=+Dashboard" class="nav-item nav-link">service managed  </a>
                    <a href="admin_setting.php" class="nav-item nav-link">settings</a>



                        <!-- <div class="nav-item dropdown">
                            <div class="testimonial-item text-center">
                                <img class="bg-light rounded-circle p-2 mx-auto mb-10" src="img/feedbak4.jpg" style="width: 70px; height: 70px;">
                            </div> 
                            <div class="dropdown-menu fade-up m-0">
                                <a href="index.html" class="dropdown-item">Log Out </a>
                            </div>
                        </div> -->

                        <div class="nav-item dropdown">
                            <a href="index.html" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
                        </div>
                </div>


        </div>


                
                <!--<div class="nav-item dropdown">
                    <img  src="img/profile.png" alt="Image 1" width="50" height="50">  class="bg-light rounded-circle p-2 mx-auto mb-3"
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.html" class="dropdown-item">Log Out </a>
                    </div>
                </div>-->

                
        
    </nav>
    <!-- Navbar End -->









<div class="sidebar0">



    <div class="sidebar1">
                            
                            <div class="sidebar">
                                        
                                    <div class="logo-details">
                                        
                                            
                                            
                                    </div>
                                        <!--<ul class="nav-list"> -->
                                                    <li>
                                                        <br>
                                                        <div class="logo-details">
                                                            <div class="logo_name">Admin Panel</div>
                                                            <i class='bx bx-menu' id="btn" ></i>
                                                        </div>
                                                    </li>
                                                    
        
                                                    <li>
                                                    <a href='?msg=Messages+'>
                                                        <i class='bx bx-chat' ></i>
                                                        <span class="links_name">Messages</span>
                                                    </a>
                                                    <span class="tooltip">Pending Appoinment</span>
                                                    </li>



                                                    
        
                                                   

                                                    <li><a href='?record=serviseRecord'>
                                                        <i class='bx bx-search' ></i>
                                                        <input type="text" placeholder="Search...">
                                                        <span class="tooltip">Service Record </span>
                                                    </li>


                                                    <li>
                                                    <a href='?app=Appoinment'>
                                                        <i class='bx bx-pie-chart-alt-2' ></i>
                                                        <span class="links_name">Appoinment</span>
                                                    </a>
                                                    <span class="tooltip">Vehicle Details</span>
                                                    </li>
                                  
                                             
                                                    <li>
                                                    <a href='?vri=+Register+Info'>
                                                        <i class='bx bx-user' ></i>
                                                        <span class="links_name">Register Details</span>
                                                    </a>
                                                    <span class="tooltip">Register Details</span>
                                                    </li>


                                                    <li>
                                                        <a href="?dashb=+Dashboard">
                                                        <i class='bx bx-grid-alt'></i>
                                                        <span class="links_name">Dashboard</span>
                                                        </a>
                                                        <span class="tooltip">service managed</span>
                                                    </li>
                                                    
                                                    <li class="profile">
                                                    <a href="index.html">
                                                        <div class="profile-details">
                                                                    <div class="lout">  &nbsp;&nbsp;&nbsp;&nbsp;Log Out</div>      
                                                        </div>
                                                        <i class='bx bx-log-out' id="log_out" >&nbsp;&nbsp;</i>
                                                    </a>
                                                    </li>
                                        <!--</ul>-->
                            </div>
        
    </div>

    <div class="sidebar2">

                      
     
<?php

    //Pending Appoinment start
    if(isset($_GET['msg'])){
        

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
    $sql = "SELECT * FROM appoinment WHERE license_Plate LIKE ?";
    $stmt = $conn->prepare($sql);
    // Bind parameter with '%' to match any character sequence before and after the search term
    $search_term = "%$search%";
    $stmt->bind_param("s", $search_term);
    // Execute statement
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no search query, fetch all records
    $sql = "SELECT * FROM appoinment";
    $result = $conn->query($sql);
}

$conn->close();

$rawValue = "pending"
?>



    <h2>Pending Appoinment</h2>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Search by Product Name">
        <button type="submit">Search</button>
    </form>

    <h3>Search Results:</h3>
    



    <?php 
echo "<table border='1px' id='table' align='right'><tr><th>License Plate</th><th>package</th><th>Date</th><th>Time</th><th>Message</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
  if ($row['status'] == $rawValue) {
    // Use $row instead of $raw
    echo "<tr><td>".$row['license_Plate']."</td><td>".$row['package']."</td><td>".$row['date']."</td><td>".$row['time']."</td><td>".$row['message']."</td><td>
    <a href='appoinment _completed.php?id=".$row['appoimentID']."'><b>| completed |</b></a>
    <a href='pending_appoinment_delete.php?id=".$row['appoimentID']."'><b>| Delete |</b></a></td></tr>";
}
}
echo "</table>";


    
}
//Pending Appoinment end



   //servise record

   if(isset($_GET['record'])){
    $conn= new mysqli('localhost','root','','reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{  
        ?>
        <br>
        <h1>Service Record</h1> <br> <?php
        $rawValue = 'completed';
        $sql="select * from appoinment";
        $data=$conn->query($sql);
    
        
        echo "<table border='1px' id='table' align = 'right'> <tr><th>Date</th><th>License Plate</th><th>package</th><th>Total Price</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            if ($raw[7] == $rawValue) {
            echo "<tr><td>".$raw[3]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[6]."</td><td>
            
            <a href='serviceRecord_delete.php?id=".$raw[0]."'><b> |Delete| </b></a>
            <a href='service_Details_admin.php?id=".$raw[0]."'><b>| Service Details |</b></a></td></tr>";
            
            }
        }
        echo"</table>";
        $conn->close();
    }

}

//end servise record


    //Vehicle Details start
                                                if(isset($_GET['app'])){
                                                    $conn= new mysqli('localhost','root','','reg');
                                                    if($conn->connect_error){
                                                        die('Not Connected..');
                                                    }
                                                    else{
                                                        ?>
                                                        <br>
                                                        <h1>Vehicle Details</h1> <br> <?php
                                                        $sql="select * from vehicle";
                                                        $data=$conn->query($sql);
                                                        echo "<table border='1px' id='table' align = 'right'><th>License Plate</th><th>NIC Number</th><th>Model</th><th>Manufactured Year</th><th>Actions</th></tr>";
                                                        while($raw = mysqli_fetch_array($data)){
                                                            echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>
                                                           
                                                            <a href='vrhicle_details_delete_admin.php?id=".$raw[0]."' ><b>| Delete |</b></a></td></tr>";
                                                        }
                                                        echo"</table>";
                                                        $conn->close();
                                                    }
                                                }
                                                //Vehicle Details end



                                            


                                             




?>
 
<?php
// Registration Display
if(isset($_GET['vri'])){
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Register Details</h1>
        </div> <br>
        <?php
        $sql = "SELECT * FROM registration";
        $data = $conn->query($sql);
        echo "<table border='1px' id='table'> <tr><th>NIC Number</th><th>Fist Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>Contact No</th><th>Email</th><th>Password</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>".$raw[4]."</td><td>".$raw[5]."</td><td>".$raw[6]."</td><td>".$raw[7]."</td><td>
            <a href='register_update_admin.php?id=".$raw[0]."'><b>| Update |</b></a>
            <a href='register_delete.php?id=".$raw[0]."'><b>| Delete |</b></a></td></tr>";
        }
        echo "</table>";
        $conn->close();
    }
}
?>




                                                  <!-- Reg end -->


                                                  <?php
// service managed

if(isset($_GET['dashb'])){
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }
    else{
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Service Managed</h1>
        </div> <br>
        <?php
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Service</title>
        </head>
        <body>
            <h4>Insert Service</h4>
            <form action="service_managed_insert.php" method="post">
                <label for="serviceName">Service Name:</label>
                <input type="text" id="serviceName" name="serviceName" required><br>
        
                <label for="servicePrice">Service Price:</label>
                <input type="number" id="servicePrice" name="servicePrice" required><br>
        
                <input type="submit" value="INSERT">
            </form>
        </body>
        </html>
        
        <?php
        $sql = "SELECT * FROM services";
        $data = $conn->query($sql);
        echo "<table border='1px' id='table'> <tr><th>Service Name</th><th>Service Price</th><th>Actions</th></tr>";
        while($raw = mysqli_fetch_array($data)){
            echo "<tr><td>".$raw[1]."</td><td>".$raw[2]."</td><td>

            <a href='service_managed_update.php?id=".$raw[0]."'><b>| Update |</b></a>
            <a href='service managed_delete.php?id=".$raw[0]."'><b>| Delete |</b></a></td></tr>";

            
        }
        echo "</table>";
        $conn->close();
        
    }


}
?>




                                                  <!-- service managed end -->

                                                  

    </div>

</div>










    <script src="js/dashboard button.js"></script>
    
</body>

</html>