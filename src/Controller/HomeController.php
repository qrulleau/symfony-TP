<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


final class HomeController extends AbstractController
{

  #[Route(path: "/", name: "home")]
  public function test(Request $request): Response
  {
    $firstname = $request->query->get(key: 'prenom');

    return $this->render('home/home.html.twig', [
      'name' => $firstname,
    ]);
  }
}