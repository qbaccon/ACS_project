<?php

$pagedown = $page - 1;
if ($page > 1)
	echo "<a href='index.php?page=$pagedown'>Page précédente</a>";
else
	echo "<p>Page précédente</p>";
$i = 0;
while ($i <= $nb_annonce['nb'] / 10)
{
	$j = $i + 1;
	if ($j != $page)
		echo "<a href='index.php?page=$j' class='page_num'>" . ($i + 1) . "</a>";
	else
		echo "<p class='page_num'>" . ($i + 1) . "</p>";
	$i++;
}
$pageup = $page + 1;
if ($page < $nb_annonce['nb'] / 10)
{
	if (isset($_GET['filter']))
	{
		$filter = $_GET['filter'];
		echo "<a href='index.php?page=$pageup&filter=$filter'>Page suivante</a>";
	}
	else
		echo "<a href='index.php?page=$pageup'>Page suivante</a>";
}
else
	echo "<p>Page suivante</p>";