<?php
if (isset($_POST['send_msg']))
{
	$from = $annonce['mail'];
	$sbj = "Annonce";
	$msg = $_POST['msg'];
	$headers = array('From' => $_POST['email']);
	mail($from, $sbj, $msg, $headers);
}