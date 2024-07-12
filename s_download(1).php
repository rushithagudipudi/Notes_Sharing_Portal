<?php
function downloadFile($randomKey) {
    // Database connection (similar to the upload script)
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "nmss";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetching the file information from the database
    $sql = "SELECT file_name, random_key FROM uploaded_files WHERE random_key = $randomKey";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fileName = $row["file_name"];
        $targetFilePath = "files/" . $row["random_key"] . '_' . $fileName;

        // Check if the file exists
        if (file_exists($targetFilePath)) {
            // Send file to the browser for download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $fileName . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($targetFilePath));
            readfile($targetFilePath);
            exit;
        } else {
            die("File not found!");
        }
    } else {
        die("Invalid random key!");
    }

    $conn->close();
}

// Check if the form is submitted and the random key is provided
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["randomKeyInput"])) {
    $randomKey = $_POST["randomKeyInput"];
    downloadFile($randomKey);
} else {
    // If the form is not submitted, redirect back to student.html
    header("Location: student.html");
    exit;
}
?>
