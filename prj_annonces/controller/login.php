<?php
require_once("get_db.php");

if (isset($_POST['login']))
{
	$pdo = get_db();
	$query = $pdo->query("SELECT mail, password FROM user");
	if (!empty($query))
	{
		$query = $query->fetchAll();
		foreach($query as $key => $value)
		{
			if ($value['mail'] == $_POST['mail'] && $value['password'] == $_POST['psw'])
				header('Location: ../index.php');
		}
		echo "Utilisateur inconnu";
	}
	else
		echo "Utilisateur inconnu";
}