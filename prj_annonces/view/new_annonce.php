<?php
session_start();
if (!isset($_SESSION['connected']))
	header("Location: ../index.php");
require_once "../model/ao_fct.php"
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/new.css" />
		<link rel="icon" href="../rsrc/logo.gif"/>
		<title>Gamothèque - Ajouter une annonce</title>	
	</head>
	<body>
		<section id="add_form">
			<h1>Veuillez remplir tous les champs</h1>
			<form action="new_annonce.php" method="post" enctype="multipart/form-data">
				<div class="item">
					<label for='title'>Titre</label>
					<input type="text" name="title" autocomplete="off" required/>
				</div>
				<div class="item">
					<label for='type'>Catégorie</label>
					<select name="type" required>
						<option value="FPS">FPS</option>
						<option value="Stratégie">Stratégie</option>
						<option value="Action">Action</option>
						<option value="Aventure">Aventure</option>
						<option value="RPG">RPG</option>
						<option value="MMORPG">MMORPG</option>
						<option value="Puzzle/Enigme">Puzzle/Enigmes</option>
					</select>
				</div>
				<div class="item">
					<label for='pctr_name'>Nom de l'image</label>
					<input type="file" name="pctr_name" accept=".jpg, .png, .gif"/>
				</div>
				<div class="item">
					<label for='purpose'>Description</label>
					<input type="textarea" name="purpose" autocomplete="off" required/>
				</div>
				<div class="item">
					<label for='price'>Prix (€)</label>
					<input type="number" name="price" min="0" autocomplete="off" required/>
				</div>
				<div class="item">
					<label for='place'>Adresse</label>
					<input type="text" name="place" autocomplete="off" required/>
				</div>
				<div class="btn">
					<button type="submit" name="new">Ajouter</button>
					<a href="annonce_organizer.php">Retour</a>
				</div>
			</form>
		</section>
	</body>
</html>