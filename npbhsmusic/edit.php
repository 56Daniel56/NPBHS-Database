


<?php


require_once('conection.php');
$studentid = $_POST['StudentID'];
$firstname = $_POST['FirstName'];
$lastname = $_POST['Lastname'];
$huia = $_POST['Huia'];

$result =  "UPDATE studentdata 
SET FirstName = '$firstname' , Lastname= '$lastname' , Huia = '$huia'
WHERE StudentID = '$studentid' ";
$data = mysqli_query($link, $result);

header( "Location: http://localhost/npbhsmusic/index.php" );
exit;

?>