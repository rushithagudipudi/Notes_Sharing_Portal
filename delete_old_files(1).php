<?php
// Database connection (similar to the upload script)
$dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "nmss";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Calculate the timestamp of one minute ago
$oneMinuteAgo = time() - 60;

// Query to delete files older than one minute
$sql = "DELETE FROM uploaded_files WHERE timestamp < $oneMinuteAgo";
$conn->query($sql);

$conn->close();
?>
