<?php
require_once('functions/connessione.php');
require_once('functions/strutturaHtml.php');

PrintTopTitle('select esempio');
print 'ciao';

$sql = "SELECT id, firstname  FROM MyGuests LIMIT 30 OFFSET 30";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while ($row = $result->fetch_assoc())
    {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
else
{
    echo "0 results";
}

$conn->close();
PrintBottom();
