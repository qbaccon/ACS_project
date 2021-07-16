<?php
$dns = "mysql:host=localhost;dbname=portfolio_project;charset=utf8";
$pdo = new PDO($dns, "root", "");

if (isset($_POST['del']))
{
	foreach($_POST as $keys => $values)
	{
		$pdo->query("DELETE FROM project WHERE id='".$keys."'");
		$pdo->query("ALTER TABLE project AUTO_INCREMENT = '".$keys."'");
	}
	header("Location:Project_tool.php");
}

if (isset($_POST['add_prj']))
{
	if(!empty($_POST["title_a"]) && !empty($_POST["purpose_a"]) && !empty($_POST["link_a"])
		&& !empty($_POST["git_link_a"]) && !empty($_POST["pctr_name_a"]))
	{
		if (isset($_POST['visibility']))
			$vis = 1;
		else
			$vis = 0;
		$pdo->query("INSERT INTO project VALUES (DEFAULT, '".$_POST['title_a']."', '".$_POST['purpose_a']."', '".$_POST['link_a']."', '".$_POST['git_link_a']."', '".$_POST['pctr_name_a']."', $vis)");
		header("Location:Project_tool.php");
	}
}

if (isset($_POST['chg']))
{
	if (!empty($_POST['title']))
		$pdo->query("UPDATE project SET title='".$_POST["title"]."' WHERE id='".$_POST['id']."'");
	if (!empty($_POST['purpose']))
		$pdo->query("UPDATE project SET purpose='".$_POST["purpose"]."' WHERE id='".$_POST['id']."'");
	if (!empty($_POST['link']))
		$pdo->query("UPDATE project SET link='".$_POST["link"]."' WHERE id='".$_POST['id']."'");
	if (!empty($_POST['git_link']))
		$pdo->query("UPDATE project SET git_link='".$_POST["git_link"]."' WHERE id='".$_POST['id']."'");
	if (!empty($_POST['pctr_name']))
		$pdo->query("UPDATE project SET div_class='".$_POST["pctr_name"]."' WHERE id='".$_POST['id']."'");
	if (isset($_POST['display']))
		$pdo->query("UPDATE project SET display=1 WHERE id='".$_POST['id']."'");
	else
		$pdo->query("UPDATE project SET display=0 WHERE id='".$_POST['id']."'");
	header("Location:Project_tool.php");
}
?>