<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DashboardController
 * @package App\Controller\Admin
 * @Route("/admin")
 */
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("", name="admin_dashboard")
     */
    public function index(): Response
    {
        return parent::index();
    }
}