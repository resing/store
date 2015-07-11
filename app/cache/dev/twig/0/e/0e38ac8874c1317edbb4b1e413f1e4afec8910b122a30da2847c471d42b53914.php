<?php

/* ::layout.html.twig */
class __TwigTemplate_0e38ac8874c1317edbb4b1e413f1e4afec8910b122a30da2847c471d42b53914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'JavaModla' => array($this, 'block_JavaModla'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "616b138_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_616b138_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/compiled/main_part_1_bootstrap_1.css");
            // line 15
            echo " <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "616b138_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_616b138_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/compiled/main_part_1_etalage_2.css");
            echo " <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "616b138_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_616b138_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/compiled/main_part_1_megamenu_3.css");
            echo " <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "616b138_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_616b138_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/compiled/main_part_1_style_4.css");
            echo " <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "616b138"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_616b138") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/compiled/main.css");
            echo " <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d84feea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_jquery-1.11.1.min_1.js");
            // line 18
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "d84feea_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "d84feea_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_jquery.etalage.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "d84feea_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_jquery.jscrollpane.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "d84feea_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_megamenu_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "d84feea_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core_part_1_menu_jquery_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "d84feea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d84feea") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/js/core.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 20
        echo "<script>\$(document).ready(function(){
    
    \$(\".megamenu\").megamenu();
    
    
});
</script>
";
        // line 27
        $this->displayBlock('JavaModla', $context, $blocks);
        // line 30
        echo "
</head>

<!-- header -->
<div class=\"header_bg\">
<div class=\"container\">
        <div class=\"header\">
        <div class=\"head-t\">
                <div class=\"logo\">
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("site_front_office_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sitefrontoffice/images/logo.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/> </a>
                </div>
                <!-- start header_right -->
                <div class=\"header_right\">
                        <div class=\"rgt-bottom\">
                                <div class=\"log\">
                                        <div class=\"reg\" >
                                             ";
        // line 46
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                                               ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteFrontOfficeBundle:Default:login"));
            echo "
                                                ";
        } else {
            // line 49
            echo "                                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                                                ";
        }
        // line 51
        echo "                                        </div>
                                </div>
                                <div class=\"reg\">
                                     ";
        // line 54
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">REGISTER</a>
                ";
        } else {
            // line 55
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>";
        }
        // line 57
        echo "                                </div>
                                    
";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteFrontOfficeBundle:Default:caddie"));
        echo "
                                <div class=\"create_btn\">
                                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("site_front_office_panier");
        echo "\">CHECKOUT</a>
                        </div>
                        <div class=\"clearfix\"> </div>
                </div>
                <div class=\"search\">
                    <form>
                        <input type=\"text\" value=\"\" placeholder=\"search...\">
                                <input type=\"submit\" value=\"\" id=\"recherche\" >
                        </form>
                </div>
                <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
        </div>
                <!-- start header menu -->
                <ul class=\"megamenu skyblue\">
                ";
        // line 77
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteFrontOfficeBundle:Default:Menu"));
        echo "
                 </ul> 
        </div>
</div>
</div>
";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "<div class=\"foot-top\">
\t<div class=\"container\">
\t\t<div class=\"col-md-6 s-c\">
\t\t\t<li>
\t\t\t\t<div class=\"fooll\">
\t\t\t\t\t<h5>follow us on</h5>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"social-ic\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"facebok\"> </i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"twiter\"> </i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"goog\"> </i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"be\"> </i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"pp\"> </i></a></li>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-md-6 s-c\">
\t\t\t<div class=\"stay\">
\t\t\t\t\t\t<div class=\"stay-left\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter your email to join our newsletter\" required=\"\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-1\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"join\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

<div class=\"footer\">
        <div class=\"container\">
                <div class=\"col-md-3 cust\">
                        <h4>CUSTOMER CARE</h4>
                                <li><a href=\"#\">Help Center</a></li>
                                <li><a href=\"#\">FAQ</a></li>
                                <li><a href=\"buy.html\">How To Buy</a></li>
                                <li><a href=\"#\">Delivery</a></li>
                </div>
                <div class=\"col-md-2 abt\">
                        <h4>ABOUT US</h4>
                                <li><a href=\"#\">Our Stories</a></li>
                                <li><a href=\"#\">Press</a></li>
                                <li><a href=\"#\">Career</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                </div>
                <div class=\"col-md-2 myac\">
                        <h4>MY ACCOUNT</h4>
                                <li><a href=\"register.html\">Register</a></li>
                                <li><a href=\"#\">My Cart</a></li>
                                <li><a href=\"#\">Order History</a></li>
                                <li><a href=\"buy.html\">Payment</a></li>
                </div>
                <div class=\"col-md-5 our-st\">
                        <div class=\"our-left\">
                                <h4>OUR STORES</h4>
                        </div>
                        <div class=\"our-left1\">
                                <div class=\"cr_btn\">
                                        <a href=\"#\">SOLO</a>
                                </div>
                        </div>
                        <div class=\"our-left1\">
                                <div class=\"cr_btn1\">
                                        <a href=\"#\">BOGOR</a>
                                </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                                <li><i class=\"add\"> </i>Jl. Haji Muhidin, Blok G no.69</li>
                                <li><i class=\"phone\"> </i>025-2839341</li>
                                <li><a href=\"mailto:info@example.com\"><i class=\"mail\"> </i>info@sitename.com </a></li>

                </div>
                <div class=\"clearfix\"> </div>
                        <p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
        </div>
</div>
</body>
</html>";
    }

    // line 27
    public function block_JavaModla($context, array $blocks = array())
    {
        // line 28
        echo "        
 ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 83,  326 => 82,  321 => 28,  318 => 27,  225 => 84,  223 => 82,  215 => 77,  196 => 61,  191 => 59,  187 => 57,  183 => 56,  178 => 55,  171 => 54,  166 => 51,  160 => 49,  154 => 47,  152 => 46,  140 => 39,  129 => 30,  127 => 27,  118 => 20,  74 => 18,  70 => 17,  38 => 15,  34 => 12,  21 => 1,);
    }
}
