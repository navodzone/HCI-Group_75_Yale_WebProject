<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Please Connect to the database.");
}

$sql = "SELECT id, title, image, date FROM news ORDER BY date DESC";
$result = $conn->query($sql);
$news = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
} else {
    echo "0 results";
}
global $newsList;
$newsList = $news;
$conn->close();
?>