<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtudiantRepository;
use App\Entity\Etudiant;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;

class ScolariteController extends AbstractController
{
    /**
     * @Route("/scolarite", name="scolarite")
     */
    public function index()
    {
        return $this->render('scolarite/index.html.twig', [
            'controller_name' => 'ScolariteController',
        ]);
    }

   
    /**
     * @Route("/ajouter", name="ajouter")
     * @Route("/ajouter/{id}/edit", name="ajoutedit")
     */
    public function ajouter(Etudiant $etudiant= null, Request $request, EntityManagerInterface $manager)
    {
        if(!$etudiant){
    	$etudiant= new Etudiant();
        }

    	$form= $this->createFormBuilder($etudiant)
    	            ->add('nom')
    	            ->add('prenom')
    	            ->add('matricule')
    	            ->add('age')
    	            ->add('telephone')
    	            ->add('filiere')
    	            ->add('niveau')
    	            ->add('somme')
    	            ->add('motif')
    	            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()) {
        
        if(!$etudiant->getId()){
         $etudiant->setCreatedAt(new \DateTime());
     }
          $manager->persist($etudiant);
          $manager->flush();

         return $this->redirectToRoute("lire");
        }

    	return $this->render('scolarite/ajouter.html.twig', [
    		'formEtudiant'=> $form->createView(),
            'editmode'=> $etudiant->getId() !==null
    	]);
    }

     /**
     * @Route("/lire", name="lire")
     */
    public function lire( Request $request)
    {
       // dd($request ->attributes->all());
       $repo= $this->getDoctrine()->getRepository( Etudiant::class);

       $etudiants= $repo->findAll();
    	return $this->render('scolarite/lire.html.twig', [ 
             'etudiants' => $etudiants   
    ]);
    }

    /**
     * @Route("/lire/{id}", name="liretudiant")
     */
    /*public function liretudiant($id)
    {
        $repo= $this->getDoctrine()->getRepository( Etudiant::class);

        $etude= $repo->find($id);
       
        return $this->render('scolarite/liretudiant.html.twig',[
       'etude' => $etude
        ]);
    }*/
     

    /**
     * @Route("/modifier", name="modifier")
     */
    public function modifier()
    {
      $repo= $this->getDoctrine()->getRepository( Etudiant::class);

       $etudiants= $repo->findAll();

    	return $this->render('scolarite/modifier.html.twig',  [ 
             'etudiants' => $etudiants   
    ]);
    }
    
    /**
     * @Route("/supprimer", name="supprimer")
     */
    public function supprimer()
    {
        $repo= $this->getDoctrine()->getRepository( Etudiant::class);

        $etudiants= $repo->findAll(); 

       return $this->render('scolarite/supprimer.html.twig', [ 
             'etudiants' => $etudiants  ]);
               }



    /**
     * @Route("/supprimer/{id}", name="supprimer_vrai")
     * @ParamConverter("etudiants", class="App\Entity\Etudiant")
     */
    public function supprimer_vrai($id, $etudiants, EntityManagerInterface $manager): Response
    {
        
          $manager->remove($etudiants);
          $manager->flush();

        return $this->redirectToRoute("lire"); 
        

        //return new Response('L\'étudiant a été supprimé');
        //return $this->render('scolarite/supprimer.html.twig', compact('etudiants'));
            
    }



}