<!DOCTYPE html>
<html>
<head>
	<?php 
	include_once "dbincludes.php";

	if($conn->connect_error){
		die("uppkopplingen misslyckades".$conn->connect_error);
	} else{echo "uppkopplad";}
	?>
	<title>Lista alla spel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Lista alla spel</h1>
	<p><a href="index.php">Tillbaka till startsidan</a></p>
	<table>
		<th>ID</th>
		<th>TITEL</th>
		<th>PUBLISHER	</th>
		<th>GENRE</th>
		<th>STUDIO</th>
		<th>COVERIMAGE</th>

		<?php
		$sql = "SELECT id, titel, publisher, Coverimage, genre, Studio FROM games;";
		$result = $conn->query($sql); 
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				echo "
				<tr>
					<td>".$row['id']."</td>
					<td>".$row['titel']."</td>
					<td>".$row['publisher']."</td>
					<td>".$row['genre']."</td>
					<td>".$row['Studio']."</td>
					<td>".$row['Coverimage']."</td>
				</tr>
				";
			}
		}
		?>


	</table>
</body>
</html>