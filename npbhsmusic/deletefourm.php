<?php
require_once('conection.php');
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
         <form action = 'delete.php' method='post'>
		 <h1>
			Are you Sure you wish to delete this student?
		 </h1>
		 <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $studentid ?>" >
			<br>			
		<input type='submit' name='delete' value='Delete' "/>
		
		</form>
	<br>
		<p>Else Just Click Home!<p>
		

		 <center>
      </div>
	</body>
<html>