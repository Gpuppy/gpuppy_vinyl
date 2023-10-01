<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/my-cart', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {
        return $this->render('cart/index.html.twig' , [
            'cart' => $cartService->getTotal()

    ]);
    }

    #[Route('/my-cart/add/{id<\d+>}', name:'cart_add')]
    public function addToCart(CartService $cartService, int $id ) : Response
    {
        $cartService->addToCart($id);

        return $this->redirectToRoute('cart_index');
    }
    #[Route('/my-cart/remove/{id<\d+>}', name: 'cart_remove')]
    public function removeToCart(CartService $cartService, int $id): Response
    {
        $cartService->removeToCart($id);

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/my-cart/decrease/{id<\d+>}', name: 'cart_decrease')]
    public function decrease(CartService $cartService, $id): RedirectResponse
    {
        $cartService->decrease($id);

        return $this->redirectToRoute('cart_index');
    }


    #[Route('/my-cart/removeAll', name:'cart_removeAll')]
    public function removeAll(CartService $cartService) : Response
    {
        $cartService->removeCartAll();

        return $this->redirectToRoute('cart_index');
    }
    /**
     * Calculates the item total.
     *
     * @return float|int
     */
    public function getTotal(): float
    {
        return $this->getVinyl()->getPrice() * $this->getQuantity();
    }
    /**
     * Calculates the order total.
     *
     * @return float
     */

    /*public function getTotal(): float
    {
        $total = 0;

        foreach ($this->getItems() as $item) {
            $total += $item->getTotal();
        }

        return $total;
    }*/



}
