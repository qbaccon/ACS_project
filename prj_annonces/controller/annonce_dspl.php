<?php

require_once ("get_db.php");
session_start();
$pdo = get_db();
$user = $pdo->query("SELECT id, pseudo, mail, password FROM user WHERE mail = '".$_SESSION['who']."'");
$user = $user->fetch();
$annonce = $pdo->query("SELECT id, id_user, title, pctr, purpose, price, publish, place FROM annonce WHERE id_user = '".$user['id']."'");
$annonce = $annonce->fetchAll();
if (!empty($annonce))
{
	// echo 
}
else
	echo "Aucune annonce trouvé";