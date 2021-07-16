<?php
$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");


$query = $pdo->query("SELECT name, mdp FROM users");
$resultat = $query->fetchAll();
if (isset($_POST['enter']))
{
	foreach ($resultat as $key => $value)
	{
		if ($value['name'] == $_POST['ident'] && $value['mdp'] == $_POST['mdp'])
			header('Location:add_form.php');
	}
	echo "<p>Identifiant ou mot de passe incorect</p>";
}
?>