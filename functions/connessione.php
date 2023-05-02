<?php 
require_once('conf.php');
require_once('dati.php');
//create connessione 

$conn = new mysqli($servername, $username, $password,$dbname);

//check connessione 

if($conn->connect_error){

    if(defined('DebugConnectionError'))
    die("Connection error: " . $conn->connect_error);
    else
        die();
} 

if(defined('DebugConnection'))
  echo "Connection ";

?>