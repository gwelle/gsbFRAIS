<?php

/* AheGsbBundle::layout.html.twig */
class __TwigTemplate_ea72fa0660fc792994a3acfaec12ae2605f90228888cf523867bc6afe72c25f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Laboratoire Galaxy-Swiss-Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    
    <!--link href=\"";
        // line 7
        echo "\" 
          rel=\"stylesheet\" type=\"text/css\" /-->
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5f9861e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f9861e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5f9861e_styles_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "5f9861e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f9861e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5f9861e.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "  </head>
        
        

  <body>
      
    <div id=\"entete\">
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ahegsb/images/logo.png"), "html", null, true);
        echo "\" 
             id=\"logoGSB\" 
             alt=\"Laboratoire Galaxy-Swiss Bourdin\" 
             title=\"Laboratoire Galaxy-Swiss Bourdin\"
        />
        <h1><br/>Laboratoire Galaxy Swiss-Bourdin</h1>
    </div>

     ";
        // line 27
        $this->displayBlock('messages', $context, $blocks);
        // line 29
        echo "     ";
        $this->displayBlock('menu', $context, $blocks);
        // line 31
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        
   
  </body>
</html>";
    }

    // line 27
    public function block_messages($context, array $blocks = array())
    {
        // line 28
        echo "     ";
    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        // line 30
        echo "     ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 34
        echo "     ";
    }

    // line 32
    public function block_bloc1($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  112 => 32,  108 => 34,  102 => 31,  98 => 30,  95 => 29,  91 => 28,  88 => 27,  81 => 35,  78 => 31,  75 => 29,  73 => 27,  62 => 19,  53 => 12,  31 => 7,  23 => 1,  105 => 32,  97 => 41,  80 => 27,  69 => 19,  65 => 18,  57 => 12,  54 => 11,  48 => 7,  39 => 10,  35 => 9,  32 => 3,  29 => 2,);
    }
}
