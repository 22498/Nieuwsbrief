<?php

$subject = $_POST['subject'];
$message = $_POST['message'];

$dbc = mysqli_connect('localhost','root','','22498_db') or die ('Error connecting.');

$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying');

while ($row = mysqli_fetch_array($result)) {
      echo 'mail verzonden naar: ' . $row['mailadres'] . '<br>';
      $to  = $row['mailadres'];
      $headers = 'From: 22498@ma-web.nl';
     mail($to,$subject,$message,$headers);
}

echo 'Klaar met verzenden';