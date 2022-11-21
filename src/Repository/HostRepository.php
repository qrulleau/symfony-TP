<?php

namespace App\Repository;

use App\Entity\Host;

class HostRepository{

    private const HOSTS = [

    ];

    public static function isHost(string $slug): bool
    {
        if(isset(self::HOSTS[slug])) {

            return true ;
        }
    }

    public static function getAllHosts(): array
    {
        return HostRepository::HOSTS;
    }

    public static function getHost(string $slug): array 
    {
        return HostRepository::HOSTS[$slug];
    }
}