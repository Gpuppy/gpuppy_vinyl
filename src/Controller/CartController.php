<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/my-cart', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {

        return $this->render('cart/index.html.twig' , [
            'cart' => $cartService->getTotal()
            /* 'controller_name' => 'CartController',*/
    ]);
    }

    #[Route('/my-cart/add/{id<\d+>}', name:'cart_add')]
    public function addToRoute(CartService $cartService,$id ) : Response
    {
        $cartService->addToCart($id);

        return $this->redirectToRoute('cart_index');
    }
    #[Route('/my-cart/removeAll', name:'cart_removeAll')]
    public function removeAll(CartService $cartService) : Response
    {
        $cartService->removeCartAll();

        return $this->redirectToRoute('/vinyl');
    }
}
