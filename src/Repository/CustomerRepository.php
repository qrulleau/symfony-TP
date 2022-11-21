<?php

namespace App\Repository;

use App\Entity\Customer;

class CustomerRepository{
    
    private const CUSTOMERS = [

    ];

    public static function isCustomer(string $slug): bool
    {
        if(isset(self::CUSTOMERS[slug])) {

            return true ;
        }
    }

    public static function getAllCustomers(): array
    {
        return CustomerRepository::CUSTOMERS;
    }

    public static function getCustomer(string $slug): array 
    {
        return CustomerRepository::CUSTOMERS[$slug];
    }
}