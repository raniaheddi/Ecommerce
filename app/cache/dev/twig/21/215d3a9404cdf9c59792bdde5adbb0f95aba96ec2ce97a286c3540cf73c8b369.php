<?php

/* ::layout/base.html.twig */
class __TwigTemplate_032cfd92aa41cf3812f6c72a61aefd8bfabd6ab72ebe58c41e1af37b9d59dbc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'buy' => array($this, 'block_buy'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96246e07a60c8920f9a682955104b6355be73fc011d65e65c082f7955d402f13 = $this->env->getExtension("native_profiler");
        $__internal_96246e07a60c8920f9a682955104b6355be73fc011d65e65c082f7955d402f13->enter($__internal_96246e07a60c8920f9a682955104b6355be73fc011d65e65c082f7955d402f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme files -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <!-- Custom Theme files -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <!-- for bootstrap working -->
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/bootstrap-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/simpleCart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- cart -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

    </head>
    <body>
        <!-- header-section-starts -->
        <div class=\"header\">
            <div class=\"header-top-strip\">
                <div class=\"container\">
                    <div class=\"header-top-left\">
                        <ul>
                            ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
                                <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>\t
                                ";
        } else {
            // line 38
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-user\"> </span>Se connecter</a></li>
                                <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-lock\"> </span>S'inscrire</a></li>
                                ";
        }
        // line 41
        echo "                        </ul>
                    </div>
                    <div class=\"header-right\">
                        <div class=\"cart box_1\">
                            <!--<a href=\"checkout.html\">-->
                            <h3> <!--<span class=\"simpleCart_total\"> </span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"> --> </span><!--)--><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/images/bag.png"), "html", null, true);
        echo "\" alt=\"\"></h3> 
                            <!--</a>\t-->
                            <p><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\" class=\"simpleCart_empty\">Panier</a></p> 
                            <p><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"simpleCart_empty\">Compte</a></p>

                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
        <!-- header-section-ends -->
        <div class=\"banner-top\">
            <div class=\"container\">
                <nav class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <div class=\"logo\">
                            <h1><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span>E</span> -Shop</a></h1>
                        </div>
                        <div>
                            ";
        // line 73
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 74
        echo "                        </div>
                    </div>
                    <!--/.navbar-header-->

                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Accueil</a></li>
                                ";
        // line 81
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:topMenu"), array());
        echo "  
                            <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
        echo "\">CONTACT</a></li>
                            <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("sujet_show-All");
        echo "\">FORUM</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
        </div>
        ";
        // line 91
        $this->displayBlock('buy', $context, $blocks);
        echo " 
        ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        echo " 

        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"footer_top\">
                    <div class=\"span_of_4\">
                        <div class=\"col-md-3 span1_of_4\">
                            <h4>Catégories</h4>
                            <ul class=\"f_nav\">
                                ";
        // line 101
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        echo "  
                            </ul>\t
                        </div>
                        <div class=\"col-md-3 span1_of_4\">
                            <h4>Informations</h4>
                            <ul class=\"f_nav\">
                                ";
        // line 107
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 108
        echo "                            </ul>\t
                        </div>
                        <div class=\"col-md-3 span1_of_4\">
                            <h4>Compte</h4>
                            <ul class=\"f_nav\">
                                <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">se connecter</a></li>
                                <li><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">s'inscrire</a></li>
                                <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("sujet_show-All");
        echo "\">créer votre sujet</a></li>
                                <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">mon panier</a></li>
                            </ul>\t\t\t\t
                        </div>
                        <!-- <div class=\"col-md-3 span1_of_4\">
                             <h4>Notre entrepôt</h4>
                             <ul class=\"f_nav\"><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</ul>
                             <h4>Nous contacter</h4>
                             <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                             <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                         </div> -->

                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"cards text-center\">
                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/images/cards.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
                <div class=\"copyright text-center\">
                    <p>&copy; Copyright 2016 - Progress Engineering</p>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_96246e07a60c8920f9a682955104b6355be73fc011d65e65c082f7955d402f13->leave($__internal_96246e07a60c8920f9a682955104b6355be73fc011d65e65c082f7955d402f13_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_bdee077df4c7ffec8f2d41975fcbfd031b127f3f6a979b3274f969323cd0e2bf = $this->env->getExtension("native_profiler");
        $__internal_bdee077df4c7ffec8f2d41975fcbfd031b127f3f6a979b3274f969323cd0e2bf->enter($__internal_bdee077df4c7ffec8f2d41975fcbfd031b127f3f6a979b3274f969323cd0e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "E-Commerce";
        
        $__internal_bdee077df4c7ffec8f2d41975fcbfd031b127f3f6a979b3274f969323cd0e2bf->leave($__internal_bdee077df4c7ffec8f2d41975fcbfd031b127f3f6a979b3274f969323cd0e2bf_prof);

    }

    // line 91
    public function block_buy($context, array $blocks = array())
    {
        $__internal_10d83acbc705594b9ef40cb4f3cf856988b1255ed976d45824cd7f42431c0c46 = $this->env->getExtension("native_profiler");
        $__internal_10d83acbc705594b9ef40cb4f3cf856988b1255ed976d45824cd7f42431c0c46->enter($__internal_10d83acbc705594b9ef40cb4f3cf856988b1255ed976d45824cd7f42431c0c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buy"));

        echo "  ";
        
        $__internal_10d83acbc705594b9ef40cb4f3cf856988b1255ed976d45824cd7f42431c0c46->leave($__internal_10d83acbc705594b9ef40cb4f3cf856988b1255ed976d45824cd7f42431c0c46_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4164d72ded5211a057b46900e8e692a0deb8255c230b0f426c698ed824b1d1 = $this->env->getExtension("native_profiler");
        $__internal_9e4164d72ded5211a057b46900e8e692a0deb8255c230b0f426c698ed824b1d1->enter($__internal_9e4164d72ded5211a057b46900e8e692a0deb8255c230b0f426c698ed824b1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_9e4164d72ded5211a057b46900e8e692a0deb8255c230b0f426c698ed824b1d1->leave($__internal_9e4164d72ded5211a057b46900e8e692a0deb8255c230b0f426c698ed824b1d1_prof);

    }

    public function getTemplateName()
    {
        return "::layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 92,  281 => 91,  269 => 6,  253 => 131,  243 => 124,  239 => 123,  234 => 121,  226 => 116,  222 => 115,  218 => 114,  214 => 113,  207 => 108,  205 => 107,  196 => 101,  184 => 92,  180 => 91,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  149 => 74,  147 => 73,  141 => 70,  117 => 49,  113 => 48,  108 => 46,  101 => 41,  96 => 39,  91 => 38,  86 => 36,  82 => 35,  69 => 25,  64 => 23,  58 => 20,  46 => 11,  41 => 9,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}E-Commerce{% endblock %}</title>*/
/*         <link href="{{ asset('bundles/EcommerceBundle/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />*/
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="{{ asset('bundles/EcommerceBundle/js/jquery.min.js') }}"></script>*/
/*         <!-- Custom Theme files -->*/
/*         <link href="{{ asset('bundles/EcommerceBundle/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*         <!-- Custom Theme files -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, */
/*               Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/*         <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*         <!--webfont-->*/
/*         <!-- for bootstrap working -->*/
/*         <script type="text/javascript" src="{{ asset('bundles/EcommerceBundle/js/bootstrap-3.1.1.min.js') }}"></script>*/
/*         <!-- //for bootstrap working -->*/
/*         <!-- cart -->*/
/*         <script src="{{ asset('bundles/EcommerceBundle/js/simpleCart.min.js')}}"></script>*/
/*         <!-- cart -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/EcommerceBundle/css/flexslider.css') }}" type="text/css" media="screen" />*/
/* */
/*     </head>*/
/*     <body>*/
/*         <!-- header-section-starts -->*/
/*         <div class="header">*/
/*             <div class="header-top-strip">*/
/*                 <div class="container">*/
/*                     <div class="header-top-left">*/
/*                         <ul>*/
/*                             {% if is_granted('IS_AUTHENTICATED_FULLY')%} */
/*                                 <li><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></li>	*/
/*                                 {% else%}*/
/*                                 <li><a href="{{ path('fos_user_security_login')}}"><span class="glyphicon glyphicon-user"> </span>Se connecter</a></li>*/
/*                                 <li><a href="{{ path('fos_user_registration_register') }}"><span class="glyphicon glyphicon-lock"> </span>S'inscrire</a></li>*/
/*                                 {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="header-right">*/
/*                         <div class="cart box_1">*/
/*                             <!--<a href="checkout.html">-->*/
/*                             <h3> <!--<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> --> </span><!--)--><img src="{{ asset('bundles/EcommerceBundle/images/bag.png') }}" alt=""></h3> */
/*                             <!--</a>	-->*/
/*                             <p><a href="{{ path('panier') }}" class="simpleCart_empty">Panier</a></p> */
/*                             <p><a href="{{ path('fos_user_profile_show') }}" class="simpleCart_empty">Compte</a></p>*/
/* */
/*                             <div class="clearfix"> </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- header-section-ends -->*/
/*         <div class="banner-top">*/
/*             <div class="container">*/
/*                 <nav class="navbar navbar-default" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <div class="logo">*/
/*                             <h1><a href="{{ path('index') }}"><span>E</span> -Shop</a></h1>*/
/*                         </div>*/
/*                         <div>*/
/*                             {% render(controller('EcommerceBundle:Produits:recherche')) %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--/.navbar-header-->*/
/* */
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li><a href="{{ path('index') }}">Accueil</a></li>*/
/*                                 {% render(controller('EcommerceBundle:Categories:topMenu')) %}  */
/*                             <li><a href="{{ path('my_app_mail_form') }}">CONTACT</a></li>*/
/*                             <li><a href="{{ path('sujet_show-All')}}">FORUM</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!--/.navbar-collapse-->*/
/*                 </nav>*/
/*                 <!--/.navbar-->*/
/*             </div>*/
/*         </div>*/
/*         {% block buy %}  {% endblock %} */
/*         {% block body %}  {% endblock %} */
/* */
/*         <div class="footer">*/
/*             <div class="container">*/
/*                 <div class="footer_top">*/
/*                     <div class="span_of_4">*/
/*                         <div class="col-md-3 span1_of_4">*/
/*                             <h4>Catégories</h4>*/
/*                             <ul class="f_nav">*/
/*                                 {% render(controller('EcommerceBundle:Categories:menu')) %}  */
/*                             </ul>	*/
/*                         </div>*/
/*                         <div class="col-md-3 span1_of_4">*/
/*                             <h4>Informations</h4>*/
/*                             <ul class="f_nav">*/
/*                                 {% render(controller('PagesBundle:Pages:menu')) %}*/
/*                             </ul>	*/
/*                         </div>*/
/*                         <div class="col-md-3 span1_of_4">*/
/*                             <h4>Compte</h4>*/
/*                             <ul class="f_nav">*/
/*                                 <li><a href="{{ path('fos_user_security_login')}}">se connecter</a></li>*/
/*                                 <li><a href="{{ path('fos_user_registration_register') }}">s'inscrire</a></li>*/
/*                                 <li><a href="{{ path('sujet_show-All')}}">créer votre sujet</a></li>*/
/*                                 <li><a href="{{ path('panier') }}">mon panier</a></li>*/
/*                             </ul>				*/
/*                         </div>*/
/*                         <!-- <div class="col-md-3 span1_of_4">*/
/*                              <h4>Notre entrepôt</h4>*/
/*                              <ul class="f_nav"><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</ul>*/
/*                              <h4>Nous contacter</h4>*/
/*                              <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                              <p><i class="icon-print"></i>&nbsp;Fax: {{ fax }}</p>*/
/*                          </div> -->*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cards text-center">*/
/*                     <img src="{{ asset('bundles/EcommerceBundle/images/cards.jpg') }}" alt="" />*/
/*                 </div>*/
/*                 <div class="copyright text-center">*/
/*                     <p>&copy; Copyright 2016 - Progress Engineering</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
