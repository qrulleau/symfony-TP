<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Customer;

final class CustomerController extends AbstractController
{
    #[Route(path:"/customers", name:"customers")]
    public function customers():Response
    {
        return $this->render('customer/customers.html.twig',[
            'customers'=> Customer::getAllCustomers(), "customer" => "active"
        ]);
    }

    #[Route(path:"/customer/{slug}", name:"customer", methods:['GET'])]
    public function customer(string $slug):Response
    {
        if (Customer::isCustomer($slug)) {

            return $this->render('customer/customer.html.twig', [
                "customer"=> Customer::getCustomer($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Customer with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/deletecustomer/{slug}", name:"deletecustomer", methods :['GET'])]
    public function deleteCustomer(string $slug):Response
    {
        if (Customer::isCustomer($slug)) {

            return $this->render('customer/deletecustomer.html.twig', [
                "customer"=> Customer::getCustomer($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Customer with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/updatecustomer/{slug}", name:"updatecustomer", methods:['GET'])]
    public function updateCustomer(string $slug):Response
    {
        if (Customer::isCustomer($slug)) {

            return $this->render('customer/updatecustomer.html.twig', [
                "customer"=> Customer::getCustomer($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Customer with slug %s dosent exists.', $slug));
    }

    #[Route(path:"/insertcustomer/{slug}", name:"insertcustomer", methods:['GET'])]
    public function insertCustomer(string $slug):Response
    {
        if (Customer::isCustomer($slug)) {

            return $this->render('customer/insertcustomer.html.twig', [
                "customer"=> Customer::getCustomer($slug),
            ]);
        }

        throw new NotFoundHttpException(sprintf('the Customer with slug %s dosent exists.', $slug));
    }


}
