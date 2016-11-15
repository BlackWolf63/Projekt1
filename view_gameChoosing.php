<!doctype html>

<html lang=de>
	<head> 
		<meta charset=utf-8>
		<title>view_gameChoosing.html</title> 
	</head>
		
	<body>
		<main>
			<article>
				<section>
					<h1>Verfügbare Spiele</h1>
					<table>
						<thead>
							<tr>
							<th>Name des Spiels</th><th>Anzahl der Spieler/Freie Plätze</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>
							<tr>
							<td><!--Name aus Datenbank--></td><td><!--Spieleranzahl aus Datenbank--></td>
							</tr>					
						</tbody>
					</table>
				</section>
				<section>
					<form action="php/SpielBeitretenFormular.php" method="post">
						<fieldset>
							<legend>Spiel beitreten:</legend>
							 <label for=gameName>Name des Spiels:</label>	
							 <input type=text name=gameName required>
						</fieldset>
						<input type=submit>
					</form>
				</section>
				<section>
					<form action="php/SpielErstellenFormular.php" method="post">
						<fieldset>
							<legend>Spiel Erstellen:</legend>
							 <label for=gameName>Name des Spiels:</label>	
							 <input type=text name=gameName required>
							 <br>
							 Anzahl der Spieler<select><option>1</option><option>2</option><option>3</option><option>4</option></select>
							 <br>
							 <input type=radio name=easy value=easy>Startaufstellung für Einsteiger <input type=radio name=advanced  value=advanced> Startaufstellung für Fortgeschrittene
						</fieldset>
						<input type=submit>
					</form>
				</section>
				<section>
					<form action="php/SpielLaden.php" method="post">
						<fieldset>
							<legend>Spiel Laden:</legend>
							 Spielsstände<select><option><!--Spielstände aus Datenbank--></option></select>
						</fieldset>
						<input type=submit>
					</form>
				</section>
			</article>				
		</main>
		
		<?php include("Gruppen_de/Footer.php"); ?>	
	
	</body>


</html>