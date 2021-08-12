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
     * @Route("/", name="picture_index")
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
	 * @Route("/del", name="picture_del")
	 */
	public function del_pctr(): Response
	{
		if (isset($_POST['del']))
		{
			\unlink('./uploads/' . $_POST['file_name']);
			return $this->redirectToRoute('picture_index', [], Response::HTTP_SEE_OTHER);
		}
	}
}
