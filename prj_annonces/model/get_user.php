<?php
$pdo = get_db();
$user = $pdo->query("SELECT id, pseudo, mail, password FROM user WHERE id = '".$_SESSION['who_id']."'");
if (!empty($user))
	$user = $user->fetch();