<?php

/* AheGsbBundle:Visiteurs:erreurs.html.twig */
class __TwigTemplate_288cfed1f3e5d07ad5e167bfc0bdba470aeb420a7ec0c846d239338afc82d626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class='erreur'>
<ul>
 ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesErreurs"]) ? $context["lesErreurs"] : $this->getContext($context, "lesErreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "\t
      <li>";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "</li>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul></div>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  93 => 25,  84 => 22,  79 => 20,  73 => 17,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  56 => 11,  49 => 7,  43 => 6,  40 => 5,  38 => 4,  32 => 3,  29 => 2,);
    }
}
