<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/list.css"/>
		<link rel="icon" href="pctr/favicone_ampoule.jpg"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gestionnaire-Historique d'intervention</title>
	</head>
	<body>
		<section class="history">
			<div class="title">
				<p>Liste des interventions</p>
			</div>
			<div class="nav">
				<p><a href='add_form.php'>Vers le formulaire</a></p>
			</div>
			<div class="list">
				<form action="list.php" method="post">
					<?php include "list_fct.php" ?>
				</form>	
			</div>
			<div id="snackbar">Suppression...</div>
		</section>
		<div class="modal">
      			<div class="modal_container">
					<form action="list.php" method="post">
						<p>Séléctionner une intervention à modifier:</p>
						<div>	
							<?php include "list_select.php" ?>
						</div>
						<p>Renseigner les champs nécessaires</p>
						<div>
							<input type="date" name="date_ch"/>
						</div>
						<div>
							<input type="number" name="floor_ch" placeholder="Etage" min="0" max="11"/>
						</div>
						<div>
							<input type="text" name="place_ch" placeholder="Position"/>
						</div>
						<div>
							<input type="number" name="price_ch" placeholder="Prix" step="0.01" min="0"/>
						</div>
						<div class="btn">
							<button class="mod_btn_close" id="return" name='return' type="button">Retour</button>
							<button id="change" name='change' type="submit">Enregistrer le changement</button>
						</div>
					</form>
				</div>
		</div>
		<script src="script.js"></script>
	</body>
</html>