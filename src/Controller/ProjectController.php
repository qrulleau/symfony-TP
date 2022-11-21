<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

final class ProjectController extends AbstractController
{
    #[Route(path:"/projects", name:"projects")]
    public function projects():Response
    {
        return $this->render('project/projects.html.twig',[
            'projects'=> ProjectRepository::getAllProjects(),
        ]);
    }

    #[Route(path:"/project/{slug}", name:"project", method:['GET'])]
    public function project(string $slug):Response
    {
        if (ProjectRepository::isProject($slug)) {

            return $this->render('project/project.html.twig', [
                "project"=> ProjectRepository::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/deleteproject/{slug}", name:"deleteproject", method:['GET'])]
    public function deleteProject(string $slug):Response
    {
        if (ProjectRepository::isProject($slug)) {

            return $this->render('project/deleteproject.html.twig', [
                "project"=> ProjectRepository::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/updateproject/{slug}", name:"updateproject", method:['GET'])]
    public function updateProject(string $slug):Response
    {
        if (ProjectRepository::isProject($slug)) {

            return $this->render('project/updateproject.html.twig', [
                "project"=> ProjectRepository::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/insertproject/{slug}", name:"insertproject", method:['GET'])]
    public function insertProject(string $slug):Response
    {
        if (ProjectRepository::isProject($slug)) {

            return $this->render('customer/insertproject.html.twig', [
                "project"=> ProjectRepository::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }


}
