<?php

/* AheGsbBundle:Visiteurs:selectFraisMois.html.twig */
class __TwigTemplate_e35a3ac31177f4d0c559038a29c85ebc129e4a2d29773052a7c7d3e84bb4f5b4 extends Twig_Template
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
        echo "<br>
<div class=\"col-md-3\">
    <fieldset class=\"accueil\">
        <table>
            <tr>
                <td>
                    <h2> Bienvenue ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " 
                       ";
        // line 11
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
        // line 19
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
﻿    <div class=\"col-md-offset-9\">
      <form method=\"post\">
         
\t<div class=\"listeMois\"> 
                <label  for=\"lstMois\" accesskey=\"n\">Sélectionner la période : </label>
               <select name=\"lastMois\">
                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMois"]) ? $context["listeMois"] : $this->getContext($context, "listeMois")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "                        ";
            $context["mois"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "mois");
            // line 38
            echo "                        ";
            $context["numAnnee"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "numAnnee");
            // line 39
            echo "                        ";
            $context["numMois"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "numMois");
            // line 40
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </select>
        

        <div class=\"buttonsListeMois\">
                <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
                <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
        </div>
        </div>
      </form>
   ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:selectFraisMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  94 => 40,  91 => 39,  88 => 38,  85 => 37,  81 => 36,  61 => 19,  50 => 11,  46 => 10,  38 => 4,  32 => 3,  29 => 2,);
    }
}
