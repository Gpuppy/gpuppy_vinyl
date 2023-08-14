<?php

namespace App\Controller\Admin;

use App\Entity\Artist;
use App\Entity\User;
use App\Entity\Vinyl;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin_index')]
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gpuppy-Vinyl');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fa-sharp fa-solid fa-person', User::class);
        yield MenuItem::linkToCrud('Artist', 'fa-solid fa-music', Artist::class);
        yield MenuItem::linkToCrud('Vinyl', 'fa-solid fa-record-vinyl', Vinyl::class);
    }
}
