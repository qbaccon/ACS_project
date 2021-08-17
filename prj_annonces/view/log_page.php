<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/log_page.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - connexion</title>	
	</head>
	<body>
		<section id="log_box">
			<h1>Veuillez vous connecter pour continuer</h1>
			<form action="log_page.php" method="post">
				<?php include "../controller/register.php" ?>
				<?php include "../controller/login.php" ?>
				<input type="email" name="mail" required/>
				<input type="password" name="psw" required/>
				<input type="submit" name="login" value="Connexion"/>
			</form>
			<button onclick="toggle_modal()">Pas de compte ? Inscrivez-vous</button>
		</section>
		<section id="modal_box">
			<div id="modal">
				<form action="log_page.php" method="post">
					<input type="email" name="mail_r" required/>
					<input type="text" name="name_r" required/>
					<input type="password" name="psw_r" required/>
					<input type="submit" name="register" value="S'inscrire"/>
				</form>
				<button onclick="toggle_modal()">Retour</button>
			</div>
		</section>
	</body>
	<script src="../script/modal.js"></script>
</html>