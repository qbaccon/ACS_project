<?php
require_once("../controller/get_db.php");
require_once "../controller/get_pctr.php";

if (isset($_POST['new']))
{
	$pdo = get_db();
	$tmp_file = $_FILES['pctr_name']['tmp_name'];
	$file = $_FILES['pctr_name']['name'];
	$file_exist = 1;
	if (!empty($file))
	{
		$pctrs = get_pctr();
		if ($pctrs != "empty")
		{
			foreach($pctrs as $tmp_pctr)
			{
				if ($tmp_pctr == $file)
					$file_exist = 0;
			}
		}
		if ($file_exist == 1)
		{
			$target = "../pctr/";
			move_uploaded_file($tmp_file, $target . $file);
			$pdo->query("INSERT INTO picture VALUES (DEFAULT, '".$_SESSION['who_id']."', '".$file."')");
		}
	}
	else
		$file = "default.gif";
	$pdo->query("INSERT INTO annonce VALUES (DEFAULT, '".$_SESSION['who_id']."', '".$_POST['title']."',
				'".$_POST['type']."', '".$file."', '".$_POST['purpose']."', '".$_POST['price']."',
				DATE(NOW()), '".$_POST['place']."')");
	header('Location: annonce_organizer.php');
}

if (isset($_POST['del']))
{
	$pdo = get_db();
	$pctr = $pdo->query("SELECT pctr FROM annonce WHERE id='".$_POST['id']."'");
	$pctr = $pctr->fetch();
	if ($pctr['pctr'] != "default.gif")
	{
		unlink("../pctr/" . $pctr['pctr']);
		$pdo->query("DELETE FROM picture WHERE name='".$pctr['pctr']."'");
	}
	$pdo->query("DELETE FROM annonce WHERE id='".$_POST['id']."'");
	$pdo->query("ALTER TABLE annonce AUTO_INCREMENT = '".$_POST['id']."'");
}

if (isset($_POST['chg']))
{
	$pdo = get_db();
	$pdo->query("UPDATE annonce SET title='".$_POST['title']."', type='".$_POST['type']."', pctr='".$_POST['pctr_name']."',
				purpose='".$_POST['purpose']."', price='".$_POST['price']."', publish='".$_POST['publish']."',
				place='".$_POST['place']."' WHERE id='".$_POST['id']."'");
}