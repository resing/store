<?php

/* SiteFrontOfficeBundle:Default:login.html.twig */
class __TwigTemplate_05bbcad8487e929dadedd6052820676c14c0061ccc7778c4c3f11683331abae4 extends Twig_Template
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
        echo "<div id=\"loginContainer\"><a href=\"#\" id=\"loginButton\"><span>Login</span></a>
                                                    <div id=\"loginBox\">                
                                                        <form id=\"loginForm\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                                                <fieldset id=\"body\">
                                                                        <fieldset>
                                                                          <label for=\"email\">Email Address</label>
                                                                          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                                                          <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
                                                                    </fieldset>
                                                                    <fieldset>
                                                                            <label for=\"password\">Password</label>
                                                                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                                                                     </fieldset>
                                                                    <input type=\"submit\" id=\"login\"name=\"_submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sign in"), "html", null, true);
        echo "\" />
                                                                        <label for=\"checkbox\"><input type=\"checkbox\" id=\"checkbox\"> <i>Remember me</i></label>
                                                                </fieldset>
                                                            <span><a href=\"#\">Forgot your password?</a></span>
                                                                </form>
                                                        </div>
                                                </div>";
    }

    public function getTemplateName()
    {
        return "SiteFrontOfficeBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  30 => 8,  23 => 4,  19 => 2,);
    }
}
