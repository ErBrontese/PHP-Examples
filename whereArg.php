<?php
require_once 'functions/connessione.php';
require_once 'functions/strutturaHtml.php';

PrintTopTitle('select esempio');
//$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;
$id = $_GET['id'] ?? -1;

if ($id < 0)
{
    print "<h1>Richiesta sbagliata!</h1><br>";
}
else
{
    //select
    $sql = "SELECT * FROM MyGuests WHERE id='$id'";
    if (defined('DebugQuery'))
    {
        print "<br>La query e': $sql<br><br>";
    }

    $result = $conn->query($sql);

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
        while ($row = $result->fetch_assoc())
        {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " <a href=\"mailto:" . $row["email"] . "\">" . $row["email"] . "</a><br>\n";
        }
    }
    else
    {
        print "<h1>Richiesta sbagliata!</h1><br>";
    }

}




$conn->close();
PrintBottom();