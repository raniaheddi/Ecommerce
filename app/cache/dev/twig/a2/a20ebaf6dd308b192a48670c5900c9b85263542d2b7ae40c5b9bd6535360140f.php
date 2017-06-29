<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4d5385a26d878290aa6e6fdddafea3f81729655b8721af132ca16703cab2da2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f0e8841627f5d8f5b3d50f0c884bffdae18c05f7c93c95952cabc8231d56ddb5 = $this->env->getExtension("native_profiler");
        $__internal_f0e8841627f5d8f5b3d50f0c884bffdae18c05f7c93c95952cabc8231d56ddb5->enter($__internal_f0e8841627f5d8f5b3d50f0c884bffdae18c05f7c93c95952cabc8231d56ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e8841627f5d8f5b3d50f0c884bffdae18c05f7c93c95952cabc8231d56ddb5->leave($__internal_f0e8841627f5d8f5b3d50f0c884bffdae18c05f7c93c95952cabc8231d56ddb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b992f86e8ecb378fb70884861647553ce03fea5f8f0c56af3f93105990f0161 = $this->env->getExtension("native_profiler");
        $__internal_7b992f86e8ecb378fb70884861647553ce03fea5f8f0c56af3f93105990f0161->enter($__internal_7b992f86e8ecb378fb70884861647553ce03fea5f8f0c56af3f93105990f0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_7b992f86e8ecb378fb70884861647553ce03fea5f8f0c56af3f93105990f0161->leave($__internal_7b992f86e8ecb378fb70884861647553ce03fea5f8f0c56af3f93105990f0161_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
