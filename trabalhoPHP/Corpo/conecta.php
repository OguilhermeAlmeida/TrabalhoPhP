<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conveniencia";

//cria
$conn = new mysqli($servername, $username, $password, $dbname);

//confere
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
