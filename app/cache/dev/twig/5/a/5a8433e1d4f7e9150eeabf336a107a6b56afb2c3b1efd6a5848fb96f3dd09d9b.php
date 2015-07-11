<?php

/* SiteFrontOfficeBundle:Default:menu.html.twig */
class __TwigTemplate_5a8433e1d4f7e9150eeabf336a107a6b56afb2c3b1efd6a5848fb96f3dd09d9b extends Twig_Template
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
        echo "    <li class=\"active grid\"><a class=\"color1\" href=\"index.html\">Home</a></li>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 4
            echo "    <li  ><a class=\"color";
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_front_office_product", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a> </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SiteFrontOfficeBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,);
    }
}
