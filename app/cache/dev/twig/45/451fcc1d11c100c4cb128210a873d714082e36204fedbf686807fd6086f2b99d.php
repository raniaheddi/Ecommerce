<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_964aa0733f9d19fd97437db38454b39dbc15fff01c41837c5bb5aee59b8cfb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28966c4f5ce65c78da62de74ed1e6f0c2a27091226907face128bf68b39d5d69 = $this->env->getExtension("native_profiler");
        $__internal_28966c4f5ce65c78da62de74ed1e6f0c2a27091226907face128bf68b39d5d69->enter($__internal_28966c4f5ce65c78da62de74ed1e6f0c2a27091226907face128bf68b39d5d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28966c4f5ce65c78da62de74ed1e6f0c2a27091226907face128bf68b39d5d69->leave($__internal_28966c4f5ce65c78da62de74ed1e6f0c2a27091226907face128bf68b39d5d69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e244a77b741e2ff2d06602d020adede0400e125a9c2dffe5d7df04c113592e7 = $this->env->getExtension("native_profiler");
        $__internal_1e244a77b741e2ff2d06602d020adede0400e125a9c2dffe5d7df04c113592e7->enter($__internal_1e244a77b741e2ff2d06602d020adede0400e125a9c2dffe5d7df04c113592e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1e244a77b741e2ff2d06602d020adede0400e125a9c2dffe5d7df04c113592e7->leave($__internal_1e244a77b741e2ff2d06602d020adede0400e125a9c2dffe5d7df04c113592e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
