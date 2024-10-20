<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;


class ProductsController extends AbstractController
{
    #[Route('/prodotti', name: 'app_products')]
    public function index(EntityManagerInterface $em): Response
    {
        $enabledProducts = $em->getRepository(Product::class)->findBy(['enabled' => true]);

        return $this->render('products/index.html.twig', [
            'products' => $enabledProducts,
        ]);
    }
}
