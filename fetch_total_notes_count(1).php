<?php
require_once 'db_connection.php';

try {
    // Query to get the total count of notes from the database
    $sql = "SELECT COUNT(*) AS count FROM notes_uploadd";
    $result = $conn->query($sql);
    
    // Fetch the count as an associative array
    $row = $result->fetch(PDO::FETCH_ASSOC);

    // Create an associative array with title and count
    $data = array(
        'title' => 'All Notes',
        'count' => $row['count']
    );

    // Convert the array to JSON format
    $json_data = json_encode($data);

    // Set the Content-Type header to indicate JSON data
    header('Content-Type: application/json');

    // Output the JSON data
    echo $json_data;
} catch (PDOException $e) {
    // Handle any errors here
    echo json_encode(array('error' => 'Error fetching data'));
}
?>