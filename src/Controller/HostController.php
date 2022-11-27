<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Host;

final class HostController extends AbstractController
{
    #[Route(path:"/hosts", name:"hosts")]
    public function hosts():Response
    {
        return $this->render('host/hosts.html.twig',[
            'hosts'=> Host::getAllHosts(),  "host" => "active"
        ]);
    }

    #[Route(path:"/host/{slug}", name:"host", methods:['GET'])]
    public function host(string $slug):Response
    {
        if (Host::isHost($slug)) {

            return $this->render('host/host.html.twig', [
                "host"=> Host::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/deletehost/{slug}", name:"deletehost", methods:['GET'])]
    public function deleteHost(string $slug):Response
    {
        if (Host::isHost($slug)) {

            return $this->render('host/deletehost.html.twig', [
                "host"=> Host::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/updatehost/{slug}", name:"updatehost", methods:['GET'])]
    public function updateHost(string $slug):Response
    {
        if (Host::isHost($slug)) {

            return $this->render('host/updatehost.html.twig', [
                "host"=> Host::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/inserthost/{slug}", name:"inserthost", methods:['GET'])]
    public function insertHost(string $slug):Response
    {
        if (Host::isHost($slug)) {

            return $this->render('host/inserthost.html.twig', [
                "host"=> Host::getHost($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Host with slug %s dosent exists.', $slug));
    }

}
