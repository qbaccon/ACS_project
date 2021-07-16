<?php include "fct.php" ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/add_form.css"/>
		<link rel="icon" href="pctr/favicone_ampoule.jpg"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gestionnaire-Formulaire d'intervention</title>
	</head>
	<body>
		<section class="action_page">
			<div class="title">
				<p>Formulaire d'ajout d'intervention</p>
			</div>
			<div class="form">
				<form action="add_form.php" method="post">
					<p>Renseignez chaque champ pour enregistrer une intervention</p>
					<div>
						<input type="date" name="date" required/>
					</div>
					<div>
						<input type="number" name="floor" placeholder="Etage" min="0" max="11" required/>
					</div>
					<div>
						<input type="text" name="place" placeholder="Position" required/>
					</div>
					<div>
						<input type="number" name="price" placeholder="Prix" step="0.01" min="0" required/>
					</div>
					<div class="btn">
						<button id="add" name='add' onclick="myFunction()" type="submit">Enregistrer le changement</button>
					</div>
				</form>
			</div>
			<div class="end">
				<p><a href='list.php'>Vers l'historique</a></p>
			</div>
			<div id="snackbar">Ajout...</div>
		</section>
	</body>
	<script src="script.js"></script>
</html>