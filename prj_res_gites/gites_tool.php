<?php
	session_start();
	if (!isset($_SESSION['connected']))
		header("Location:index.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/admin_tool.css"/>
		<link rel="icon" href="pctrs/favicon.gif"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Résérvation de gîtes-Gestion admin</title>
	</head>
	<body>
		<?php include "fct/fct_gite_organizer.php" ?>
		<div class="exit">
			<a id="word" href="fct/fct_deconnexion.php">Deconnexion</a>
			<a id="door" href="fct/fct_deconnexion.php"><img src="pctrs/icons8-porte-ouverte-48.png" width="35px" height="35px"></img></a>
		</div>
		<h1>
			Espace Admninistrateur
			</br>
			Gestion des gites
		</h1>
		<section class="list">	
			<div id="master_container">
				<?php include "fct/display_admin.php" ?>
				<div class="btn">
					<button onclick="add_mod()" type="button" id="addmod_opener">Ajouter un gite</button>
					<form id="upl_form" action="gites_tool.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"/>
						<input type="submit" value="Upload" name="upload"/>
					</form>
				</div>
			</div>
		</section>
		<div class="add_modal">
      		<div class="modal_container">
				<form action="gites_tool.php" method="post">
					<p>Renseigner tout les champs</p>
					<div>
						<input type="text" name="type_a" maxlength='50' placeholder="Type de gite" required/>
					</div>
					<div>
						<input type="text" name="title_a" maxlength='50' placeholder="Nom du gite" required/>
					</div>
					<div>
						<input type="textarea" name="purpose_a" maxlength='1000' placeholder="Description" required/>
					</div>
					<div>
						<input type="text" name="nb_bed_a" maxlength='50' placeholder="Nombre de lits" required/>
					</div>
					<div>
						<input type="text" name="nb_bath_a" maxlength='50' placeholder="Nombre de SdB" required/>
					</div>
					<div>
						<input type="text" name="geoloc_a" maxlength='500' placeholder="Localisation" required/>
					</div>
					<div>
						<input type="text" name="price_a" maxlength='100' placeholder="Prix par nuit" required/>
					</div>
					<div>
						<input type="text" name="pctr_name_a" maxlength='500' placeholder="Nom de l'image" required/>
					</div>
					<div>
						<label for="dispo">Disponible:</label>
						<input type="checkbox" id="dispo" name="dispo"/>
					</div>
					<div class="mod_btn">
						<button class="add_btn_close" id="return" name='return' type="button">Retour</button>
						<button id="add_gite" name='add_gite' type="submit">Ajouter le gite</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script src="script/chg_gite.js"></script>
</html>