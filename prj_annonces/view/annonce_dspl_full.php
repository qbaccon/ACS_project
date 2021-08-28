<?php
require_once ("model/index_fct.php");

foreach($annonce as $key => $value)
{
	$id = $value['ann_id'];
	echo "<div class='annonce_box'>";
	// echo "<div class='pctr' style='background-image:url(pctr/".$value['pctr'].")'>";
	echo "<div class='pctr'>";
	echo "<p id='ann_title'>".$value['title']."</p>";
	echo "<img src='pctr/".$value['pctr']."' height='260px' width='200px'>";
	echo "<p id='ann_publish'>Publié par ".$value['pseudo']."</br> le ".$value['publish']."</p>";
	echo "</div>";
	echo "<div class='annonce_details_link'>";
	echo "<a href='view/annonce_detail.php?ann_id=$id'>Plus d'informations</a>";
	echo "</div>";
	echo "</div>";
}
if (empty($annonce))
	echo "<p id='empty_msg'>Aucune annonce trouvé</p>";