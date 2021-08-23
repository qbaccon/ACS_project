<?php
if (isset($_POST['confirm']))
{
	if ($user['password'] == $_POST['last_pswd'])
	{
		if ($_POST['last_pswd'] != $_POST['new_pswd'])
		{
			$pdo->query("UPDATE user SET password = '".$_POST['new_pswd']."' WHERE id = '".$_SESSION['who_id']."'");
			echo "<p class='chg_resp' id='chg_resp_good'>Modification réussi</p>";
		}
		else
			echo "<p class='chg_resp' id='chg_resp_wrong'>Veuillez choisir un mot de passe different</p>";
	}
	else
		echo "<p class='chg_resp' id='chg_resp_wrong'>Ancien mot de passe incorrect</p>";
}