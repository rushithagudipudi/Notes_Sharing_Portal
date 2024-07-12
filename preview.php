<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nms"; // Replace with your actual database name


if (isset($_GET['fileId']) && isset($_GET['filename'])) {
    $fileId = $_GET['fileId'];
    $filename = $_GET['filename'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT filetype, filename FROM notes_uploadd WHERE id = :fileId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fileId', $fileId, PDO::PARAM_INT);
        $stmt->execute();
        $fileData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fileData) {
            $fileType = $fileData['filetype'];
            $filename = $fileData['filename'];

            // Construct the URL to the target folder dynamically
            $targetFolderURL = "target/" . $filename;

            // Check if the file is an image or PDF
            if (strpos($fileType, 'image') === 0 || strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'pdf') {
                // Open images and PDFs in the browser using iframe
                echo "<iframe src='$targetFolderURL' width='100%' height='500px' frameborder='0'></iframe>";
            } else {
                // For other file types, provide a link for download
                echo "<a href='$targetFolderURL' target='_blank'>Click here to view/download the file</a>";
            }
        } else {
            echo "File not found.";
        }

    } catch (PDOException $e) {
        echo "Error fetching data: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>

