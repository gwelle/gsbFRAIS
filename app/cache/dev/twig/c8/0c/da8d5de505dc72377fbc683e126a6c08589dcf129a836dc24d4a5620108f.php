<?php

/* AheGsbBundle:Visiteurs:accueilVisiteur.html.twig */
class __TwigTemplate_c80cda8d5de505dc72377fbc683e126a6c08589dcf129a836dc24d4a5620108f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
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
    public function block_messages($context, array $blocks = array())
    {
        // line 3
        echo "<div>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        
</div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<br>
<div class=\"col-md-3\">
    <fieldset class=\"accueil\">
        <table>
            <tr>
                <td>
                    <h2> Bienvenue ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " 
                       ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
                    </h2> 
                </td>
                <td>
                    <h2> Gestion des Fiches de Frais </h2>
                </td>
                <td>
                    <h3>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_deconnexion");
        echo "\" 
                        accesskey=\"\"title=\"Déconnexion\">
                        Se déconnecter
                    </a> 
                    </h3>
                </td>
            </tr>
        </table>
        
            
    </fieldset>
        
    <div class=\"menu\">
        <ul class=\"nav\">
            <li> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("gsb_consultation_frais");
        echo "\"
                    title=\"Consultation\"><h4>Consulter mes fiches de frais</h4>
                 </a>
            </li>
              
            <li> <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("gsb_saisie_frais");
        echo "\" 
                    title=\"Saisie\"><h4>Saisir mes fiches de frais</h4>
                 </a> 
            </li>
        </ul>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:accueilVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  97 => 41,  80 => 27,  69 => 19,  65 => 18,  57 => 12,  54 => 11,  48 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
