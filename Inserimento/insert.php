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
 
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('sdf', 'Bew', 'matt@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Lou', 'Qer', 'Lou@example.com');";


if($conn->multi_query($sql) === TRUE){
    echo "L'inserimento è andato a buon fine, L'id è :  ".$conn->insert_id;
}else { 
    echo "Error inserimento nel database: " . $conn->error;
}

$conn->close()
?>

