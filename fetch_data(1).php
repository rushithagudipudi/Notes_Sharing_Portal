<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nms"; 

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the random key entered by the user
    $randomKey = $_POST['randomKey'];

    // Fetch the file information associated with the random key from the database
    $sql = "SELECT file_name, file_path FROM uploaded_files WHERE random_key = '$randomKey'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // File found in the database, proceed with download
        $row = $result->fetch_assoc();
        $fileName = $row['file_name'];
        $filePath = $row['file_path'];

        if (file_exists($filePath)) {
            // Send the file for download with appropriate content type and filename
            header('Content-Type: application/msword'); // Set the content type to Word document
            header('Content-Disposition: attachment; filename="' . $fileName . '"'); // Set the filename from database
            readfile($filePath);
            exit();
        } else {
            die("File not found.");
        }
    } else {
        die("Invalid random key.");
    }
}

$conn->close();
?>
