<?php
require_once 'functions/connessione.php';
require_once 'functions/strutturaHtml.php';


PrintTopTitle('Lingua');

//Isset verifica l'esistenza della  varibile che
//gli passiamo. 
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

if ($lang == 'it') {
    print "ciao";
} else {
    print "Hello";
}

$conn->close();   
PrintBottom();
?> 