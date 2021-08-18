<?php include "../model/ao_fct.php" ?>

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
			<h1>Veuillez remplir tout les champs</h1>
			<form action="new_annonce.php" method="post">
				<div>
					<input type="text" name="title" placeholder="Titre" autocomplete="off" required/>
				</div>
				<div>
					<input type="text" name="type" placeholder="Catégorie" autocomplete="off" required/>
				</div>
				<div>
					<input type="text" name="pctr" placeholder="Nom de l'image" autocomplete="off" required/>
				</div>
				<div>
					<input type="textarea" name="purpose" placeholder="Description" autocomplete="off" required/>
				</div>
				<div>
					<input type="date" name="publish" required/>
				</div>
				<div>
					<input type="number" name="price" min="0" autocomplete="off" required/>
				</div>
				<div>
					<input type="text" name="place" placeholder="Adresse" autocomplete="off" required/>
				</div>
				<div>
					<button type="submit" name="new">Ajouter</button>
					<a href="annonce_organizer.php">Retour</a>
				</div>
			</form>
		</section>
	</body>
</html>