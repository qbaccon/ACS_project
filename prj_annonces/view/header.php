<?php

if (isset($_SESSION['connected']))
{
	echo "<div id='nav_menu'>";
	echo "<p id='menu_tkn' onclick='toggle_nav_menu()'>&#9776</p>";
	echo "<a class='link_page' href='view/annonce_organizer.php'>Mes annonces</a>";
	echo "<a class='link_page' href='view/favs_organizer.php'>Mes favoris</a>";
	echo "<a class='link_page' href='view/account_organizer.php'>Mon compte</a>";
	echo "<a class='link_page' href='controller/logout.php'>Déconnexion</a>";
	echo "</div>";
}
else
{
	echo "<div>";
	echo "<a href='view/log_page.php'>Connexion</a>";
	echo "</div>";
}