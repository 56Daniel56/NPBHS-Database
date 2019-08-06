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
		
		</style>
	</head>
	
	
	<body>
		<div id = "main">
		<center>
         <form action = 'deletesongcal.php' method='post'>
		 <h1>
			Are you Sure you wish to Remove this students Song
		 </h1>
		 <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $studentid ?>" >
			<br>			
		<input type='submit' name='remove' value='Remove' "/>
		</form>
		 <center>
      </div>
	</body>
<html>