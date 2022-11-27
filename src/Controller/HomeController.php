<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class HomeController extends AbstractController
{
    #[Route(path:"/", name:"home")]
    public function hosts():Response
    {
        return $this->render('home/home.html.twig',[
            
        ]);
    }

}
