<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HostController extends AbstractController
{
    #[Route(path:"/hosts", name:"hosts")]
    public function hosts():Response
    {
        return $this->render('host/hosts.html.twig',[
            'hosts'=> HostRepository::getAllHosts(),
        ]);
    }

    #[Route(path:"/host/{slug}", name:"host", method:['GET'])]
    public function host(string $slug):Response
    {
        if (ProjectRepository::isHost($slug)) {

            return $this->render('host/host.html.twig', [
                "host"=> HostRepository::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/deletehost/{slug}", name:"deletehost", method:['GET'])]
    public function deleteHost(string $slug):Response
    {
        if (ProjectRepository::isHost($slug)) {

            return $this->render('host/deletehost.html.twig', [
                "host"=> HostRepository::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/updatehost/{slug}", name:"updatehost", method:['GET'])]
    public function updateHost(string $slug):Response
    {
        if (ProjectRepository::isHost($slug)) {

            return $this->render('host/updatehost.html.twig', [
                "host"=> HostRepository::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/inserthost/{slug}", name:"inserthost", method:['GET'])]
    public function insertHost(string $slug):Response
    {
        if (ProjectRepository::isHost($slug)) {

            return $this->render('host/inserthost.html.twig', [
                "host"=> HostRepository::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

}
