<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }

    $license_Plate = $_GET['id'];

    $sql = "DELETE FROM appoinment WHERE appoimentID = '$license_Plate'";

    if ($conn->query($sql) === TRUE) {
      header("Location: admin_dash.php?record=serviseRecord");
      exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
