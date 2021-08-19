<?php
require_once ("../controller/get_db.php");
$pdo = get_db();
$picture = $pdo->query("SELECT user.id, picture.id AS pctr_id, id_user, name FROM user INNER JOIN
						picture ON id_user = user.id WHERE user.id = '".$_SESSION['who_id']."'");
$picture = $picture->fetchAll();