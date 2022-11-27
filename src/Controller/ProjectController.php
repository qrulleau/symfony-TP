<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Project;

final class ProjectController extends AbstractController
{
    #[Route(path:"/projects", name:"projects")]
    public function projects():Response
    {
        return $this->render('project/projects.html.twig',[
            'projects'=> Project::getAllProjects(), "project" => "active"
        ]);
    }

    #[Route(path:"/project/{slug}", name:"project", methods:['GET'])]
    public function project(string $slug):Response
    {
        if (Project::isProject($slug)) {

            return $this->render('project/project.html.twig', [
                "project"=> Project::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/deleteproject/{slug}", name:"deleteproject", methods:['GET'])]
    public function deleteProject(string $slug):Response
    {
        if (Project::isProject($slug)) {

            return $this->render('project/deleteproject.html.twig', [
                "project"=> Project::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/updateproject/{slug}", name:"updateproject", methods:['GET'])]
    public function updateProject(string $slug):Response
    {
        if (Project::isProject($slug)) {

            return $this->render('project/updateproject.html.twig', [
                "project"=> Project::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/insertproject/{slug}", name:"insertproject", methods:['GET'])]
    public function insertProject(string $slug):Response
    {
        if (Project::isProject($slug)) {

            return $this->render('customer/insertproject.html.twig', [
                "project"=> Project::getProject($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Project with slug %s dosent exists.', $slug));
    }


}
