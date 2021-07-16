<?php
class Gite
{
	public $type;
	public $title;
	public $purpose;
	public $pctrs;
	public $nbbed;
	public $nbbath;
	public $geoloc;
	public $price;
	public $disp;

	public function __construct($type, $title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp)
	{
		$this->type = $type;
		$this->title = $title;
		$this->purpose = $purpose;
		$this->pctrs = $pctrs;
		$this->nbbed = $nbbed;
		$this->nbbath = $nbbath;
		$this->geoloc = $geoloc;
		$this->price = $price;
		$this->disp = $disp;
	}

	public static function add_gite($type, $title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp)
	{
		$dns = "mysql:host=localhost;dbname=prj_res_gites;charset=utf8";
		$pdo = new PDO($dns, "root", "");
		$pdo->query("INSERT INTO liste_gites VALUES (DEFAULT, '".$type."', '".$title."', '".$purpose."', '".$pctrs."',
		'".$nbbed."', '".$nbbath."', '".$geoloc."', '".$price."', '".$disp."')");
	}

	public static function supr_gite($keys)
	{
		$dns = "mysql:host=localhost;dbname=prj_res_gites;charset=utf8";
		$pdo = new PDO($dns, "root", "");
		$pdo->query("DELETE FROM liste_gites WHERE id='".$keys."'");
		$pdo->query("ALTER TABLE liste_gites AUTO_INCREMENT = '".$keys."'");
	}

	public static function chg_gite($id, $type, $title, $purpose, $pctrs_link, $nb_bed, $nb_bath, $geoloc, $price, $disp)
	{
		$dns = "mysql:host=localhost;dbname=prj_res_gites;charset=utf8";
		$pdo = new PDO($dns, "root", "");
		if (!empty($type))
			$pdo->query("UPDATE liste_gites SET type='".$type."' WHERE id='".$id."'");
		if (!empty($title))
			$pdo->query("UPDATE liste_gites SET title='".$title."' WHERE id='".$id."'");
		if (!empty($purpose))
			$pdo->query("UPDATE liste_gites SET purpose='".$purpose."' WHERE id='".$id."'");
		if (!empty($pctrs_link))
			$pdo->query("UPDATE liste_gites SET pctrs_link='".$pctrs_link."' WHERE id='".$id."'");
		if (!empty($nb_bed) || $nb_bed == '0')
			$pdo->query("UPDATE liste_gites SET nb_bed='".$nb_bed."' WHERE id='".$id."'");
		if (!empty($nb_bath) || $nb_bath == '0')
			$pdo->query("UPDATE liste_gites SET nb_bath='".$nb_bath."' WHERE id='".$id."'");
		if (!empty($geoloc))
			$pdo->query("UPDATE liste_gites SET geoloc='".$geoloc."' WHERE id='".$id."'");	
		if (!empty($price))
			$pdo->query("UPDATE liste_gites SET price='".$price."' WHERE id='".$id."'");	
		$pdo->query("UPDATE liste_gites SET dispo='".$disp."' WHERE id='".$id."'");
	}

	public static function res_gite($id)
	{
		$dns = "mysql:host=localhost;dbname=prj_res_gites;charset=utf8";
		$pdo = new PDO($dns, "root", "");
		$pdo->query("UPDATE liste_gites SET dispo=0 WHERE id='".$id."'");
	}

	public static function send_mail($adr)
	{
		$msg = "Votre à bien été enregistré";
		mail($adr, "Résérvation", $msg);
	}
}

class Chambre extends Gite
{
	public function __construct($title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp)
	{
		parent::__construct("Chambre", $title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp);
	}
}

class Appartement extends Gite
{
	public function __construct($title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp)
	{
		parent::__construct("Appartement", $title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp);
	}
}

class Maison extends Gite
{
	public function __construct($title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp)
	{
		parent::__construct("Maison", $title, $purpose, $pctrs, $nbbed, $nbbath, $geoloc, $price, $disp);
	}
}