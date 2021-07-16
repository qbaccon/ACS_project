<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/main.css" />
	<link rel="icon" href="pctrs/favicon.gif"/>
	<title>Gites</title>	
	</head>
	<body>	
	<?php include "fct/fct_res.php"?>
		<section id="home_page">
			<div class ="menu">
				<a id="login" href="connexion.php">Connexion</a>
			</div>
			<div id="titre">
				<p>Gites proposés par Dada</p>
			</div>
			<div id="filter">
				<div class="form-group"> 
					<label for="Lits">Lits (au moins)</label>
					<input type="int" id="nb_bed" name="nb_bed"> 
				</div>
				<div class="form-group"> 
					<label for="nb_bath">SdB (au moins)</label>
					<input type="int" id="nb_bath" name="nb_bath"> 
				</div>
				<div class="form-group"> 
					<label for="où">Où?</label>
					<input type="text" id="where" name="geoloc"> 
				</div>
				<div class="form-group"> 
					<label for="price">Prix (au plus)</label>
					<input type="int" id="price" name="price"> 
				</div>
				<button onclick="search()">&#128269</button>
			</div>
			<!--images -->
			<div class="gite_dspl">
				<?php include "fct/affichage.php" ?>
			</div>
		</section>
		<div id="mod_block">
			<?php include "fct/fct_mod_display.php" ?>
		</div>
	</body>
	<footer>
		<div>&copy Copyrights by Duncan, Quentin</div>
	</footer>
	<script src="script/mod_tool.js"></script>
	<script src="script/search_tool.js"></script>
</html>