<!doctype html>

<html lang=de>
	<head> 
		<meta charset=utf-8>
		<title>view_index.html</title> 
	</head>
	
	<body>
		<main>
			<article>
				<h1>Siedler von Catan - Webversion</h1>
				<section>
					<?php include("Gruppen_de/Login.php"); ?>
				</section>
				<section>
					<form action="php/RegistierungsFormular.php" method="post">
						<fieldset>
							<legend>Registierung:</legend>
							 <label for=username>Username:</label>	
							 <input type=text name=username required>
							 <br>
							 <label for=passwort>Passwort:</label>
							 <input type=password name=passwort required>
							 <br>
							 <label for=email>Email:</label>
							 <input type=email name=email required>
						</fieldset>
						<input type=submit>
					</form>
				</section>
			</article>
		
		</main>
		
		<?php include("Gruppen_de/Footer.php"); ?>
		
	</body>
</html>