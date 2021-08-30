<?php
require_once("get_db.php");

if (isset($_POST['register']))
{
	$check = 1;
	$pdo = get_db();
	$query = $pdo->query("SELECT mail FROM user");
	if (!empty($query))
	{
		$query = $query->fetchAll();
		foreach($query as $key => $value)
		{
			if ($value[$key] == $_POST['mail_r'])
			{
				$check = 0;
				echo "<p id='warn_mess'>Email déjà utilisé</p>";
				break;
			}
		}
	}
	if ($check == 1)
	{
		$pdo->query("INSERT INTO user VALUES (DEFAULT, '".$_POST['name_r']."', 
		'".$_POST['mail_r']."', '".$_POST['psw_r']."')");
		// $query = $pdo->query("SELECT id FROM user WHERE mail='".$_POST['mail_r']."'");
		// $query = $query->fetch();
		// mkdir("../pctr/" . $_POST['name_r'] . $query['id'], 0777);
	}
}