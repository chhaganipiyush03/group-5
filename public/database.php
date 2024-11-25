<?php
$host = "localhost";
$user = "root";
$password = "Bhargav@1504";
$dbname = "blog_website";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
