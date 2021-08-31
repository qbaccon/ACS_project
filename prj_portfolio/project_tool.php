<?php
	session_start();
	if (!isset($_SESSION['connected']))
		header("Location:connexion.php");
	require_once("function/get_db.php");
	$pdo = get_db();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/adminer.css"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio-Espace admin</title>
	</head>
	<body>		
		<?php include "function/project_organizer.php" ?>
		<div class="exit"><a href="deconnexion.php">Retour</a></div>
		<section class="list">
		<h1>Espace Admninistrateur</h1>
			<form action="project_tool.php" method="post">
				<?php include "function/displayprj_admin.php" ?>
				<div class="btn">
					<button onclick="add_mod()" type="button" id="addmod_opener">Ajouter un projet</button>
					<button type="submit" id="del" name="del">Supprimer les projets séléctionnés</button>
				</div>
			</form>
		</section>
		<div class="add_modal">
      		<div class="modal_container">
				<form action="project_tool.php" method="post">
					<p>Renseigner tout les champs</p>
					<div>
						<input type="text" name="title_a" maxlength='50' placeholder="Nom" required/>
					</div>
					<div>
						<input type="textarea" name="purpose_a" maxlength='500' placeholder="Description" required/>
					</div>
					<div>
						<input type="text" name="link_a" maxlength='100' placeholder="Lien" required/>
					</div>
					<div>
						<input type="text" name="git_link_a" maxlength='100' placeholder="Lien Github" required/>
					</div>
					<div>
						<input type="text" name="pctr_name_a" maxlength='50' placeholder="Nom de l'image" required/>
					</div>
					<div>
						<label for="visibility">Visible:</label>
						<input type="checkbox" id="visibility" name="visibility"/>
					</div>
					<div class="mod_btn">
						<button class="add_btn_close" id="return" name='return' type="button">Retour</button>
						<button id="add_prj" name='add_prj' type="submit">Ajouter le projet</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script src="script/chg_project.js"></script>
</html>