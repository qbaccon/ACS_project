<?php
require_once("class_users.php");
require_once("db_con.php");

$db = get_db();
$query = $db->query("SELECT login, mdp FROM users");
$res = $query->fetchAll();
if (isset($_POST['btn']))
{
	$admin = new Admin($_POST['login'], $_POST['mdp']);
	foreach ($res as $key => $value)
	{
		if ($value['login'] == $admin->login && $value['mdp'] == $admin->pass)
		{
			$_SESSION['connected'] = "oui";
			header('Location:gites_tool.php');
		}
		else
			echo "<p id='bad_entry'>Identifiant ou mot de passe incorect</p>";
	}
}