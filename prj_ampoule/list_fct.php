<?php
function display($resultat1, $mark)
{
	if (!empty($resultat1))
	{
		echo "<div class='filter'>";
		echo "<button type='submit' id='filter_date' name='filter_date'>Tri par date</button>";
		echo "<button type='submit' id='filter_floor' name='filter_floor'>Tri par étage</button>";
		echo "<button type='submit' id='filter_place' name='filter_place'>Tri par emplacement</button>";
		echo "<button type='submit' id='filter_price' name='filter_price'>Tri par prix</button>";
		echo "</div>";
		echo "<table>";
		echo "<tr>";
		if ($mark == "date")
			echo "<td id='col'><strong>Date</strong></td>";
		else
			echo "<td id='col'>Date</td>";
		if ($mark == "floor")
			echo "<td id='col'><strong>Numero d'etage</strong></td>";
		else
			echo "<td id='col'>Numero d'etage</td>";
		if ($mark == "place")
			echo "<td id='col'><strong>Emplacement</strong></td>";
		else
			echo "<td id='col'>Emplacement</td>";
		if ($mark == "price")
			echo "<td id='col'><strong>Prix</strong></td>";
		else
			echo "<td id='col'>Prix</td>";
		echo "<th id='full'></th>";
		echo "</tr>";
		foreach($resultat1 as $key => $value)
		{
			echo "<tr>";
			echo "<td>" . $value["date"] . "</td>";
			echo "<td>" . "n°" . $value["floor"] . "</td>";
			echo "<td>" . $value["area"] . "</td>";
			echo "<td>" . $value["price"] . " €" . "</td>";
			echo "<td><input type='checkbox' id='".$value["id"]."' name='".$value["id"]."'" . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		// echo "<div class='page'>";
		// echo "<button type='submit' id='pg_down' name='pg_down'><</button>";
		// echo "<p>1</p>";
		// echo "<button type='submit' id='pg_up' name='pg_up'>></button>";
		// echo "</div>";
		echo "<div class='btn'>";
		echo "<button onclick='add_mod()' type='button' id='mod_btn_open'>Modifier une intervention</button>";
		echo "<button onclick='myFunction()' type='submit' id='del' name='del'>Supprimer les cases cocher</button>";
		echo "</div>";
	}
	else
	{
		echo "<p>Aucune intervention n'as été enregistrée</p>";
	}
}

$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");
// $query2 = $pdo->query("SELECT COUNT(id) AS nbe FROM test");
// $res2 = $query2->fetchAll();
// if (isset($_POST['pg_down']))
// {
// 	if ($pg > 0)
// 	{
// 		$pg -= 1;
// 		$spg = $pg * 4;
// 		$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2 LIMIT $spg, 4");
// 		$resultat1 = $query1->fetchAll();
// 		$mark = "date";
// 		display($resultat1, $mark);
// 	}
// }
// else if (isset($_POST['pg_up']))
// {
// 	if ($pg < $res2['nbe'])
// 	{
// 		$pg += 1;
// 		$spg = $pg * 4;
// 		$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2 LIMIT $spg, 4");
// 		$resultat1 = $query1->fetchAll();
// 		$mark = "date";
// 		display($resultat1, $mark);
// 	}
// }
// else
// {
// 	$pg = 0;
// 	$spg = 0;
// 	$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test LIMIT $spg, 4");
// 	$resultat1 = $query1->fetchAll();
// 	$mark = "date";
// 	display($resultat1, $mark);
// }

if (isset($_POST['filter_date']))
{
	$query1 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY date");
	$resultat1 = $query1->fetchAll();
	$mark = "date";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_floor']))
{
	$query1 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY floor");
	$resultat1 = $query1->fetchAll();
	$mark = "floor";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_place']))
{
	$query1 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY area");
	$resultat1 = $query1->fetchAll();
	$mark = "place";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_price']))
{
	$query1 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY price");
	$resultat1 = $query1->fetchAll();
	$mark = "price";
	display($resultat1, $mark);
}
else
{
	$query1 = $pdo->query("SELECT id, DATE_FORMAT(date, '%d/%m/%Y') AS date, floor, area, price FROM info_chmg ORDER BY date");
	if ($query1 != 'false')
	{
		$resultat1 = $query1->fetchAll();
	}
	else
	{
		$resultat1 = '';
	}
	$mark = "date";
	display($resultat1, $mark);
}
if (isset($_POST['del']))
{
	foreach($_POST as $keys => $values)
	{
		$pdo->query("DELETE FROM info_chmg WHERE id='".$keys."'");
		$pdo->query("ALTER TABLE info_chmg AUTO_INCREMENT = '".$keys."'");
	}
	header("Refresh:0");
}
?>