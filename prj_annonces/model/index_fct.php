<?php
require_once ("controller/get_db.php");

function apply_filter($pdo, $filter)
{
	$annonce = $pdo->query("SELECT id_user, title, type, pctr, purpose, price, DATE_FORMAT(publish, '%e %b %Y') AS publish, place, user.id, pseudo, mail
								FROM annonce INNER JOIN user ON user.id = id_user WHERE type = '".$filter."' ORDER BY annonce.id DESC");
	return $annonce;
}

$pdo = get_db();
if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] - 10 <= $nb_annonce['nb'] / 10)
	$page = $_GET['page'];
else
	$page = 1;
$offset = (10 * $page) - 10;
if (isset($_GET['filter']) && ($_GET['filter'] == "fps" || $_GET['filter'] == "str" || $_GET['filter'] == "act" || $_GET['filter'] == "adv" ||
	$_GET['filter'] == "rpg" || $_GET['filter'] == "mmorpg" || $_GET['filter'] == "pzl"))
{
	$nb_annonce = $pdo->query("SELECT COUNT(*) AS nb FROM annonce WHERE type = '".$_GET['filter']."'");
	$nb_annonce = $nb_annonce->fetch();
	$annonce = apply_filter($pdo, $_GET['filter']);
}
else
{
	$nb_annonce = $pdo->query("SELECT COUNT(*) AS nb FROM annonce");
	$nb_annonce = $nb_annonce->fetch();
	$annonce = $pdo->query("SELECT id_user, title, type, pctr, purpose, price, DATE_FORMAT(publish, '%e %b %Y') AS publish, place, user.id, pseudo, mail
							FROM annonce INNER JOIN user ON user.id = id_user ORDER BY annonce.id DESC
							LIMIT $offset, 10");
}
if (!empty($annonce))
	$annonce = $annonce->fetchAll();