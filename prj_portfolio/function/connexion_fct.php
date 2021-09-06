<?php

$query = $pdo->query("SELECT name, mdp FROM admin_user");
$res = $query->fetchAll();
session_start();
if (isset($_POST['btn']))
{
	foreach ($res as $key => $value)
	{
		if ($value['name'] == $_POST['ident'] && $value['mdp'] == $_POST['mdp'])
		{
			$_SESSION['connected'] = "oui";
			header('Location:project_tool.php');
		}
		else
			echo "<p>Identifiant ou mot de passe incorect</p>";
	}
}