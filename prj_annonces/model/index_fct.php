<?php
require_once ("controller/get_db.php");
$pdo = get_db();
$nb_annonce = $pdo->query("SELECT COUNT(*) AS nb FROM annonce");
$nb_annonce = $nb_annonce->fetch();
if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] - 1 <= $nb_annonce['nb'] / 10)
	$page = $_GET['page'];
else
	$page = 1;
$offset = (10 * $page) - 10;
$annonce = $pdo->query("SELECT id_user, title, type, pctr, purpose, price, DATE_FORMAT(publish, '%e %b %Y') AS publish, place, user.id, pseudo, mail
						FROM annonce INNER JOIN user ON user.id = id_user ORDER BY annonce.id DESC
						LIMIT $offset, 10");
if (!empty($annonce))
	$annonce = $annonce->fetchAll();