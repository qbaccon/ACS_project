<?php

function get_db()
{
	$servername="localhost";
	$dbname ="prj_annonce";
	$username ="root";
	$password ="";
	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	return $pdo;
}