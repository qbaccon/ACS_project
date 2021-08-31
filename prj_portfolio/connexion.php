<?php
$pdo = get_db()
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/connexion.css"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio-Espace admin</title>
	</head>
	<body>
		<section>
			<h1>Espace Admninistrateur</h1>
			<div>
				<form action="connexion.php" method="post">
					<div>
						<input type="text" name="ident" autocomplete='off' required/>
					</div>
					<div>
						<input type="password" name="mdp" autocomplete='off' required/>
					</div>
					<button type="submit" name="btn">Connexion</button>
					<?php include "function/connexion_fct.php" ?>
				</form>
			</div>
		</section>
	</body>
</html>