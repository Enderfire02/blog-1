<?php

namespace App\Controller;

use App\DataFixtures\Contact;
use App\Entity\Article;
use App\Form\AddArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjouterArticleController extends AbstractController
{
    /**
     * @Route("/ajouter/article", name="ajouter_article")
     */
    public function index(Request $request, string $city = ""): Response
    {
        $name = $request->query->get('name');

        $article = new Article;
        $form = $this->createForm(AddArticleType::class, $article);
        $form->handleRequest($request);

        dump($form->getViewData());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();
        }
            dump("ok en base 😂");

            return $this->renderForm('ajouter_article/index.html.twig', [
                'controller_name' => "controlleur d'articles",
                'put' => $form
            ]);
    }
}
