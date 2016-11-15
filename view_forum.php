<!doctype html>

<html lang=de>
	<head> 
		<meta charset=utf-8>
		<title>view_forum.html</title> 
	</head>
		
	<body>
	
		<?php include("Gruppen_de/Login.php"); ?>
		
		<main>

			<form action="php/ForumPost.php" method="post">
				<textarea rows="4" cols="50">
				Einen neuen Post verfassen</textarea>
				<input type=submit>
			</form>	
			<!--Anzeige der in der Datenbank gespeicherten Posts-->
			<form action="php/ForumKommentar.php" method="post">
				<textarea rows="2" cols="40">
				Einen Kommentar ververfassen</textarea>
				<input type=submit>
			</form>				
		</main>
		
		<?php include("Gruppen_de/Footer.php"); ?>	
		
	</body>


</html>