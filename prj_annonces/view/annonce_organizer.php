<?php require_once "../model/ao_fct.php" ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/organizer.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - Mes annonces</title>	
	</head>
	<body>
		<a id="back" href="../index.php">Retour</a>
		<section id="display">
			<h1>Mes annonces</h1>
			<div id="main_container">
				<?php include "../controller/annonce_dspl.php" ?>
			</div>
			<a href="new_annonce.php">Ajouter annonce</a>
		</section>
	</body>
	<script src="../script/organizer.js"></script>
</html>