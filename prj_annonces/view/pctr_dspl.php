<?php 
session_start();
include "../model/get_user_pctr.php";
include "../model/pctr_del_fct.php";
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/pctr_stock.css" />
		<!-- <link rel="icon" href="pctrs/favicon.gif"/> -->
		<title>Annonces - Mes annonces</title>	
	</head>
	<body>
		<a id="back" href="annonce_organizer.php">Retour</a>
		<h1>Ma gallerie</h1>
		<div id="main_container">
			<?php include "pctr_dspl_ex.php" ?>
		</div>
		<div id="pctr_btn">
			<form action="pctr_dspl.php" method="post">
				<input type="file" name="pctr_name"/>
			</form>	
		</div>
	</body>
</html>