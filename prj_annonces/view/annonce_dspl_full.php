<?php
require_once ("model/index_fct.php");

foreach($annonce as $key => $value)
{
	$id = $value['ann_id'];
	echo "<div class='annonce_box'>";
	echo "<div class='pctr' style='background-image:url(pctr/".$value['pctr'].")'>";
	echo "<p id='ann_title'>".$value['title']."</p>";
	echo "<p id='ann_publish'>Publié par ".$value['pseudo']."</br> le ".$value['publish']."</p>";
	echo "</div>";
	echo "<div class='annonce_details_link'>";
	echo "<a href='view/annonce_detail.php?ann_id=$id'>Plus d'informations</a>";
	echo "</div>";
	// echo "<div class='details'>";
	// echo "<div id='type'>";
	// echo "<p class='label'>Genre</p>";
	// echo "<p class='value'>".$value['type']."</p>";
	// echo "</div>";
	// echo "<div id='price'>";
	// echo "<p class='label'>Prix (€)</p>";
	// echo "<p class='value'>".$value['price']."</p>";
	// echo "</div>";
	// echo "<div id='place'>";
	// echo "<p class='label'>Adresse</p>";
	// echo "<p class='value'>".$value['place']."</p>";
	// echo "</div>";
	// echo "<div id='purpose'>";
	// echo "<p class='label'>Description</p>";
	// echo "<p class='value'>".$value['purpose']."</p>";
	// echo "</div>";
	// echo "</div>";
	echo "</div>";
}
if (empty($annonce))
	echo "<p id='empty_msg'>Aucune annonce trouvé</p>";