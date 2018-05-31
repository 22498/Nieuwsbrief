<?php
$id = $_GET['id'];
echo $id;
$dbc = mysqli_connect('localhost','root','','22498_db') or die ('Error connecting.');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header( "Location: beheren.php");