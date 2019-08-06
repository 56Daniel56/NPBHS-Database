
<html>

<style>

table {
  width: 100%;
}
th, td {
  border: 1px solid black;
  padding: 5px;
  text-align: left;
 -webkit-border-radius: 5px;
    border-radius: 5px; 
}
th {
  background-color: black;
  color: white;
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

</style>
<body bgcolor="Yellow">


<div class="grid-container">
  <div><a href="newstu.php">New Student</a></div>
<div><a href="srchstu.php" >Search Student</a></div>
<div><a href="index.php">Home</a></div>
</div>

</html>
<?php
require_once('conection.php');

$result = mysqli_query($link, "SELECT * FROM `music`");


print "<body>";

print"<table style = 'witdth:100%'>";
print "<tr>
<th>Student ID</th>
<th>Format</th>
<th>Genre</th>
<th>Group</th>
<th>Title</th>
<th>Student</th>
</tr>";
while($data = mysqli_fetch_assoc($result)){
print "<tr>
<td>".$data['StudentID']."</td>
<td>".$data['Format']."</td>
<td>".$data['Genre']."</td>
<td>".$data['Group']."</td>
<td>".$data['Title']."</td>
<td><a href = 'sortdata.php?StudentID=".$data['StudentID']."'>Veiw Student</a>

</td>
</tr>";
}
print"</table>";
print"</body>";

?>
