<?php

require_once ("get_db.php");
require_once ("get_pctr.php");
// session_start();
$pdo = get_db();
$files = get_pctr();
// $user = $pdo->query("SELECT id, pseudo, mail, password FROM user WHERE mail = '".$_SESSION['who']."'");
// $user = $user->fetch();
// $annonce = $pdo->query("SELECT id, id_user, title, type, pctr, purpose, price, publish, place FROM annonce WHERE id_user = '".$user['id']."'");
$annonce = $pdo->query("SELECT user.id AS user_id, annonce.id AS ann_id, id_user, title, type, pctr, purpose, price, publish, place FROM user
						INNER JOIN annonce ON id_user = user.id WHERE user.id = '".$_SESSION['who_id']."'");
$annonce = $annonce->fetchAll();
if (!empty($annonce))
{
	foreach($annonce as $key => $value)
	{
		echo "<form action='annonce_organizer.php' method='post'>";
		echo "<div class='annonce_box'>";
		echo "<input value='".$value['ann_id']."' name='id' type='hidden'></input>";
		echo "<div class='pctr'><img src='../pctr/".$value['pctr']."' height='200px' width='200px'></img></div>";
		echo "<div class='title'>";
		echo "<label for='title'>Titre</label>";
		echo "<input id='a".$value['ann_id']."' type='text' value='". $value['type']."' name='title' disabled></input>";
		echo "</div>";
		echo "<div class='place'>";
		echo "<label for='place'>Adresse</label>";
		echo '<input id="a'.$value['ann_id'].'" type="text" value="'. $value['title'].'" name="place" disabled></input>';
		echo '</div>';
		echo "<div class='type'>";
		echo "<label for='type'>Catégorie</label>";
		echo "<input id='a".$value['ann_id']."' type='text' value='". $value['type']."' name='type' disabled></input>";
		echo "</div>";
		echo "<div class='pctr_name'>";
		echo "<label for='pctr_name'>Nom de l'image</label>";
		// echo "<input id='a".$value['ann_id']."' type='text' value='". $value['pctr']."' name='pctr_name' disabled></input>";
		echo "<select id='a".$value['ann_id']."' name='pctr_name' disabled>";
		echo "<option value='".$value['pctr']."'>" . $value['pctr'] . "</option>";
		foreach ($files as $item)
		{
			if ($item != '.' && $item != '..' && $item != $value['pctr'])
				echo "<option value='".$item."'> $item </option>";
		}
		echo "</select>";
		echo "</div>";
		echo "<div class='price'>";
		echo "<label for='price'>Prix (€)</label>";
		echo "<input id='a".$value['ann_id']."' type='number' value='". $value['price']."' name='price' disabled></input>";
		echo "</div>";
		echo '<div class="purpose">';
		echo "<label for='purpose'>Description</label>";
		echo '<textarea id="a'.$value['ann_id'].'" name="purpose" disabled>' . $value['purpose'] . '</textarea>';
		echo '</div>';
		echo '<div class="publish">';
		echo "<label for='publish'>Date publication</label>";
		echo '<input type="date" id="a'.$value['ann_id'].'" name="publish" value="'.$value['publish'].'" disabled readonly></input>';
		echo '</div>';
		echo "<div class='chg' id='chg".$value['ann_id']."'><button class='chg' id='a".$value['ann_id']."' type='submit' name='chg'>Valider</button></div>";
		echo "<div class='enbl' id='enbl".$value['ann_id']."'><button class='enbl' id='".$value['ann_id']."' onclick='enbl_input(this.id)' type='button'>Modifier</button></div>";
		echo "<div class='del'><button id='".$value['ann_id']."' id='del' name='del'>Supprimer</button></div>";
		echo "</div>";
		echo "</form>";
	}
}
else
	echo "<p id='warn_mess'>Aucune annonce trouvé</p>";