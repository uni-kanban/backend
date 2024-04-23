$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}