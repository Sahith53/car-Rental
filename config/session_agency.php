<?php
// mysqli_connect() function opens a new connection to the MySQL server.
require '../config/connection.php';

$conn = Connect();

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_agency'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT agency_username FROM agency WHERE agency_username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['agency_username'];
?>

