<?php
echo "<div id='pctr'>";
echo "<img src='../pctr/".$annonce['pctr']."' width='260px' height='320px'></img>";
echo "</div>";
echo "<div id='values'>";
echo "<div id='ann_author'>";
echo "<p class='label'>Auteur</p>";
echo "<p>" . $annonce['pseudo'] . " (" . $annonce['mail'] . ")</p>";
echo "</div>";
echo "<div id='ann_publish'>";
echo "<p class='label'>Publication</p>";
echo "<p>" . $annonce['publish'] . "</p>";
echo "</div>";
echo "<div id='ann_name'>";
echo "<p class='label'>Nom</p>";
echo "<p>" . $annonce['title'] . "</p>";
echo "</div>";
echo "<div id='ann_type'>";
echo "<p class='label'>Genre</p>";
echo "<p>" . $annonce['type'] . "</p>";
echo "</div>";
echo "<div id='ann_place'>";
echo "<p class='label'>Adress</p>";
echo "<p>" . $annonce['place'] . "</p>";
echo "</div>";
echo "<div id='ann_price'>";
echo "<p class='label'>Prix</p>";
echo "<p>" . $annonce['price'] . " €</p>";
echo "</div>";
echo "<div id='ann_purpose'>";
echo "<p class='label'>Résumé</p>";
echo "<p>" . $annonce['purpose'] . "</p>";
echo "</div>";
echo "</div>";