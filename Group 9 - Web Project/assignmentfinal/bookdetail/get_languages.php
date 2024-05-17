<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM language";
$result = $conn->query($sql);

$languages = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $languages[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($languages);
?>
