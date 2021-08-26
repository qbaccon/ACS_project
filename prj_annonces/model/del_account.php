<?php
if (isset($_POST['del_acnt']))
{
	$pctrs = get_pctr();
	if ($pctrs != "empty")
	{
		foreach($pctrs as $file)
		{
			if ($file != "default.gif" && $file != "." && $file != "..")
				unlink("../pctr/" . $file);
		}
	}
	$pdo->query("DELETE FROM annonce WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM picture WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM user WHERE id = '".$_SESSION['who_id']."'");
	session_destroy();
	header("Location: ../index.php");
}