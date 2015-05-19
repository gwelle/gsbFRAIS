<?php

/* AheGsbBundle:Visiteurs:saisieFraisHorsForfait.html.twig */
class __TwigTemplate_4ce7fd105a87a546077cfdc24b328e31857cfb96a138ea41b57fd18efb1204e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 5
        echo "  
    <h2> Fiche de frais du mois ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
        echo "</h2>
      <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("gsb_saisie_frais_hors_forfait");
        echo "\" method=\"POST\">
          
         
          <fieldset>
            <legend>Frais hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa): </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé</label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"10\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input class =\"btn-success\" type=\"submit\" value=\"Valider\" 
                           name=\"valider\">&nbsp;&nbsp;<input class =\"btn-success\" type=\"submit\" value=\"Annuler\" 
                           name=\"annuler\">
      </p> 
      </div>
        
      </form>
      </form>
    
      <a href=\"/\">  </a>
</div>
          
          ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:saisieFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  41 => 6,  38 => 5,  32 => 3,  29 => 2,);
    }
}
