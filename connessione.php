<?php
$servername = "localhost";
$username = "root";
$password = "1000005206";

//create connessione 

$conn = new mysqli($servername, $username, $password);

//check connessione 

if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
echo "Connection ";

$sql = "CREATE DATABASE test";
if($conn->query($sql) === TRUE){
    echo "Creato my database";
}else {
    echo "Error creating database: " . $conn->error;
}

$conn->close()
?>

