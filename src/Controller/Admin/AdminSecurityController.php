<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class AdminSecurityController
 * @package App\Controller
 * @Route("/admin")
 */
class AdminSecurityController extends AbstractController
{
    /**
     * @Route("/login", name="admin_login")
     * @param AuthenticationUtils $utils
     * @return Response
     */
    public function login(AuthenticationUtils $utils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('admin_dashboard');
         }

        return $this->render('admin/security/login.twig', [
            'last_username' => $utils->getLastUsername(),
            'error' => $utils->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/logout", name="admin_logout")
     */
    public function logout(): void
    {
    }
}
