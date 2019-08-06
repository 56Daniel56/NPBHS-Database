<?php
require_once('conection.php');
$studentid = $_GET['StudentID'];
$firstname = $_GET['FirstName'];
$lastname = $_GET['Lastname'];
$huia = $_GET['Huia'];
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
         <form action = 'edit.php' method = "POST">

			<input type="hidden" name="StudentID" id="StudentID" value="<?php echo $studentid ?>" >
			<br>			
			<label>First Name</label>
			<br>
			<input type = "text" name = "FirstName" id = "FirstName" value="<?php echo $firstname ?>" required />
			<br>
			<label>Surname</label>
			<br>
			<input type = "text" name = "Lastname" id = "Lastname" value="<?php echo $lastname ?>" required />
			<br>
			<label>Huia</label>
			<br>
			<input type = "text" name = "Huia" id = "Huia" value= "<?php echo $huia ?>" required />
			<br>
            <input type = "submit" value ="Edit" name = "Edit"  />
            <br />
         </form>
		 <center>
      </div>
	</body>
<html>