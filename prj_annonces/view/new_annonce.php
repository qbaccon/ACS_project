<?php
session_start();
require_once "../model/ao_fct.php"
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/new.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - Ajouter une annonce</title>	
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
					<input type="text" name="type" autocomplete="off" required/>
				</div>
				<div class="item">
					<label for='pctr_name'>Nom de l'image</label>
					<!-- <?php include "select_maker_add.php" ?> -->
					<input type="file" name="pctr_name"/>
				</div>
				<div class="item">
					<label for='purpose'>Description</label>
					<input type="textarea" name="purpose" autocomplete="off" required/>
				</div>
				<!-- <div class="item">
					<label for='publish'>Date de publication</label>
					<input type="date" name="publish" required/>
				</div> -->
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