<?php

/* AheGsbBundle:Visiteurs:saisieFraisForfait.html.twig */
class __TwigTemplate_1b45727df48c90496e9d92de260f0f770d350077f54d4ca0e3a209aba8246fea extends Twig_Template
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
        // line 4
        $this->env->loadTemplate("AheGsbBundle:Visiteurs:erreurs.html.twig")->display(array_merge($context, array("lesErreurs" => (isset($context["lesErreursForfait"]) ? $context["lesErreursForfait"] : $this->getContext($context, "lesErreursForfait")))));
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
        echo $this->env->getExtension('routing')->getPath("gsb_saisie_frais");
        echo "\" method=\"POST\">
          <div class=\"corpsForm\">    
            <fieldset>
                <legend>Frais au Forfait : </legend>
                     ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFraisForfait"]) ? $context["lesFraisForfait"] : $this->getContext($context, "lesFraisForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 12
            echo "                         ";
            $context["idFrais"] = $this->getAttribute((isset($context["unFrais"]) ? $context["unFrais"] : $this->getContext($context, "unFrais")), "idFrais");
            // line 13
            echo "                         ";
            $context["libelle"] = $this->getAttribute((isset($context["unFrais"]) ? $context["unFrais"] : $this->getContext($context, "unFrais")), "libelle");
            // line 14
            echo "                         ";
            $context["quantite"] = $this->getAttribute((isset($context["unFrais"]) ? $context["unFrais"] : $this->getContext($context, "unFrais")), "quantite");
            // line 15
            echo "                        <p>
                            <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"idFrais\"> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo " 
                            </label>
                            <input type=\"text\" id=\"idFrais\" 
                                   name=\"lesFrais[";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["idFrais"]) ? $context["idFrais"] : $this->getContext($context, "idFrais")), "html", null, true);
            echo "]\" 
                                   size=\"10\" maxlength=\"5\" 
                                   value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" >
                        </p>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "              </fieldset>
              <input class =\"btn-success\" type=\"submit\" value=\"Valider\" 
                           name=\"valider\">
        </div>    
      </form>
    
      <a href=\"/\">  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:saisieFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  84 => 22,  79 => 20,  73 => 17,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  56 => 11,  49 => 7,  43 => 6,  40 => 5,  38 => 4,  32 => 3,  29 => 2,);
    }
}
