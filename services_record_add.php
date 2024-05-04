<?php
session_start();
if (isset($_SESSION['appoimentID'])) {
  $appoimentID = $_SESSION['appoimentID'];
  // Use the $appoimentID as needed...
} else {
  header("Location: Sign in3.html");
}

if (isset($_GET['id'])) {
  $serviceID = $_GET['id'];
}



// Check if dateInput is set in $_POST
if (isset($_POST['dateInput'])) {
  $dateInput = $_POST['dateInput'];
}
$currentDate = date("Y-m-d");






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
echo "License Plate: " . $plate;


echo "<p> $appoimentID </p>";
echo "<p> $serviceID </p>";
echo "<p> $currentDate </p>";






$con = mysqli_connect('localhost', 'root', '', 'reg');

if (!$con) {
    die("Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO `servicerecord`(`date`, `licensePlate`, `serviceID`, `appoimentID`) VALUES ('$currentDate', '$plate', '$serviceID','$appoimentID')";

if (mysqli_query($con, $sql)) {
    ?>
    <script type="text/javascript">
        var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
        alert("Selected Successful !!!");
        window.location.href = "appoinment _completed1.php";
    </script>
    <?php


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//Disconnect 
mysqli_close($con);



?>


