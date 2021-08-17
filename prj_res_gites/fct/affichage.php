<?php
require_once("db_con.php");
$db = get_db();
$sql ="SELECT id, title, pctrs_link, dispo FROM liste_gites ";
$query = $db->prepare($sql);
//execution de la query
$query->execute();
while($d = $query->fetch())
{
	if ($d['dispo'] == 1)
	{
		echo "<div class='gite_box' id='box".$d['id']."' style='background-image: url(" . '"' . "pctrs/" . $d["pctrs_link"] . "')'>";
		echo "<p class='title'>" . $d['title'] . "</p>";
		echo "<button class='info' id='".$d["id"]."' onclick='open_modal(this.id)'>Voir plus</button>";
		echo "</div>";
	}
}