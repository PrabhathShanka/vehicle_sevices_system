

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'reg');
    if($conn->connect_error){
        die('Not Connected..');
    }

    $license_Plate = $_GET['id'];

    // Use single quotes around the license plate value
    $sql = "DELETE FROM vehicle WHERE license_Plate = '$license_Plate'";

    if ($conn->query($sql) === TRUE) {
      header("Location: index-AfterLogin.php#go-contact");
      exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
