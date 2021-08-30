<?php
$pdo = get_db();
if (isset($_POST['make_favs']))
{
	$id = $_POST['ann_id'];
	$pdo->query("INSERT INTO favs VALUES (DEFAULT, '".$_SESSION['who_id']."', '".$id."')");
	header('Location:annonce_detail.php');
}

if (isset($_POST['del_favs']))
{
	$pdo->query("DELETE FROM favs WHERE id = '".$_POST['favs_id']."'");
	$pdo->query("ALTER TABLE annonce AUTO_INCREMENT = '".$_POST['favs_id']."'");
	header('Location:favs_organizer.php');
}

if (isset($_SESSION['connected']) && isset($_GET['ann_id']))
{
	$is_favs = $pdo->query("SELECT id FROM favs
							WHERE id_annonce = '".$_GET['ann_id']."' AND id_user = '".$_SESSION['who_id']."'");
	$is_favs = $is_favs->fetch();
	if (!empty($is_favs))
		$is_favs = 1;
	else
		$is_favs = 0;
}
else
	$is_favs = 1;