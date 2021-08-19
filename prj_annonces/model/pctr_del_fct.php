<?php
require_once ("../controller/get_db.php");
$pdo = get_db();

if (isset($_POST['del']))
{
	$pdo->query("DELETE FROM picture WHERE id = '".$_POST['pctr_id']."'");
	$pdo->query("ALTER TABLE annonce AUTO_INCREMENT = '".$_POST['pctr_id']."'");
	unlink("../pctr/" . $_POST['pctr_name']);
	header('Location: pctr_dspl.php');
}