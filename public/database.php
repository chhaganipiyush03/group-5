<?php
$host = "localhost";
$user = "root";
$password = "abc@123";
$dbname = "blog_website";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
