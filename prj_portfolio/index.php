<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/index_day.css"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio</title>
	</head>
	<body>
		<?php include "sec_nav.php"?>
		<a id="anchor_me"></a>
		<?php include "sec_me.php"?>
		<a id="anchor_skill"></a>
		<?php include "sec_skill.php"?>
		<a id="anchor_project"></a>
		<?php include "sec_project.php"?>
		<a id="anchor_contact"></a>
		<?php include "sec_contact.php"?>
		<div class="light_mod">
			<a id="night" onclick="togglelight('n')"><img src="pctr/night_token.gif"/></a>
			<a id="day" onclick="togglelight('d')"><img src="pctr/light_token.gif"/></a>
		</div>
	</body>
	<footer>
		<div>
			<p>&copyCopyright Quentin BACCON</p>
		</div>
	<footer>
	<script src="script/desc_prj.js"></script>
	<script src="script/light_mod.js"></script>
	<script src="script/nav_bar.js"></script>
</html>