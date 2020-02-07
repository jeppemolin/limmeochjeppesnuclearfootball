<!DOCTYPE html>
<html>
<?php 
include_once "dbincludes.php";
if(isset($_POST['submit'])){
	$titel = $_POST['titel'];
	$publisher = $_POST['publisher'];
	$genre = $_POST['genre'];
	$Studio = $_POST['Studio'];
	$coverimage = $_POST['coverimage'];
	echo "Du angav följande titel: ".$titel;
}
if($conn->connect_error){
	die("uppkopplingen misslyckades".$conn->connect_error);
} else{echo "uppkopplad";}
?>
<head>
	<title>Lägg till nytt spel</title>
</head>
<body>'
	<h1>Lägg till nytt spel</h1>
	<p><a href="index.php">Tillbaka till startsidan</a></p>


	<form action="sparaspel.php" method="post">
		Titel:<input type="text" id="titel" name="titel" value="<?php if(!empty($titel)){ echo $titel; } ?>"><br>
		Publisher:<input type="text" id="publisher" name="publisher" value="<?php if(!empty($publisher)){ echo $publisher; } ?>"><br>		
		Genre:<input type="text" id="genre" name="genre" value="<?php if(!empty($genre)){ echo $genre; } ?>"><br>
		Studio:<input type="text" id="Studio" name="Studio" value="<?php if(!empty($Studio)){ echo $Studio; } ?>"><br>
		Omslag:<input type="text" id="coverimage" name="coverimage" value="<?php if(!empty($coverimage)){ echo $coverimage; } ?>"><br>
		<input type="submit" name="submit" value="spara">
	</form>

	<?php
	if(isset($_POST['submit'])){
		if(empty($titel)){
			echo "du måste ange en titel <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "pink";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('Studio').style.backgroundColor = "";
			</script>
			<?php

		}
	else if(empty($publisher)){
			echo "du måste ange en publisher <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "pink";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('Studio').style.backgroundColor = "";
			</script>
		 
			<?php
}
		else if(empty($genre)){
			echo "du måste ange en genre <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "pink";
				document.getElementById('Studio').style.backgroundColor = "";
			</script>

			<?php
}
		else if(empty($Studio)){
			echo "du måste ange en studio <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('Studio').style.backgroundColor = "pink";
			</script>
			<?php
		}
			
else{
	$sql = "INSERT INTO games (titel, publisher, Coverimage, genre, Studio) VALUES('$titel','$publisher', '$coverimage', '$genre', '$Studio');";
	if($conn->query($sql)){
		echo "Your game has been saved";
	}
	else {
		echo "Your save game is corrupted or missing".$conn->error;
	}
}
}
	?>

</body>
</html>