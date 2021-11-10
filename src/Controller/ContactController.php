<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ça fonctionne'
        ]);

    }

    /**
     * @Route("/contact/{city}", name="contact_city")
     */
    public function name(Request $request,string $city = ''): Response
    {
        $name = $request->query->get('name');
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'bienvenue',
            'name' => $name,
            'city' => $city

        ]);
    }

}
