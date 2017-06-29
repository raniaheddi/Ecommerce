<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_044c6ac5e1a1a26573f646888c1af0b55eec247333530b67ac868f7c9c20ebbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11222f9feff5f1c4077a34292b04c9c4cd412d493ad8339c8242025244534333 = $this->env->getExtension("native_profiler");
        $__internal_11222f9feff5f1c4077a34292b04c9c4cd412d493ad8339c8242025244534333->enter($__internal_11222f9feff5f1c4077a34292b04c9c4cd412d493ad8339c8242025244534333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11222f9feff5f1c4077a34292b04c9c4cd412d493ad8339c8242025244534333->leave($__internal_11222f9feff5f1c4077a34292b04c9c4cd412d493ad8339c8242025244534333_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72e63aa2de85025de448555f8e3845d7fd397a58daf6cddbb2e675ce43d221fb = $this->env->getExtension("native_profiler");
        $__internal_72e63aa2de85025de448555f8e3845d7fd397a58daf6cddbb2e675ce43d221fb->enter($__internal_72e63aa2de85025de448555f8e3845d7fd397a58daf6cddbb2e675ce43d221fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72e63aa2de85025de448555f8e3845d7fd397a58daf6cddbb2e675ce43d221fb->leave($__internal_72e63aa2de85025de448555f8e3845d7fd397a58daf6cddbb2e675ce43d221fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_017b4fcaaf0afef46708a893742fee53a423be9f22f8d751b292a791b4cf0d6a = $this->env->getExtension("native_profiler");
        $__internal_017b4fcaaf0afef46708a893742fee53a423be9f22f8d751b292a791b4cf0d6a->enter($__internal_017b4fcaaf0afef46708a893742fee53a423be9f22f8d751b292a791b4cf0d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_017b4fcaaf0afef46708a893742fee53a423be9f22f8d751b292a791b4cf0d6a->leave($__internal_017b4fcaaf0afef46708a893742fee53a423be9f22f8d751b292a791b4cf0d6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1208287b7a3589931e0f9f7c7186f056d8abafae1203585f6c9afac60c136047 = $this->env->getExtension("native_profiler");
        $__internal_1208287b7a3589931e0f9f7c7186f056d8abafae1203585f6c9afac60c136047->enter($__internal_1208287b7a3589931e0f9f7c7186f056d8abafae1203585f6c9afac60c136047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1208287b7a3589931e0f9f7c7186f056d8abafae1203585f6c9afac60c136047->leave($__internal_1208287b7a3589931e0f9f7c7186f056d8abafae1203585f6c9afac60c136047_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
