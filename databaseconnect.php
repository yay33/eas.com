<?php
$servername = "localhost";
$database = "eas";
$username = "root1";
$password = "root1";

$db = @new mysqli($servername, $username, $password, $database);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>