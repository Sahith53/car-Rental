<?php
include 'config/connection.php'; // Adjust the path if needed

$conn = Connect();

if ($conn) {
    echo "Database connection successful!";
}
?>
