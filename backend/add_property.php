<?php
include 'dbconnect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$city = $_POST['city'];
$bhk = $_POST['bhk'];

$sql = "INSERT INTO properties (name, price, city, bhk) VALUES ('$name', '$price', '$city', '$bhk')";
if ($conn->query($sql) === TRUE) {
    echo "Property added successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
