<?php
$servername = "localhost";
$username = "root";
$password = "1000005206";
$dbname = "test";

//create connessione 

$conn = new mysqli($servername, $username, $password,$dbname);

//check connessione 

if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
echo "Connection ";

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if($conn->query($sql) === TRUE){
    echo "Creato my database";
}else { 
    echo "Error creating database: " . $conn->error;
}

$conn->close()
?>

