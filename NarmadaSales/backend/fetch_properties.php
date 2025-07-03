<?php
include 'dbconnect.php';

$result = $conn->query("SELECT * FROM properties");

$properties = [];

while ($row = $result->fetch_assoc()) {
    $properties[] = $row;
}

echo json_encode($properties);

$conn->close();
?>
