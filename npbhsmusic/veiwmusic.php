<head>
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
<body bgcolor="Yellow">
<div class="grid-container">
  <div><a href="newstu.php">New Student</a></div>
<div><a href="veiwall.php">All Music</a></div>
<div><a href="index.php" >Home</a></div>
</div>



<?php
require_once('conection.php');
$studentid = $_GET['StudentID'];


$query = "SHOW COLUMNS FROM music";
$result = mysqli_query($link, $query);
$query02 = "SELECT * FROM music WHERE studentid='".$studentid."'";
$result02 = mysqli_query($link, $query02);

//aray
$columnlist= array();



while ($columns = mysqli_fetch_assoc($result)) {
//saving data to a list
$columnlist[] = $columns['Field'];
}

$columncount = count($columnlist);

if (mysqli_num_rows($result02) > 0){

print "
<body>
<table width='100%' border='4px'>
<tr>
";

for ($x = 0; $x < $columncount; $x++){
print "
<th>".$columnlist[$x]."</th>

";
}

//print "<tr>
//<th>Operations</th>
//</tr>";

for ($x = 0; $x < $columncount; $x++){
while ($row = mysqli_fetch_assoc($result02)) {
print"<tr>";
for ($x = 0; $x < $columncount; $x ++){
print "<td><a href=''".$row['StudentID']."'>".$row[$columnlist[$x]]."</a></td>";

}
}
}


	

print"</tr>";

print "</tr>";
print "
<br>
</table>
</body>
";
}

else{
	print"<center>";
	print"Sorry, there are no songs under this student in the Database, you will have to add some.";
	print"</center>";
}
?>




