<?php

/* SiteFrontOfficeBundle:Default:panier.html.twig */
class __TwigTemplate_a4480158338b085668a92f5ff649a232701d440a2d078a65c53a0bf6ba9e8233 extends Twig_Template
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
        // line 2
        echo "<div class=\"cart box_1\" id =\"raf\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("site_front_office_panier");
        echo "\">
            ";
        // line 4
        if (((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")) == true)) {
            // line 5
            echo "            <h3> <span class=\"simpleCart_total\">\$";
            echo twig_escape_filter($this->env, (isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")), "html", null, true);
            echo "</span> 
                (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\">";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
            echo "</span> items)
            ";
        } else {
            // line 8
            echo "                <span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\">(empty card)</span>
            ";
        }
        // line 10
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitefrontoffice/images/bag.png"), "html", null, true);
        echo "\" alt=\"\"></h3>
    </a>\t
    
    <div class=\"clearfix\"> </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SiteFrontOfficeBundle:Default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 8,  33 => 6,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
