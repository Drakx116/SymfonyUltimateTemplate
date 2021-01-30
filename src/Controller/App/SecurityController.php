<?php

namespace App\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 * @package App\Controller\App
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $utils
     * @return Response
     */
    public function login(AuthenticationUtils $utils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('app_dashboard');
         }

        return $this->render('app/security/login.twig', [
            'last_username' => $utils->getLastUsername(),
            'error' => $utils->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
    }
}
