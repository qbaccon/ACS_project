<?php

$pdo = get_db();
if (isset($_GET['ann_id']))
	$annonce = $pdo->query("SELECT pseudo, mail, title, type, pctr, purpose, price, DATE_FORMAT(publish, '%e %b %Y') AS publish, place FROM user
							INNER JOIN annonce ON id_user = user.id WHERE annonce.id = '".$_GET['ann_id']."'");
else
	header("Location: ../index.php");
$annonce = $annonce->fetch();