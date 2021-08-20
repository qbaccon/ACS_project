<?php

if (isset($_SESSION['connected']))
{
	echo "<div>";
	echo "<a href='view/annonce_organizer.php'>Gérer mes annonces</a>";
	echo "<a href='view/account_organizer.php'>Gérer mon compte</a>";
	echo "<a href='controller/logout.php'>Déconnexion</a>";
	echo "</div>";
}
else
{
	echo "<div>";
	echo "<a href='view/log_page.php'>Connexion</a>";
	echo "</div>";
}