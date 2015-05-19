<?php

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{   // ok
    public function indexAction() {
        $form = $this->createFormBuilder()
                     ->add('login','text')
                     ->add('mdp', 'password')
                     ->add('profil','choice',
                            array('choices'=>array('Comptable'/*,'Délégué','Responsable'*/,'Visiteur')),
                            array('preferred_choices'=>array('Visiteur')))
                     
                     ->getForm() ;
        // Dans la liste, on affiche Visiteurs en premier
        $form->get('profil')->setData(1) ;
        
        $request = Request::createFromGlobals();
        
        if ($request->getMethod() == 'POST' && $form->handleRequest($request)->isValid()) 
        {
                $session = $this->getRequest()->getSession() ;
                $login = $form['login']->getData() ;
                $mdp = $form['mdp']->getData() ;
                $profil = $form['profil']->getData() ;
                switch($profil) {
                    case 0 :
                        $profil = "comptable" ;
                         // Récupérer l'entité avec Doctrine - 
                        $repository = $this->getDoctrine()->getManager()
                                      ->getRepository('AheGsbBundle:Comptable') ;
                        
                         // Fonction définie dans ComptableRepository.php
                        $comptable = $repository
                                    ->findByLoginAndMdp($login,$mdp) ;
                        if ($comptable === NULL) {
                            $message = $this->get('session')->getFlashBag()
                                            ->add('erreurLogMdp',"Votre login 
                                                   et/ou votre mot de passe 
                                                   sont erronés");
     
                            return $this->redirect('index') ;
                        }
                        
                        else {
                            // récupérer les informations sur le comptable connecté
                            $nom = $comptable->getNom();
                            $prenom = $comptable->getPrenom() ;
                            $id = $comptable->getId() ;
                            
                            // sauvegarder les infos du comptable dans une variable 
                            // de session pour usage dans d'autres fonctions
                            
                            $session->set('nom',$nom);
                            $session->set('prenom',$prenom);
                            $session->set('id',$id) ;
                            
                            return $this->render('AheGsbBundle:Comptable:accueilComptable.html.twig',
                                     array('nom'=>$nom,'prenom'=>$prenom));
                        }
                        break ;
//                    case 1 :
//                        $profil = "delegue" ;
//                        break ;
//                    case 2 :
//                        $profil = "responsable" ;
//                        break ;
                    case 1 : 
                        $profil = "visiteur" ;
                        // Récupérer l'entité avec Doctrine - 
                        $repository = $this->getDoctrine()->getManager()
                                      ->getRepository('AheGsbBundle:Visiteur') ;
                        
                        // Fonction définie dans VisiteurRepository.php
                        $visiteur = $repository
                                    ->findByLoginAndMdp($login,$mdp) ;
                        if ($visiteur === NULL) {
                            $message = $this->get('session')->getFlashBag()
                                            ->add('erreurLogMdp',"Votre login 
                                                   et/ou votre mot de passe 
                                                   sont erronés");
     
                            return $this->redirect('index') ;
                        }
                        else {
                            // récupérer les informations sur le visiteur connecté
                            $nom = $visiteur->getNom();
                            $prenom = $visiteur->getPrenom() ;
                            $id = $visiteur->getId() ;
                            
                            // sauvegarder les infos du visiteur dans une variable 
                            // de session pour usage dans d'autres fonctions
                            
                            $session->set('nom',$nom);
                            $session->set('prenom',$prenom);
                            $session->set('id',$id) ;
                            
                            return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig',
                                     array('nom'=>$nom,'prenom'=>$prenom));
                        }
                        break;
                }
         }
                        
        return $this->render('AheGsbBundle:Default:formConnexion.html.twig', 
                array('form'=>$form->createView()));
        
         
    }
    
    public function seDeconnecterAction()
    {
        $session = $this->getRequest()->getSession() ;
        $session->clear();
        return $this->redirect('index') ;
    }
   
}

?>