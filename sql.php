<?php
$servername = "sql101.epizy.com"; //usually localhost
$username = "epiz_23459637"; //db username
$password = "9nVwrzhkZ"; //db password
$dbname = "epiz_23459637_a"; //db name

$Email = $_GET['Email'];
$StartDate = $_GET['StartDate'];
$EndDate = $_GET['EndDate'];
$CardType = $_GET['CardType'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO GiftCards (Email, StartDate, EndDate, CardType) VALUES (". $Email . "," . $StartDate . "," . $EndDate . "," . $CardType . ")";



if ($conn->query($sql)) {
    echo "Done";
} else {
    echo "Error";
}

$conn->close();
?>
