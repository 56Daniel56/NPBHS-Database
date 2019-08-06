<head>
<title>Npbhs Music</title>
<center>
<body bgcolor="Yellow">
<style>

table, th, td {
border: 1px solid black;

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

<p>Search Student</p>
<form action = "sortdata.php" method = "get">

First name:<br>
<input type = "text" name = "FirstName" placeholder = "John" required><br>

Last name:<br>
<input type = "text" name = "Lastname" placeholder = "Smith" required><br>

<input type= "submit" value = "Submit">

</form>
</center>