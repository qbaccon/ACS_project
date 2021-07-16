<?php
require_once("db_con.php");
require_once("class_gite.php");
if (isset($_POST['del']))
{
	Gite::supr_gite($_POST['id']);
	header("Location:gites_tool.php");
}

if (isset($_POST['add_gite']))
{
	if(!empty($_POST["type_a"]) && !empty($_POST["title_a"]) && !empty($_POST["purpose_a"]) && (!empty($_POST["nb_bed_a"]) || $_POST["nb_bed_a"] == '0')
		&& (!empty($_POST["nb_bath_a"]) || $_POST["nb_bath_a"] == '0') && !empty($_POST["geoloc_a"]) && !empty($_POST["price_a"]) && !empty($_POST["pctr_name_a"]))
	{
		if (isset($_POST['dispo']))
			$dispo = 1;
		else
			$dispo = 0;
		Gite::add_gite($_POST["type_a"], $_POST["title_a"], $_POST["purpose_a"], $_POST["pctr_name_a"], $_POST["nb_bed_a"],
		$_POST["nb_bath_a"], $_POST["geoloc_a"], $_POST["price_a"], $dispo);
		header("Location:gites_tool.php");
	}
}

if (isset($_POST['chg']))
{
	if (isset($_POST['dispo']))
		$disp = 1;
	else
		$disp = 0;
	Gite::chg_gite($_POST['id'], $_POST['type'], $_POST['title'],
	$_POST['purpose'], $_POST['pctr_link'], $_POST['nb_bed'], $_POST['nb_bath'],
	$_POST['geoloc'], $_POST['price'], $disp);
	header("Location:gites_tool.php");
}

if (isset($_POST['upload']))
{
	$tmp_file = $_FILES['file']['tmp_name'];
	$file = $_FILES['file']['name'];
	$target = "pctrs/";
	move_uploaded_file($tmp_file, $target . $file);
}