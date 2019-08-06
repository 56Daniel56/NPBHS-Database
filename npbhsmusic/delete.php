<?php
require_once('conection.php');
$studentid = $_POST['StudentID'];
// sql to delete a record



$sql =  "DELETE FROM studentdata WHERE StudentID = '$studentid'";
$result = mysqli_query($link, $sql);
header( "Location: http://localhost/npbhsmusic/index.php" );
exit;

?>