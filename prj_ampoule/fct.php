<?php
$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");

if (isset($_POST['add']))
{
	if(!empty($_POST["date"]) && !empty($_POST["floor"]) && !empty($_POST["place"])
		&& !empty($_POST["price"]))
	{
		$pdo->query("INSERT INTO info_chmg VALUES (DEFAULT, STR_TO_DATE('".$_POST["date"]."', '%Y-%m-%d'), '".$_POST["floor"]."',
			'".$_POST["place"]."', '".$_POST["price"]."')");
	}
}
?>