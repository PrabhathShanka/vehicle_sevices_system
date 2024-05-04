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


    ?>








<!-- search services End -->


