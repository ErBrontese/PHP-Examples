<?php
require_once('functions/connessione.php');
require_once('functions/strutturaHtml.php');



$NumberOfRecords = $_GET['records'] ?? -1;

//CI andiamo a calcolare il numero di record che abbiamo all'interno del dib 
if($NumberOfRecords <0)
{
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);
    $NumberOfRecords = $result->num_rows;
    header("Location: ". $_SERVER['PHP_SELF'] . "?records=$NumberOfRecords");
    exit();
}

$CurrentPage = $_GET['page'] ?? 0;
$NumberOfResultsPerPage = 10;
//Dopo di che andiamo a indicare quante pagine avremo bisogno per rappresentare
// i nostri dati du più pagine considerando quanti dati dobbiamo mettere su ogni pagina 
$offset = $NumberOfResultsPerPage * $CurrentPage;

$sql = "SELECT * FROM MyGuests LIMIT $NumberOfResultsPerPage OFFSET $offset";
$result = $conn->query($sql);

$rows = $result->num_rows;

PrintTopTitle("page $CurrentPage");

if ($rows > 0)
{
?>
<table>
    <tr>
        <td>ID</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>email</td>
    </tr>    
        <?php
            while ($row = $result->fetch_assoc())
            {
                $link = "mailto:" . urlencode($row["email"]);
        ?>
    <tr>
        <td><?php print $row["id"];?></td>
        <td><?php print $row["firstname"];?></td>
        <td><?php print $row["lastname"];?></td>
        <td>
            <a href="<?php print $link?>"><?php print $row["email"];?></a>
        </td>
    </tr>
    <?php
            }
    ?>
</table>
<?php
}
//Approsimazione
$pages = ceil($NumberOfRecords / $NumberOfResultsPerPage);
for($i=0; $i<$pages; $i++)
{
    ?>
        <a href="
        <?php print $_SERVER['PHP_SELF'] . "?records=$NumberOfRecords&page=$i"?>
        "> <?php print $i + 1 ?></a>
    <?php

}

$conn->close();
PrintBottom();