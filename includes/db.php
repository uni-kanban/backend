$servername = "localhost";
$username = "root";
$password = "new_password";
$database = "uni";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}