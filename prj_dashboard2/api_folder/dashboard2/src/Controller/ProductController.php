<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
	// public function add_prod() : Response
	// {
	// 	$dns = "mysql:host=localhost;dbname=test_symfony;charset=utf8";
	// 	$pdo = new \PDO($dns, "root", "");
	// 	$pdo->query("INSERT INTO tprod VALUES (DEFAULT, 'prod', 200)");
	// 	return $this->render('prj_dashboard2/post_res.html.twig', []);
	// }

	public function dspl_prod() : Response
	{
		$dns = "mysql:host=localhost;dbname=test_symfony;charset=utf8";
		$pdo = new \PDO($dns, "root", "");
		$query = $pdo->query("SELECT id, place, name, ref, type, date_buy, date_end,
							price, advices, pctr_ticket, read_me FROM tprod");
		$res = $query->fetchAll();
		return $this->render('prj_dashboard2/post_res.html.twig', [
			'prod' => $res]);
	}

	public function prod_organizer() : RedirectResponse
	{
		$dns = "mysql:host=localhost;dbname=test_symfony;charset=utf8";
		$pdo = new \PDO($dns, "root", "");
		if (isset($_POST['rm']))
		{	
			$pdo->query("DELETE FROM tprod WHERE id='".$_POST['id']."'");
			$query = $pdo->query("SELECT id, place, name, ref, type, date_buy, date_end,
							price, advices, pctr_ticket, read_me FROM tprod");
			$res = $query->fetchAll();
			return $this->redirectToRoute('app_rdr_prod');
		}
	}
}