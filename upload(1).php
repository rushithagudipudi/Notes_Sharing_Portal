<?php
function generateRandomKey() {
    $min = 100000000; // Minimum 9-digit number (100,000,000)
    $max = 999999999; // Maximum 9-digit number (999,999,999)
    return rand($min, $max);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fileInput"]) && $_FILES["fileInput"]["error"] === UPLOAD_ERR_OK) {
    $uploadedFile = $_FILES["fileInput"];
    $randomKey = generateRandomKey();

    // Database connection and insertion code (you need to replace database credentials with your own)
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "nmss";
    
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Inserting file name, random key, and timestamp into the database
    $fileName = $uploadedFile["name"];
    $timestamp = time();
    $sql = "INSERT INTO uploaded_files (file_name, random_key, timestamp) VALUES ('$fileName', '$randomKey', $timestamp)";
    
    if ($conn->query($sql) === TRUE) {
        // File uploaded and database insertion successful

        // Move the uploaded file to the "files" folder
        $targetDirectory = "files/";
        $targetFileName = $randomKey . '_' . $uploadedFile["name"];
        $targetFilePath = $targetDirectory . $targetFileName;

        if (move_uploaded_file($uploadedFile["tmp_name"], $targetFilePath)) {
            echo json_encode(array("randomKey" => $randomKey));
        } else {
            echo json_encode(array("error" => "File upload error: Unable to move the uploaded file."));
        }
    } else {
        // Error occurred during database insertion
        echo json_encode(array("error" => "Database error: " . $conn->error));
    }

    $conn->close();
}
?>
