<?php

//database config
$host = "localhost";
$user= "root";
$pwd = "1234";
$database = "bookstore";

//connect to database
$conn = mysqli_connect($host, $user, $pwd, $database);

//check if error connecting to database
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

//example query and usage
//include_once "connect-db.php";
//$sql = "SELECT * FROM admin";
//$result = mysqli_query($conn, $sql);
//echo $result->fetch_all(MYSQLI_ASSOC)[0]['email'];

?>