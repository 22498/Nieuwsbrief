<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>beheren</title>
</head>
<body>

<?php


$dbc = mysqli_connect('localhost','root','','22498_db') or die ('Error connecting.');

$query = "SELECT * FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying');

echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $id = $row['id'];
    $voornaam = $row['voornaam'];
    $tussenvoegsel = $row['tussenvoegsel'];
    $achternaam = $row['achternaam'];
    $mailadres = $row['mailadres'];


    echo '<tr>';
    echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$mailadres</td>";
    echo '<td>';
    echo '<a href="delete.php?id=' . $id . '">DELETE</a>';
    echo '/<td>';
    echo '<td>';
    echo '<a href="edit.php?id=' . $id . '&voornaam=' . $voornaam . '&tussenvoegsel=' . $tussenvoegsel . '&achternaam=' . $achternaam . '&mailadres=' . $mailadres . '">EDIT</a>';
    echo '/<td>';
    echo '</tr>';

}

echo '</table>';

?>
<a href="index.php">Klik hier om terug te keren naar de homepage</a><br><br>
</body>
</html>