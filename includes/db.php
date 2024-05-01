<?php
$servername = "localhost";
$username = "francesco";
$password = "some_pass";
$database = "uni";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}