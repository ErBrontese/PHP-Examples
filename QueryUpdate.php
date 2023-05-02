<?php
require_once('functions/connessione.php');

$sql = "UPDATE MyGuests SET lastname='pippo' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>

