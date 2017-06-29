<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7e1924be5a4b125be0cfa100cf1870b1c8f6d402ff4b7d204ee819b745f7301b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_84eacc0e4f19263b9eb422ed45ac38d283281d126f56bfaf09d3c729787f37b3 = $this->env->getExtension("native_profiler");
        $__internal_84eacc0e4f19263b9eb422ed45ac38d283281d126f56bfaf09d3c729787f37b3->enter($__internal_84eacc0e4f19263b9eb422ed45ac38d283281d126f56bfaf09d3c729787f37b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84eacc0e4f19263b9eb422ed45ac38d283281d126f56bfaf09d3c729787f37b3->leave($__internal_84eacc0e4f19263b9eb422ed45ac38d283281d126f56bfaf09d3c729787f37b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01034828c950237e43123637e1ab215c31237dd7f4bbd0bcc6da088bfd2d5bbe = $this->env->getExtension("native_profiler");
        $__internal_01034828c950237e43123637e1ab215c31237dd7f4bbd0bcc6da088bfd2d5bbe->enter($__internal_01034828c950237e43123637e1ab215c31237dd7f4bbd0bcc6da088bfd2d5bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_01034828c950237e43123637e1ab215c31237dd7f4bbd0bcc6da088bfd2d5bbe->leave($__internal_01034828c950237e43123637e1ab215c31237dd7f4bbd0bcc6da088bfd2d5bbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
