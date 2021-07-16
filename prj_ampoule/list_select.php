<?php
	$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
	$pdo = new PDO($dns, "root", "");
	$query2 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY date");
	$resultat2 = $query2->fetchAll();
	echo "<select name='choose' id='choose'>";
	foreach ($resultat2 as $keyr => $valuer)
	{
		echo "<option value='".$valuer["id"]."'>";
		echo $valuer["date"] . " | étage n°" . $valuer["floor"] .
			" | " . $valuer["area"] . " | " . $valuer["price"] . " €";
		echo "</option>";
	}
	echo "</select>";
	if (isset($_POST['change']))
	{
		if (!empty($_POST['date_ch']))
			$pdo->query("UPDATE info_chmg SET date='".$_POST["date_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['floor_ch']))
			$pdo->query("UPDATE info_chmg SET floor='".$_POST["floor_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['place_ch']))
			$pdo->query("UPDATE info_chmg SET area='".$_POST["place_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['price_ch']))
			$pdo->query("UPDATE info_chmg SET price='".$_POST["price_ch"]."' WHERE id='".$_POST["choose"]."'");
		header("Refresh:0");
	}
?>