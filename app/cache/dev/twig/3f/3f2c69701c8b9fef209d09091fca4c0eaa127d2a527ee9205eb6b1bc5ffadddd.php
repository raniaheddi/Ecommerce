<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_ed0679bdde23de404ad81b7999a48ee12fa8d517d45bc58f1edeb8703722af8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa99f6c4ba36f64e4e1f41d583f31e12758b451290d5a3a9a70a7a0be41afe0 = $this->env->getExtension("native_profiler");
        $__internal_cfa99f6c4ba36f64e4e1f41d583f31e12758b451290d5a3a9a70a7a0be41afe0->enter($__internal_cfa99f6c4ba36f64e4e1f41d583f31e12758b451290d5a3a9a70a7a0be41afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Administration</a>
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 31
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 31)->display($context);
        // line 32
        echo "                <div class=\"span9\">
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2016 - Progress Engineering</p>
                </div>
            </div>
\t</footer>\t
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>";
        
        $__internal_cfa99f6c4ba36f64e4e1f41d583f31e12758b451290d5a3a9a70a7a0be41afe0->leave($__internal_cfa99f6c4ba36f64e4e1f41d583f31e12758b451290d5a3a9a70a7a0be41afe0_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5cd696a46bdee47821fedb24bf4c9c370ca33b34f28590cd792a57f5e13b357c = $this->env->getExtension("native_profiler");
        $__internal_5cd696a46bdee47821fedb24bf4c9c370ca33b34f28590cd792a57f5e13b357c->enter($__internal_5cd696a46bdee47821fedb24bf4c9c370ca33b34f28590cd792a57f5e13b357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "E-Commerce";
        
        $__internal_5cd696a46bdee47821fedb24bf4c9c370ca33b34f28590cd792a57f5e13b357c->leave($__internal_5cd696a46bdee47821fedb24bf4c9c370ca33b34f28590cd792a57f5e13b357c_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_4a063cd24b60c90384484cb715226584cb3fe0aaabe9a483c22b899560687a75 = $this->env->getExtension("native_profiler");
        $__internal_4a063cd24b60c90384484cb715226584cb3fe0aaabe9a483c22b899560687a75->enter($__internal_4a063cd24b60c90384484cb715226584cb3fe0aaabe9a483c22b899560687a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_4a063cd24b60c90384484cb715226584cb3fe0aaabe9a483c22b899560687a75->leave($__internal_4a063cd24b60c90384484cb715226584cb3fe0aaabe9a483c22b899560687a75_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_8a8804915c5d0068b1657ea236a9a4bc0cc96d34a51ddf216a6d863d79cb3973 = $this->env->getExtension("native_profiler");
        $__internal_8a8804915c5d0068b1657ea236a9a4bc0cc96d34a51ddf216a6d863d79cb3973->enter($__internal_8a8804915c5d0068b1657ea236a9a4bc0cc96d34a51ddf216a6d863d79cb3973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_8a8804915c5d0068b1657ea236a9a4bc0cc96d34a51ddf216a6d863d79cb3973->leave($__internal_8a8804915c5d0068b1657ea236a9a4bc0cc96d34a51ddf216a6d863d79cb3973_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_672adff568a5f6f67e924d31ae8b23b13e0c0da64084d980d38b04e51d9d1c40 = $this->env->getExtension("native_profiler");
        $__internal_672adff568a5f6f67e924d31ae8b23b13e0c0da64084d980d38b04e51d9d1c40->enter($__internal_672adff568a5f6f67e924d31ae8b23b13e0c0da64084d980d38b04e51d9d1c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_672adff568a5f6f67e924d31ae8b23b13e0c0da64084d980d38b04e51d9d1c40->leave($__internal_672adff568a5f6f67e924d31ae8b23b13e0c0da64084d980d38b04e51d9d1c40_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1835a2c841517ca0df816b892c2586fc6c1630948321c408ee4e52edbe3e90b5 = $this->env->getExtension("native_profiler");
        $__internal_1835a2c841517ca0df816b892c2586fc6c1630948321c408ee4e52edbe3e90b5->enter($__internal_1835a2c841517ca0df816b892c2586fc6c1630948321c408ee4e52edbe3e90b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1835a2c841517ca0df816b892c2586fc6c1630948321c408ee4e52edbe3e90b5->leave($__internal_1835a2c841517ca0df816b892c2586fc6c1630948321c408ee4e52edbe3e90b5_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e717723577e0f15d9f676a7172eb89d13771226a22ed4a4b66e43d8d02839e98 = $this->env->getExtension("native_profiler");
        $__internal_e717723577e0f15d9f676a7172eb89d13771226a22ed4a4b66e43d8d02839e98->enter($__internal_e717723577e0f15d9f676a7172eb89d13771226a22ed4a4b66e43d8d02839e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e717723577e0f15d9f676a7172eb89d13771226a22ed4a4b66e43d8d02839e98->leave($__internal_e717723577e0f15d9f676a7172eb89d13771226a22ed4a4b66e43d8d02839e98_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  178 => 33,  167 => 12,  156 => 7,  145 => 6,  133 => 5,  125 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}E-Commerce{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="{{ path('admin') }}">Administration</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% include '::modulesUsed/navigationAdmin.html.twig' %}*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/* 	<footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*             <div class="row">*/
/*                 <div class="span4">*/
/*                     <p>&copy; Copyright 2016 - Progress Engineering</p>*/
/*                 </div>*/
/*             </div>*/
/* 	</footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/pages/ckeditor/ckeditor.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
