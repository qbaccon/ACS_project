<?php
class Admin
{
	public $login;
	public $pass;

	public function __construct($login, $mdp)
	{
		$this->login = $login;
		$this->pass = $mdp;
	}
}