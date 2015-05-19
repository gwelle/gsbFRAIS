<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComptableController
 *
 * @author eleve
 */

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;

class FraisComptableController extends Controller {
    
    public function suivrePaiementFicheForfaitAction() {
        
        return $this->render('AheGsbBundle:Comptable:suivrePaiementFicheForfait.html.twig');
    }
    
     public function validerFicheForfaitAction(){
        return $this->render('AheGsbBundle:Comptable:validerFicheFrais.html.twig');
        
    }
    
    public function accueilComptableAction(){
        return $this->render('AheGsbBundle:Comptable:accueilComptable.html.twig');
        
        
    }
}
