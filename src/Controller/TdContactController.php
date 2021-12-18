<?php

namespace App\Controller;

use App\Form\AddTdContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TdContactRepository;
use App\Entity\TdContact;
use Symfony\Component\HttpFoundation\Request;

class TdContactController extends AbstractController
{

    private $tdContact;


    public function __construct(TdContactRepository $tdContact){
        $this->tdContact = $tdContact;
    }


    /**
     * @Route("/td/contact", name="td_contact")
     */




    public function index(Request $request): Response
    {
        $tdcontact = new tdContact();
        $form = $this->createForm(AddTdContactType::class, $tdcontact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();

            return $this->redirectToRoute('td_contact');
        }


        return $this->renderForm('td_contact/index.html.twig', [
            'controller_name' => 'TdContactController',
            'form' => $form,
            'tdContact' => $this ->tdContact->findAll()
        ]);
    }
    /**
     * @Route("/td/contact/{id}", name="td_contact_User")
     */
    public function utilisateur(Request $request, string $id =" "): Response
    {
        $idUser = $request->get('id');
        return $this->render('td_contact/utilisateur.html.twig', [
            'controller_name' => 'Informations du contact : ',
            'detailUtilisateur' => $this->tdContact->find($idUser)
    ]);

    }
}

