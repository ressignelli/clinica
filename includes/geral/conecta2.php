<?php
$servername = "localhost";
$database = "";
$username = "";
$password = "";

$conn2 = mysqli_connect($servername, $username, $password, $database);

if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}
?>