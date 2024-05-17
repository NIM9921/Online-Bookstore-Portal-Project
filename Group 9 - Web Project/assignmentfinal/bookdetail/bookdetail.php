<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['booktitle'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$publisher = $_POST['publisher'];
$price = $_POST['price'];
$pubdate = $_POST['pubdate'];
$description = $_POST['bookdes'];
$language_id = $_POST['language'];
$category_id = $_POST['category'];
$comments = $_POST['message'];

$sql = "INSERT INTO bookdetail (title, author, isbn, publisher, price, date, description, language_id, category_id, comments)
        VALUES ('$title', '$author', '$isbn', '$publisher', '$price', '$pubdate', '$description', '$language_id', '$category_id', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Book details added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
