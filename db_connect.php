<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kontaktformularfinnis_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>
