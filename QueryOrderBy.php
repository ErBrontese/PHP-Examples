<?php
require_once('functions/connessione.php');

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>

