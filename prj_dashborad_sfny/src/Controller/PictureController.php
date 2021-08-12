<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/picture")
 */
class PictureController extends AbstractController
{
    /**
     * @Route("/", name="picture_index", methods={"GET"})
     */
    public function index(): Response
    {
		if (\file_exists('./uploads'))
		{
			$file = \scandir('./uploads');
			if (count($file) == 2)
				$file = "empty";
       		return $this->render('picture/index.html.twig', [
        	    'pictures' => $file,
			]);
		}
		$file = "empty";
		return $this->render('picture/index.html.twig', [
			'pictures' => $file,
	 	]);
    }

	/**
	 * @Route("/del", name="picture_del", methods={"POST"})
	 */
	public function del_pctr(): Response
	{
		if (isset($_POST['del']))
		{
			\unlink('./uploads/' . $_POST['file_name']);
			return $this->redirectToRoute('picture_index', [], Response::HTTP_SEE_OTHER);
		}
	}

	/**
	 * @Route("/show", name="picture_show", methods={"GET"})
	 */
	public function show_pctr(): Response
	{
		if (\file_exists('./uploads'))
		{
			$file = \scandir('./uploads');
			foreach($file as $pctr)
			{
				if ($pctr == $_GET['name'])
					return $this->render('picture/show_prod_pctr.html.twig', [
						'picture' => $_GET['name'],
						'ref' => $_GET['ref'],
					]);
			}
		}
		return $this->render('picture/show_prod_pctr.html.twig', [
			'picture' => 'empty',
			'ref' => $_GET['ref'],
		]);
	}
}
