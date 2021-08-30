<?php
session_start();
require_once ("../controller/get_db.php");
require_once ("../model/get_annonce.php");
require_once ("../controller/send_mail.php");
require_once ("../model/favs_fct.php");
$id = $_GET['ann_id'];
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/annonce_detail.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Gamothèque - Détails de l'annonce</title>
	</head>
	<body>
		<section id="master_container">
			<h1>Détails de l'annonce</h1>
			<div id="annonce_box">
				<?php include "annonce_detail_dspl.php" ?>
			</div>
			<div id="page_btn">
				<a id="back_link" href="../index.php">Retour</a>
				<?php if ($is_favs === 0) { ?>
				<?= "<form id='favs_form' method='post' action='annonce_detail.php?ann_id=$id'>" ?>
					<?= "<input type='hidden' name='ann_id' value='".$id."'>" ?>
					<input type="submit" name="make_favs" value="&#9734">
				</form>
				<?php } ?>
				<button id="mod_btn" onclick="toggle_contact_mod()">Contact</button>
			</div>
		</section>
		<section id="contact_section">
			<div id="modal_box">
				<?= "<form method='post' action='annonce_detail.php?ann_id=$id'>" ?>
					<h2>Veuillez remplir tous les champs</h2>
					<div class='item'>
						<label for="email">Votre mail</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class='item'>
						<label for="msg">Votre message</label>
						<textarea id="msg" name="msg" rows="6" required></textarea>
					</div>
					<div id="mod_btn">
						<button type="button" onclick="toggle_contact_mod()">Retour</button>
						<input type="submit" name="send_msg" value="Envoyer">
					</div>
				</form>
			</div>
		</section>
	</body>
	<script src="../script/modal.js"></script>
</html>