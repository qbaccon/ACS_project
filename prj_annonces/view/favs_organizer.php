<?php
session_start();
if (!isset($_SESSION['connected']))
	header("Location: ../index.php");
	require_once("../controller/get_db.php");
	require_once("../model/get_favs.php");
	require_once("../model/favs_fct.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/favs_organizer.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Gamothèque - Mes favoris</title>	
	</head>
	<body>
		<a id="back_link" href="../index.php">Retour</a>
		<section id="favs">
			<h1>Mes favoris</h1>
			<div id="master_container">
				<div id="annonce_container">
					<?php include "favs_dspl.php" ?>
				</div>
			</div>
		</section>
	</body>
</html>