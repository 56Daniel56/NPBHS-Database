


<html>
	
	<style>
		input[type=text] {
				width: 50%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
			}
		input[type=submit] {

    padding:5px 10px; 
    background:#ccc; 
    border:5 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
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
		
		</style>
	<head>
	<title>Add New Student into the database</title>
	</head>
	<center>
	
	<div class="grid-container">
  <div><a href="newstu.php">New Student</a></div>
<div><a href="veiwall.php">All Music</a></div>
<div><a href="srchstu.php" >Search Student</a></div>
</div>
	
	<body bgcolor="Yellow">
		<div id = "main">
         <form action = "newstucal.php" method = "post">

			<label>Firstname :</label>
			<input type = "text" name = "FirstName" id = "FirstName" required />
			<br />
			<label>Lastname :</label>
			<input type = "text" name = "Lastname" id = "Lastname" required />
			<br />
			<label>Huia :</label>
			<input type = "text" name = "Huia" maxlength = "4" id = "Huia" required />
			<br />

            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
         </form>
      </div>
	</body>
	</center>
<html>
	


