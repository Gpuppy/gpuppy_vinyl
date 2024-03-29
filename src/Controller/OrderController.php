<?php

namespace App\Controller;

use App\Service\CartService;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order/create', name: 'order_index')]
    //public function index(): Response
    public function index(CartService $cartService): Response
    {

        if(!$this->getUser())
        {
            return $this->redirectToRoute('app_login');
        }

        /*$form = $this->createForm(OrderType::class, data: null, options: [
            'user' => $this->getUser()
        ]);*/

        return $this->render('order/index.html.twig', [
            /*'controller_name' => 'OrderController'
            'form' => $form->createView(),
            'recapCart => $cartService->getTotal()*/
        ]);
    }
}