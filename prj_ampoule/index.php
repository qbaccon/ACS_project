<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/index.css"/>
		<link rel="icon" href="pctr/favicone_ampoule.jpg"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gestionnaire-Connexion</title>
	</head>
	<body>
		<section class="login">
			<div class="title">
				<p>Bienvenue sur le gestionnaire d'interventions</br>
				Veuillez vous connecter pour continuer</p>
			</div>
			<form action="index.php" method="post">
				<div>
					<input type="text" name="ident" placeholder="Votre nom" required/>
				</div>
				<div>
					<input type="password" name="mdp" placeholder="Votre mdp" require/>
				</div>
				<div class="btn">
						<button id="enter" name="enter" type="submit">Connexion</button>
				</div>
				<?php include "fct_connexion.php" ?>
			</form>
		</section>
	</body>
</html>