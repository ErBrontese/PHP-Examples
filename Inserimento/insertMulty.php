<?php
require_once('functions/connessione.php');
// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
for( $i=0; $i<100; $i++){
$firstname = "John$i";
$lastname = "Doe$i";
$email = "john$i@example.com";
$stmt->execute();
}

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

