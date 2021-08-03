<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
	public function login(): Response
	{
		return $this->render('prj_dashboard2/login.html.twig', []);
	}

	public function dspl_res(): Response
	{
		return $this->render('prj_dashboard2/post_res.html.twig', []);
	}

	public function index(): RedirectResponse
	{
		if (isset($_POST['test']))
		{
			if ($_POST['nom'] == "admin" && $_POST['pwd'] == "1234")
			{
				// $_SESSION['connected'] = "oui";
				return $this->redirectToRoute('app_rdr_prod');
			}
			else
				return $this->redirectToRoute('app_login');
		}
		else
		{
			return $this->redirectToRoute('app_login');
		}
	}
}