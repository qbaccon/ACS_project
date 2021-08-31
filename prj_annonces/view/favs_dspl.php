<?php

foreach($favs as $key=>$value)
{
	$id = $value['id_annonce'];
	echo "<div class='annonce_box'>";
	echo "<div class='pctr'>";
	echo "<p id='ann_title'>".$value['title']."</p>";
	echo "<img src='../pctr/".$value['pctr']."' height='260px' width='200px'>";
	echo "</div>";
	echo "<div class='annonce_details_link'>";
	echo "<a href='annonce_detail.php?ann_id=$id'>Plus d'informations</a>";
	echo "</div>";
	echo "<div>";
	echo "<form action='favs_organizer.php' method='post'>";
	echo "<input type='hidden' name='favs_id' value='".$value['id']."'/>";
	echo "<input type='submit' name='del_favs' value='Supprimer'/>";
	echo "</form>";
	echo "</div>";
	echo "</div>";
}
if (empty($favs))
	echo "<p id='empty_msg'>Aucune annonce trouvé</p>";