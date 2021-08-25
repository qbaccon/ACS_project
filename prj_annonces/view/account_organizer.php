<?php
session_start();
if (!isset($_SESSION['connected']))
	header("Location: ../index.php");
require_once("../controller/get_db.php");
require_once("../model/get_user.php");
require_once("../model/del_account.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/account_organizer.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - Gestion du Compte</title>	
	</head>
	<body>
		<a href="../index.php">Retour</a>
		<h1>Gestion du compte</h1>
		<section id="details">
			<h2>Informations du compte</h2>
			<div>
				<p class="label">Email:</p>
				<?= "<p class='value'>" . $user['mail'] . "</p>" ?>
			</div>
			<div>
				<p class='label'>Nom:</p>
				<?= "<p class='value'>" . $user['pseudo'] . "</p>" ?>
			</div>
		</section>
		<section id="pswd">
			<h2>Changement de mot de passe</h2>
			<?php include "../controller/chg_pswd.php" ?>
			<form action="account_organizer.php" method="post">
				<div>
					<label for="last_pswd">Ancien mot de passe</label>
					<input type="password" id="last_pswd" name="last_pswd" required/>
				</div>
				<div>
					<label for="new_pswd">Nouveau mot de passe</label>
					<input type="password" id="new_pswd" name="new_pswd" required/>
				</div>
				<input type="submit" id="confirm" name="confirm" value="Valider le changement"/>
			</form>
		</section>
		<section id="del_account">
			<form action="account_organizer.php" method="post">
				<input type="submit" id="del_acnt" name="del_acnt" value="Fermer le compte"/>
			<form>
		</section>
	</body>
</html>