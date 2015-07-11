<?php

/* SiteUtilisateursBundle:Default:login.html.twig */
class __TwigTemplate_066a997e60ff0d9f6fcc63ec784f61c6193032c832d189a1c43e8dcf09fab653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
        <div class=\"registration_left\">
                <h2>existing user</h2>
                ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "        </div>





";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 9
        echo "                 <div class=\"registration_form\">
                 <!-- Form -->
                        <form id=\"registration_form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                            <div>
                                        <label>
                                                <input placeholder=\"email:\" type=\"email\" tabindex=\"3\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                                        </label>
                                </div>
                                <div>
                                        <label>
                                            <input placeholder=\"password\" type=\"password\" id=\"password\" name=\"_password\" tabindex=\"4\" required=\"required\" />
                                        </label>
                                </div>\t\t\t\t\t\t
                                <div>
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"forget\">
                                        <a href=\"#\">forgot your password</a>
                                </div>
                        </form>
                        <!-- /Form -->
                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "SiteUtilisateursBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  64 => 16,  57 => 12,  53 => 11,  49 => 9,  43 => 7,  40 => 6,  37 => 5,  27 => 34,  25 => 5,  20 => 2,);
    }
}
