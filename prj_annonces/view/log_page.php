<?php
session_start();
if (isset($_SESSION['connected']))
	header("Location: ../index.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/log_page.css" />
		<link rel="icon" href="../rsrc/logo.gif"/>
		<title>Gamothèque - connexion</title>	
	</head>
	<body>
		<section id="log_box">
			<a href="../index.php">Retour</a>
			<h1>Veuillez vous connecter pour continuer</h1>
			<form action="log_page.php" method="post">
				<?php include "../controller/register.php" ?>
				<?php include "../controller/login.php" ?>
				<div>
					<label for="mail">Email</label>
					<input type="email" name="mail" required/>
				</div>
				<div>
					<label for="psw">Mot de passe</label>
					<input type="password" name="psw" required/>
				</div>	
				<input type="submit" name="login" value="Connexion"/>
			</form>
			<button onclick="toggle_reg_modal()">Pas de compte ? Inscrivez-vous</button>
		</section>
		<section id="modal_box">
			<div id="modal">
				<form action="log_page.php" method="post">
					<h2 id="mod_title">Veuillez remplir tous les champs</h2>
					<div class="item">
						<label for="mail_r">Email</label>
						<input type="email" name="mail_r" required/>
					</div>
					<div class="item">
						<label for="name_r">Nom</label>
						<input type="text" name="name_r" required/>
					</div>
					<div class="item">
						<label for="psw_r">Mot de passe</label>
						<input type="password" name="psw_r" required/>
					</div>
					<div id="mod_btn">
						<button type="button" onclick="toggle_reg_modal()">Retour</button>
						<input type="submit" name="register" value="S'inscrire"/>
					</div>
				</form>
			</div>
		</section>
	</body>
	<script src="../script/modal.js"></script>
</html>