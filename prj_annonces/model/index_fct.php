<?php
require_once ("controller/get_db.php");
$pdo = get_db();
$annonce = $pdo->query("SELECT id_user, title, type, pctr, purpose, price, DATE_FORMAT(publish, '%e %b %Y') AS publish, place, user.id, pseudo, mail
						FROM annonce INNER JOIN user ON user.id = id_user");
if (!empty($annonce))
	$annonce = $annonce->fetchAll();