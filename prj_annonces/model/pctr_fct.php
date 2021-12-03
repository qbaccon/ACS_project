<?php
require_once ("../controller/get_db.php");

if (isset($_POST['del']))
{
	$pdo = get_db();
	$pdo->query("DELETE FROM picture WHERE id = '".$_POST['pctr_id']."'");
	$pdo->query("ALTER TABLE picture AUTO_INCREMENT = '".$_POST['pctr_id']."'");
	unlink("../pctr/" . $_POST['pctr_name']);
	header('Location: pctr_dspl.php');
}

if (isset($_POST['send_pctr']))
{
	$pdo = get_db();
	$tmp_file = $_FILES['pctr_name']['tmp_name'];
	$file = $_FILES['pctr_name']['name'];
	if (!empty($file) && !file_exists("../pctr/" . $file))
	{
		$target = "../pctr/";
		move_uploaded_file($tmp_file, $target . $file);
		$pdo->query("INSERT INTO picture VALUES (DEFAULT, '".$_SESSION['who_id']."', '".$file."')");
		header('Location: pctr_dspl.php');
	}
}