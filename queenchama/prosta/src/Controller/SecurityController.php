<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends AbstractController
{


   /**
    * @Route("/inscription", name="security_inscription")
    */


    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
      $user= new User();
      $form= $this->createForm(RegistrationType::class, $user);

      
          $form->handleRequest($request);

          if($form->isSubmitted() AND $form->isValid()){
            $hash= $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_login');
          }
          return $this->render('security/registration.html.twig', [
         'form'=> $form->createView()


      ]);

    }


    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

              //return $this->render('scolarite/index.html.twig');

        
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {


    //les lignes 78-92 correspondent au bouton de connexion/deconnexion et a la barre de reherche qui doivent etre dans le fichier base.html.twig

      /*{% if not app.user %}
              <li class="nav-item">
             <a href="{{path('app_login')}}" class="nav-link">Connexion</a>
              </li>
        {% else %}
              <li class="nav-item">
              <a href="{{path('app_logout')}}" class="nav-link">Déconnexion</a>
              </li>
      {% endif %}*/

      /*<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Rechercher un étudiant">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
    </form>*/


        

        //throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
      //return $this->render('scolarite/index.html.twig');
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('security/accueil.html.twig');
    }
}
