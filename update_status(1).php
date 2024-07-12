<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nms"; // Replace "nms" with your actual database name

try {
    // Check if the request is a POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the POST data sent from JavaScript
        $fileId = $_POST['fileId'];
        $status = $_POST['status'];

        // Create connection using PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Update the status in the database
        $sql = "UPDATE notes_uploadd SET status = :status WHERE id = :fileId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':fileId', $fileId, PDO::PARAM_INT);
        $stmt->execute();

        // Close the database connection
        $conn = null;

        // Send a JSON response indicating success
        echo json_encode(['success' => true]);
    } else {
        // Invalid request, send an error JSON response
        echo json_encode(['error' => 'Invalid request.']);
    }
} catch (PDOException $e) {
    // In case of error, send a JSON response with the error message
    echo json_encode(['error' => 'Error updating status: ' . $e->getMessage()]);
}
?>

