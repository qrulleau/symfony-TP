<?php

namespace App\Repository;

use App\Entity\Project;

class ProjectRepository{
    
    private const PROJECTS = [

    ];

    public static function isProject(string $slug): bool
    {
        if(isset(self::PROJECTS[slug])) {

            return true ;
        }
    }

    public static function getAllProjects(): array
    {
        return ProjectRepository::PROJECTS;
    }

    public static function getProject(string $slug): array 
    {
        return ProjectRepository::PROJECTS[$slug];
    }
}