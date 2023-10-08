<?php
// Include your database connection
include '../database/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the column, new value, and registration number from the AJAX request
    $column = $_POST['column'];
    $newValue = $_POST['newValue'];
    $registrationNumber = $_POST['registrationNumber'];

    // Prepare the UPDATE query
    $query = "UPDATE rabiesexposure SET $column = ? WHERE registration_number = ?";
    
    // Prepare and bind parameters
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $newValue, $registrationNumber);

    // Execute the query
    if ($stmt->execute()) {
        echo "Success";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $con->close();
} else {
    echo "Invalid request";
}
?>
