<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProjectRepository;
use App\Entity\Customer;
use App\Entity\Host;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]

class Project
{

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private int $id;


  #[ORM\Column(type: 'string', length: 255)]
  private string $name;

  #[ORM\Column(type: 'string', length: 255)]
  private string $code;

  #[ORM\Column(type: 'string', length: 255)]
  private string $lasspass_folder;

  #[ORM\Column(type: 'string', length: 255)]
  private string $link_mock_ups;

  #[ORM\Column(type: 'integer')]
  private int $managed_server;

  #[ORM\Column(type: 'text')]
  private string $notes;

  #[ORM\ManyToOne(targetEntity: Customer::class)]
  #[ORM\JoinColumn(name:"customer", referencedColumnName:"id")]
  private Customer $customer;

  #[ORM\ManyToOne(targetEntity: Host::class)]
  #[ORM\JoinColumn(name:"host", referencedColumnName:"id")]
  private Customer $host;

  // #[ManyToOne(targetEntity: Address::class)]
  // #[JoinColumn(name: 'address_id', referencedColumnName: 'id')]
  // private Customer  $customer ;


  public static function getAllProjects()
  {

  }

  public static function getProject()
  {
    
  }
  
  public static function isProject()
  {

  }
}