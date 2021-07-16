<?php
	session_start();
	if (isset($_SESSION['connected']))
		unset($_SESSION['connected']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/connexion.css"/>
		<link rel="icon" href="pctrs/favicon.gif"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Résérvation de gîtes-Connexion admin</title>
	</head>
	<body>
		<section>
			<div id="exit"><a href="index.php">Retour</a></div> 
		</section>
		<section id="login_form">
			<h1>
				Espace Admninistrateur
				</br>
				Connexion
			</h1>
			<div>
				<form action="connexion.php" method="post">
					<div>
						<p id="subtitle">Veuillez vous connecter pour continuer</p>
					</div>
					<div>
						<input type="text" name="login" autocomplete='off' placeholder="Login" required/>
					</div>
					<div>
						<input type="password" name="mdp" autocomplete='off' placeholder="Password" required/>
					</div>
					<button type="submit" name="btn">Connexion</button>
					<?php include "fct/fct_connexion.php" ?>
				</form>
			</div>
		</section>
	</body>
</html>
