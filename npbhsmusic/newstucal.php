<?php

require_once('conection.php');

$firstname = $_POST["FirstName"];
$lastname = $_POST["Lastname"];
$huia = $_POST["Huia"];



$sql = "INSERT INTO studentdata VALUES ('','".$firstname."','".$lastname."','".$huia."')";

$data =  mysqli_query($link, $sql);

header( "Location: http://localhost/npbhsmusic/index.php" );
exit;
?>