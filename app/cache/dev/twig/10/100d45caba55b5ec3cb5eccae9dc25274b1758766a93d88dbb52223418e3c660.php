<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4af6c0c5bad74ff7c01ddc0fbf02c4882ba8af02635508a08c76ae0297027a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415cf08df0f94f3a72d8ff91cc3c1ead7eaaa2fd8bb69b78234cc286aa2c64c5 = $this->env->getExtension("native_profiler");
        $__internal_415cf08df0f94f3a72d8ff91cc3c1ead7eaaa2fd8bb69b78234cc286aa2c64c5->enter($__internal_415cf08df0f94f3a72d8ff91cc3c1ead7eaaa2fd8bb69b78234cc286aa2c64c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_415cf08df0f94f3a72d8ff91cc3c1ead7eaaa2fd8bb69b78234cc286aa2c64c5->leave($__internal_415cf08df0f94f3a72d8ff91cc3c1ead7eaaa2fd8bb69b78234cc286aa2c64c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e68ed296be099986db6d6d01aa81d065e6f1585d532fa646192cf06b03acc50f = $this->env->getExtension("native_profiler");
        $__internal_e68ed296be099986db6d6d01aa81d065e6f1585d532fa646192cf06b03acc50f->enter($__internal_e68ed296be099986db6d6d01aa81d065e6f1585d532fa646192cf06b03acc50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e68ed296be099986db6d6d01aa81d065e6f1585d532fa646192cf06b03acc50f->leave($__internal_e68ed296be099986db6d6d01aa81d065e6f1585d532fa646192cf06b03acc50f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b072593082288d53dcaafe550795fc57df38f3c1c036fdaf313e659d1376873 = $this->env->getExtension("native_profiler");
        $__internal_0b072593082288d53dcaafe550795fc57df38f3c1c036fdaf313e659d1376873->enter($__internal_0b072593082288d53dcaafe550795fc57df38f3c1c036fdaf313e659d1376873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b072593082288d53dcaafe550795fc57df38f3c1c036fdaf313e659d1376873->leave($__internal_0b072593082288d53dcaafe550795fc57df38f3c1c036fdaf313e659d1376873_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75681e5c83d32cc5672b5a3cc23bd2afe1dc27428ed983cf253419e92f536a15 = $this->env->getExtension("native_profiler");
        $__internal_75681e5c83d32cc5672b5a3cc23bd2afe1dc27428ed983cf253419e92f536a15->enter($__internal_75681e5c83d32cc5672b5a3cc23bd2afe1dc27428ed983cf253419e92f536a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_75681e5c83d32cc5672b5a3cc23bd2afe1dc27428ed983cf253419e92f536a15->leave($__internal_75681e5c83d32cc5672b5a3cc23bd2afe1dc27428ed983cf253419e92f536a15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
