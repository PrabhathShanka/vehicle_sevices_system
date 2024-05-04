
<?php


if (isset($_GET['id'])) {
    

    $appoimentID	 = $_GET['id'];
    session_start();
    $_SESSION['appoimentID'] = $appoimentID;

    echo "<p> $appoimentID </p>";

    header("Location: appoinment _completed1.php");
     exit(); 


}
?>