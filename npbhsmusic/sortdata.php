<html>
<head>
<body bgcolor="Yellow">
<style>

table, th, td {
border: 1px solid black;
}
table{
	table-layout: auto;
  width: 100%;  
}

a:link{
color: black;
background-color: transparent;
text-decoration: none;
}
a:hover{
color: black;
background-color: transparent;
text-decoration: underline;
}

input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 3px;
    border-radius: 3px;
}

input[type=submit] {

    padding:5px 10px; 
    background:#ccc; 
    border:5 none;
    cursor:pointer;
    -webkit-border-radius: 3px;
    border-radius: 3px; 
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 5px;
}

.grid-container > div {
  background-color: yellow;
  text-align: center;
  padding: 10px 0;
  font-size: 15px;
}


<!––  Some CSS styling, fairly straight forward no more needed    ––>

</style>
</head>
<div class="grid-container">
  <div><a href="newstu.php">New Student</a></div>
<div><a href="veiwall.php">All Music</a></div>
<div><a href="index.php" >Home</a></div>
</div>



</body>
</html>






<?php 

require_once('conection.php');
if (isset($_GET['FirstName'])){
$result = mysqli_query($link, "SELECT * FROM `studentdata` WHERE `FirstName` = '".$_GET['FirstName']."' and `Lastname` = '".$_GET['Lastname']."'");
} 
else{
$result = mysqli_query($link, "SELECT * FROM `studentdata` WHERE `StudentID` = '".$_GET['StudentID']."'");
}

if (mysqli_num_rows($result) > 0){

print "<body>";

print"<table>";

print "<tr>
<th>Student ID</th>
<th>First name</th>
<th>Surname</th>
<th>Huia</th>
<th>Avalible</th>
<th>Operations</th>
</tr>";
while($data = mysqli_fetch_assoc($result)){
print "<tr>
<td>".$data['StudentID']."</td>
<td>".$data['FirstName']."</td>
<td>".$data['Lastname']."</td>
<td>".$data['Huia']."</td>
<td><a href = 'veiwmusic.php?StudentID=".$data['StudentID']."'>Music</a>
<td>
<a href = 'newmusicform.php?StudentID=".$data['StudentID']."'>Add Music</a>
<a href = 'editfourm.php?StudentID=".$data['StudentID']."&FirstName=".$data['FirstName']."&Lastname=".$data['Lastname']."&Huia=".$data['Huia']."'>Edit Student Data</a>
<a href = 'deletefourm.php?StudentID=".$data['StudentID']."'>Delete Student</a>
</td>
</tr>";
};
print"</table>";
print"</body>";

}
else
{
	print"<center>";
	print"<br>Sorry, there are no students in the Database with that name";
	print"</center>";
};


?>



