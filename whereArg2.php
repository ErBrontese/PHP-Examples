<?php
require_once 'functions/connessione.php';
require_once 'functions/strutturaHtml.php';

//select
$sql = "SELECT email FROM MyGuests ORDER BY id";
$result = $conn->query($sql);

$mail = $_GET['email'];
print "la mail richiesta e': $mail";

if ($result->num_rows > 0)
{
    ?>
    <table>
<?php while ($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php print $row["email"];?></td>
            <td><a href="whereArg2.php?email=<?php print urlencode($row["email"]);?>">view</a></td>
        </tr>
<?php
}
    ?>
    </table>
<?php
}

$conn->close();
PrintBottom();