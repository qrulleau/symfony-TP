<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\HostRepository;

#[ORM\Entity(repositoryClass: HostRepository::class)]
class Host
{

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private int $id;

  #[ORM\Column(type: 'text' ,length: 255)]
  private string $code;

  #[ORM\Column(type: 'text' ,length: 255)]
  private string $name;

  #[ORM\Column(type: 'text')]
  private string $notes;

  public static function getAllHosts()
  {

  }

  public static function getHost()
  {
    
  }
  public static function isHost()
  {

  }
}