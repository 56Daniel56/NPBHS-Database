<?php


require_once('conection.php');


$studentid = $_POST["StudentID"];
$format = $_POST["Format"];
$genre = $_POST["Genre"];
$group = $_POST["Group"];
$title = $_POST["Title"];

$sql = "INSERT INTO music
VALUES ('".$studentid."','".$format."','".$genre."','".$group."','".$title."')";
$data =  mysqli_query($link, $sql) or die (mysqli_error($link));

header( "Location: http://localhost/npbhsmusic/index.php" );
exit;
?>



