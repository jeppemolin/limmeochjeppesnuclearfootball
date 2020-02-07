<!DOCTYPE html>
<html>
<head>
<?php include_once "dbincludes.php"; 	
if($conn->connect_error){
	die('uppkomlingen misslyckades'.$conn_error);
}
else{echo "Were in bitches";}
?>
<link rel="stylesheet" type="text/css" href="style.php">
	<title>Tjena</title>
</head>
<body>
	<h1>Adminsida-spelreviewsida</h1>
	<h3>Spel databaser</h3>
<li><a href="sparaspel.php">Lägg till titlar</a></li>
<li><a href="listaspel.php">Lista över alla titlar</a></li>

</body>
</html>