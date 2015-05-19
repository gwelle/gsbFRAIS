<?php

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;

class FraisVisiteursController extends Controller
{   
    public function consulterFraisForfaitAction()
    {
        $session = $this->getRequest()->getSession() ;
        $idVisiteur = $session->get('id') ;
        // Récupérer l'entité avec Doctrine - 
        // $repository contiendra tous les enregistrements de la table FicheFrais
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('AheGsbBundle:FicheFrais') ;
             
        // Fonction définie dans VisiteurRepository.php
        $listeMois = $repository->getLesMoisDisponibles($idVisiteur) ;
        if ($listeMois === null) { // Il n'y a aucun enregistrement 
            $this->get('session')->getFlashBag()
                    ->add('Warning','Aucune fiche de frais à consulter') ;
            return render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
        }
        else {  // Il y a au moins une fiche de frais
            if ($this->getRequest()->getMethod() == 'POST') {
                // Traitement du formulaire 
                $pdo = PdoGsb::getPdoGsb();
                $request = $this->get('request');
                $session = $request->getSession() ;
                $idVisiteur = $session->get('id') ;
                $leMois = $request->get('lastMois') ;
                $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur,$leMois) ;
                $numAnnee = substr($leMois,0,4);
                $numMois = substr($leMois,4,2);
                $session->set('leMois',$numMois) ;
                return $this->render('AheGsbBundle:Visiteurs:consultationFraisForfait.html.twig',
                    array('leMois'=>$leMois, 'lesFraisForfait'=>$lesFraisForfait,
                          'numAnnee'=>$numAnnee,'numMois'=>$numMois 
                          ));
            }
            return $this->render('AheGsbBundle:Visiteurs:selectFraisMois.html.twig',
                    array('listeMois'=>$listeMois)) ;
        }
            
    } 
    
    public function saisirFraisForfaitAction() 
    {
        $session= $this->get('request')->getSession();
        $idVisiteur =  $session->get('id');
        $mois = getMois(date("d/m/Y"));
        $numAnnee =substr( $mois,0,4);
        $numMois =substr( $mois,4,2);
        $pdo = PdoGsb::getPdoGsb();
        if($pdo->estPremierFraisMois($idVisiteur,$mois)){
            $pdo->creerNouvellesLignesFrais($idVisiteur,$mois);
        }
        $request = $this->get('request');
        $lesErreursForfait = array();
        if($this->get('request')->getMethod() == 'POST'){
            $lesFrais = $request->request->get('lesFrais');
            if(lesQteFraisValides($lesFrais)){
                $pdo->majFraisForfait($idVisiteur,$mois,$lesFrais);
            }
            else{
                $lesErreursForfait[]="Les valeurs des frais doivent être 
                    numériques";
            }
            return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
         }
         $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur,$mois);
         
        return $this->render('AheGsbBundle:Visiteurs:saisieFraisForfait.html.twig',
                array('lesFraisForfait'=>$lesFraisForfait,
                    'nom'=>$session->get('nom'),'prenom'=>$session->get('prenom'),
                    'numMois'=>$numMois,
                    'numAnnee'=>$numAnnee,'lesErreursForfait'=> $lesErreursForfait));
     }

     public function accueilVisiteursAction() {
         return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
     }
     
}

?>