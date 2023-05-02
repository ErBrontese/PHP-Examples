<?php  

require_once 'functions/connessione.php';
require_once 'functions/strutturaHtml.php';

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);


if($result->num_rows > 0){
?>
 <label for="guest">Scegli un id:</label>
 <select name="table_id" id="table_id">
<?php  
    while($row = $result->fetch_assoc()){
        print "<option value=' ".$row['id']." '>". $row['id'].  $row['firstname']."</option>";
    }
}
?>

  </select>
<?php

$conn->close();
PrintBottom();
?>