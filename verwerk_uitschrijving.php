<?php

// FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['mailadres'];

// CONNECTIE MAKEN MET DATABASE

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = '22498_db';

$dbc = mysqli_connect($host,$username,$password,$dbname) or die ('Error connecting.');


$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";

$results = mysqli_query($dbc,$query) or die ('Error querying (SELECT).');

$number_of_rows = mysqli_num_rows($results);

if ($number_of_rows ==0) {
    echo 'Helaas, het mailadres ' . $mailadres . 'staat niet in de database.<br>';
    echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen...</a><br><br>';
    exit();
}
$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";

$results = mysqli_query($dbc,$query) or die ('Error querying (DELETE).');

mysqli_close($dbc);

echo 'Het mailadres' .  $mailadres . ' is verwijderd uit de database!<br>';
?>

<a href="index.php">Klik hier om terug te keren naar de homepage</a><br><br>

