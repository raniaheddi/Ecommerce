<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1b428529ab241f2c713a70f30c6525287ddf07aede7fa47e5e92792088d378b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1167ed198cc1822cbb4a90d0ff043d463f71689c513dd561a0fd2075c4889bca = $this->env->getExtension("native_profiler");
        $__internal_1167ed198cc1822cbb4a90d0ff043d463f71689c513dd561a0fd2075c4889bca->enter($__internal_1167ed198cc1822cbb4a90d0ff043d463f71689c513dd561a0fd2075c4889bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1167ed198cc1822cbb4a90d0ff043d463f71689c513dd561a0fd2075c4889bca->leave($__internal_1167ed198cc1822cbb4a90d0ff043d463f71689c513dd561a0fd2075c4889bca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd24b8c4e30101842b018630e50aa6c6833c5d5619ae4d78913292f63ad8145f = $this->env->getExtension("native_profiler");
        $__internal_bd24b8c4e30101842b018630e50aa6c6833c5d5619ae4d78913292f63ad8145f->enter($__internal_bd24b8c4e30101842b018630e50aa6c6833c5d5619ae4d78913292f63ad8145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bd24b8c4e30101842b018630e50aa6c6833c5d5619ae4d78913292f63ad8145f->leave($__internal_bd24b8c4e30101842b018630e50aa6c6833c5d5619ae4d78913292f63ad8145f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
