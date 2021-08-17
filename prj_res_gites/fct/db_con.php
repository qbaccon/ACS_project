<?php 

function get_db()
{
	$servername="localhost";
	$dbname ="prj_res_gites";
	$username ="root";
	$password ="";

	try {
	$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	} catch(PDOEXCEPTION $e){

		echo "Connexion failed ! Try again.". $e ->getMessage();
	}
	return $db;
}