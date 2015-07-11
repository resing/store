<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9a40b2ba34fb1360fffa31c899f23539621dfb930237f4f2c8438a8c3cae5c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SiteFrontOfficeBundle::layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
<div class=\"main\">
    <div class=\"registration\">
<div class=\"registration_left\">
     <h2>new user? <span> create an account </span></h2>
                 <div class=\"registration_form\">
                 <!-- Form -->
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_registercustomer");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                                <div>
                                        <label>
                                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("placeholder" => "first name:")));
        echo "
                                        </label>
                                </div>
                                <div>
                                        <label>
                                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
                                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("placeholder" => "last name:")));
        echo "
                                        </label>
                                </div>
                                <div class=\"sky-form\">
\t\t\t\t\t<div class=\"sky_form1\">
\t\t\t\t\t\t<ul>

                                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sex", array()), 'errors');
        echo "
                                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sex", array()), 'widget');
        echo "
                                </ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                <div>
                                        <label>
                                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "email:")));
        echo "
                                        </label>
                                </div>
                                 <div>
                                        <label>
                                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "username:")));
        echo "
                                        </label>
                                </div>
                                <div>
                                        <label>
                                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("placeholder" => "password:")));
        echo "
                                        </label>
                                </div>
                                <div>
                                        <label>
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("placeholder" => "re password:")));
        echo "
                                        </label>
                                </div>
                                <div>
                                        <input type=\"submit\" value=\"create an account\" id=\"register-submit\">
                                </div>
                                <div class=\"sky-form\">
                                        <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" ><i></i>i agree to shoppe.com &nbsp;<a class=\"terms\" href=\"#\"> terms of service</a> </label>
                                </div>
                        </form>
                </div>
     </div>
     ";
        // line 67
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_logincustomer"), array());
        echo " 
    
 <div class=\"clearfix\"></div>
 </div>
        </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  131 => 55,  127 => 54,  119 => 49,  115 => 48,  107 => 43,  103 => 42,  95 => 37,  91 => 36,  82 => 30,  78 => 29,  68 => 22,  64 => 21,  56 => 16,  52 => 15,  46 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }
}
