<?php
if (isset($_POST['del_acnt']))
{
	if ($picture != "empty")
	{
		foreach($picture as $file)
		{
			if ($file['name'] != "default.gif" && $file['name'] != "." && $file['name'] != "..")
				unlink("../pctr/" . $file['name']);
		}
	}
	$pdo->query("DELETE FROM annonce WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM picture WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM user WHERE id = '".$_SESSION['who_id']."'");
	session_destroy();
	header("Location: ../index.php");
}