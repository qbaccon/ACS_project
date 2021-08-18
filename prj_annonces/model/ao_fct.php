<?php
require_once("../controller/get_db.php");

if (session_status() == 2)
	session_start();
if (isset($_POST['new']))
{
	$pdo = get_db();
	$pdo->query("INSERT INTO annonce VALUES (DEFAULT, '".$_SESSION['who_id']."', '".$_POST['title']."',
				'".$_POST['type']."', '".$_POST['pctr_name']."', '".$_POST['purpose']."', '".$_POST['price']."',
				'".$_POST['publish']."', '".$_POST['place']."')");
	header('Location: annonce_organizer.php');
}

if (isset($_POST['del']))
{
	$pdo = get_db();
	$pdo->query("DELETE FROM annonce WHERE id='".$_POST['id']."'");
	$db->query("ALTER TABLE annonce AUTO_INCREMENT = '".$_POST['id']."'");
}

if (isset($_POST['chg']))
{
	$pdo = get_db();
	$pdo->query("UPDATE annonce SET title='".$_POST['title']."', type='".$_POST['type']."', pctr='".$_POST['pctr_name']."',
				purpose='".$_POST['purpose']."', price='".$_POST['price']."', publish='".$_POST['publish']."',
				place='".$_POST['place']."' WHERE id='".$_POST['id']."'");
}