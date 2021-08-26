<?php
if (!empty($picture))
{
	foreach($picture as $key => $value)
	{
		echo "<div class='pctr_box'>";
		echo "<form action='pctr_dspl.php' method='post'>";
		echo "<input type='hidden' name='pctr_id' value='".$value['pctr_id']."'/>";
		echo "<input type='hidden' name='pctr_name' value='".$value['name']."'/>";
		echo "<p class='subtitle'> Nom de l'image</br>" . $value['name'] . "</p>";
		echo "<img src='../pctr/" . $value['name'] . "' width='200px' height='200px'/>";
		echo "<input type='submit' name='del' value='Supprimer'/>";
		echo "</form>";
		echo "</div>";
	}
}
else
	echo "<p id='empty_msg'>Aucune image trouvée</p>";