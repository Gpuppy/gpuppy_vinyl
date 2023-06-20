<?php

namespace App\Controller;

use App\Entity\Vinyl;
use App\Repository\VinylRepository;
use Doctrine\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VinylController extends AbstractController
{

    public function __construct(private readonly EntitymanagerInterface $entityManager)
    {

    }

    #[Route('/vinyl', name: 'app_vinyl')]
    public function index(): Response
    {
        $vinyls = $this->entityManager->getRepository(Vinyl::class)->findAll();
        return $this->render('vinyl/index.html.twig', [
            'vinyls' => $vinyls
        ]);
    }


}
