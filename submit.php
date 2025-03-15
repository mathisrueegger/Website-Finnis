<?php

include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nachricht = $_POST['message'];

    $sql = "INSERT INTO einsendungen (name, email, message, date) VALUES ('$name', '$email', '$nachricht', NOW())";

    if ($conn->query($sql) === TRUE) {
        header("Location: danke.html");
        exit();
    } else {
        echo "Fehler: " . $conn->error;
    }

    $conn->close();
}
?>
