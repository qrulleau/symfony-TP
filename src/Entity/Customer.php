<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CustomerRepository;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private int $id;

  #[ORM\Column(type: 'string' ,length: 255)]
  private string $code;

  #[ORM\Column(type: 'string' ,length: 255)]
  private string $name;

  #[ORM\Column(type: 'text')]
  private string $notes;


  public static function getAllCustomers()
  {

  }

  public static function getName()
  {

  }
  public static function isCustomer()
  {
    
  }
}