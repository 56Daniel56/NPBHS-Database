<?php
$studentid = $_GET['StudentID']
?>
<html>
	<head>
	<title>Add New Student into the database</title>
		<style>
		input[type=text] {
				width: 50%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
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
	
	<body>
		<div id = "main">
		<center>
         <form action = 'newmusic.php' method = "POST">
			<br>
			<input type="hidden" name="StudentID" id="StudentID" value="<?php echo $studentid ?>" >
			<br>			
			<label>Format</label>
			<br>
			<input type = "text" name = "Format" id = "Format" required />
			<br>
			<label>Genre</label>
			<br>
			<input type = "text" name = "Genre" id = "Genre" required />
			<br>
			<label>Group</label>
			<br>
			<input type = "text" name = "Group" id = "Group" required />
			<br>
			<label>Title</label>
			<br>
			<input type = "text" name = "Title" id = "Title" required />
			<br>

            <input type = "submit" value ="Submit" name = "submit"  />
            <br />
         </form>
		 <center>
      </div>
	</body>
<html>