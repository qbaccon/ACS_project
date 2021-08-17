<?php
require_once("get_db.php");

// echo $value[$key];
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
				$ckeck = 0;
				echo "Email déjà utilisé";
				break;
			}
		}
	}
	if ($check == 0)
		$pdo->query("INSERT INTO user VALUES (DEFAULT, '".$_POST['name_r']."', 
		'".$_POST['mail_r']."', '".$_POST['psw_r']."')");
}