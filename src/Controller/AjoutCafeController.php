<?php

namespace App\Controller;

use App\Form\AjoutCafeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutCafeController extends AbstractController
{
    #[Route('/ajoutcafe', name: 'app_ajout_cafe')]
    public function ajoutcafe(Request $request, EntityManagerInterface $em): Response
    {
        $ajoutcafe = new AjoutCafe();
        $form = $this->createForm(AjoutCafeType::class, $ajoutcafe);
        if ($request->isMethod('POST')) {$form->handleRequest($request);
            $em->persist($contact);
            $em->flush();
            if ($form->isSubmitted() && $form->isValid()) {
                $this->addFlash('notice', 'Message envoyé');
                return $this->redirectToRoute('app_contact');}
        }
        return $this->render('base/ajoutcafe.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
