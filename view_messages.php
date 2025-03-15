<?php
    include("db_connect.php");

    $sql = "SELECT * FROM einsendungen";            
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class=\"message_item\">";
            echo "<h1>" . $row["name"] . "</h1>";
            echo "<p>" . $row["message"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Gesendet am: " . $row["date"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Keine Nachrichten vorhanden!";
    }

    mysqli_close($conn);
?>
