<?php
$pdo = get_db();
$favs = $pdo->query("SELECT favs.id AS id, favs.id_annonce AS id_annonce, title, pctr FROM favs
					INNER JOIN annonce ON annonce.id = id_annonce WHERE favs.id_user = '".$_SESSION['who_id']."'
					ORDER BY title");
if (!empty($favs))
	$favs = $favs->fetchAll();