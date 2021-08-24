<?php
session_start();
require_once ("../controller/get_db.php");
require_once ("../model/get_annonce.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/annonce_detail.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - Detail de l'annonce</title>	
	</head>
	<body>
		<h1>Détails de l'annonce</h1>
		<section id="master_container">
			<div id="annonce_box">
				<?php include "annonce_detail_dspl.php" ?>
			</div>
			<a id="back_link" href="../index.php">Retour</a>
		</section>
	</body>
</html>