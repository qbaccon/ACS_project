<?php

$pagedown = $page - 1;
if ($page > 1)
{
	if (isset($_GET['filter']))
	{
		$filter = $_GET['filter'];
		echo "<a href='index.php?page=$pagedown&filter=$filter'>Page précédente</a>";
	}
	else
		echo "<a href='index.php?page=$pagedown'>Page précédente</a>";
}
else
	echo "<p>Page précédente</p>";
$i = 0;
while ($i < $nb_annonce['nb'] / 12)
{
	$j = $i + 1;
	if ($j != $page)
	{
		if (isset($_GET['filter']))
		{
			$filter = $_GET['filter'];
			echo "<a href='index.php?page=$j&filter=$filter' class='page_num'>" . ($i + 1) . "</a>";
		}
		else
			echo "<a href='index.php?page=$j' class='page_num'>" . ($i + 1) . "</a>";
	}
	else
		echo "<p class='page_num'>" . ($i + 1) . "</p>";
	$i++;
}
$pageup = $page + 1;
if ($page < $nb_annonce['nb'] / 12)
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