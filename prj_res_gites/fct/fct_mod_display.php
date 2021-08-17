<?php
require_once("fct/db_con.php");
$db = get_db();
$sql ="SELECT id, type, title, purpose, pctrs_link, nb_bed, nb_bath, geoloc, price, dispo FROM liste_gites ";
$query = $db->prepare($sql);
$query->execute();
while($d = $query->fetch())
{
	if ($d['dispo'] == 1)
	{
		echo "<div class='modal' id='mod".$d['id']."'>";
		echo "<div id='pctr'><img src='pctrs/".$d['pctrs_link']."' height='250px' width='250px'</img></div>";
		echo "<div id='title'>";
		echo "<p>" . $d['title'] . " (" . $d['type'] . ")</p>";
		echo "</div>";
		echo "<div id='geoloc'>";
		echo "<p>" . $d['geoloc'] . "</p>";
		echo "</div>";
		echo "<div id='purpose'>";
		echo "<p>" . $d['purpose'] . "</p>";
		echo "</div>";
		echo "<div id='space'>";
		echo "<p>Chambre(s): " . $d['nb_bed'] . " </br>Salle de bain(s): " . $d['nb_bath'] . "</p>";
		echo "</div>";
		echo "<div id='price'>";
		echo "<p>Tarif: " . $d['price'] . " €/nuit</p>";
		echo "</div>";
		echo "<div class='mod_btn'>";
		echo "<button class='btn_return' id='".$d['id']."' onclick='close_modal(this.id)'>Retour</button>";
		echo "<form method='post' action='index.php'>";
		echo "<input value='".$d['id']."' name='id' type='hidden'></input>";
		echo "<input type='email' name='mail' placeholder='Votre mail' required></input>";
		echo "<button class='btn_res' name='btn_res' type='submit'>Réserver</button>";
		echo "</form>";
		echo "</div>";
		echo "</div>";
	}
}