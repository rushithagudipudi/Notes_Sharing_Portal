<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nms"; // Replace "nms" with your actual database name

try {
    // Create connection using PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if "status" parameter is present and set to "pending"
    $status = isset($_GET['status']) && $_GET['status'] === 'pending' ? 'pending' : '';

    // Fetch data from the database based on the "status" parameter
    $sql = "SELECT id, branch, role, name, subject, topic, filetype, description, status FROM notes_uploadd";
    if ($status === 'pending') {
        $sql .= " WHERE status = 'pending'";
    }
    $result = $conn->query($sql);

    // Check if there are any rows in the result
    if ($result->rowCount() > 0) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $data = array(); // If there are no rows, set $data as an empty array
    }

    // Close the database connection
    $conn = null;

    // Convert the $data array to JSON and echo it
    echo json_encode($data);
} catch (PDOException $e) {
    die("Error fetching data: " . $e->getMessage());
}






?>
