<?php
if (isset($_POST['del_acnt']))
{
	$pdo->query("DELETE FROM annonce WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM picture WHERE id_user = '".$_SESSION['who_id']."'");
	$pdo->query("DELETE FROM user WHERE id = '".$_SESSION['who_id']."'");
	session_destroy();
	header("Location: ../index.php");
}