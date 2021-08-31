<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style/index.css" />
		<link rel="icon" href="rsrc/logo.gif"/>
		<title>Gamothèque - Accueil</title>	
	</head>
	<header>
		<?php include "view/header.php" ?>
	</header>
	<body>
		<section id="annonce">
			<h1>
				Gamothèque<hr>
				<span>La bibliothèque de jeux pour tous</span>
			</h1>
			<div id="master_container">
				<div id="filter_container">
					<?php include "view/annonce_filter.php" ?>
				</div>
				<div id="annonce_container">
					<?php include "view/annonce_dspl_full.php" ?>
				</div>
			</div>
			<div id="page_link">
				<?php include "view/page_up_down.php" ?>
			</div>
		</section>
	</body>
	<!-- <footer>
		<div>
			<p>&copyCopyright Quentin BACCON</p>
		</div>
	</footer> -->
</html>