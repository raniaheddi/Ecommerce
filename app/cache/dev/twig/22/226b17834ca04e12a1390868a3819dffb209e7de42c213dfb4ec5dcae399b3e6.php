<?php

/* PagesBundle:Administration:pages/layout/new.html.twig */
class __TwigTemplate_a18aa645d8c5c17da479c3b0e6e1e2d89a502a066ff0ce41fddae47ed9c9e8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesBundle:Administration:pages/layout/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de6cba03e40e84255afd47b167b864e0ac9a7fae26ac0c87016c5c1b85a99cec = $this->env->getExtension("native_profiler");
        $__internal_de6cba03e40e84255afd47b167b864e0ac9a7fae26ac0c87016c5c1b85a99cec->enter($__internal_de6cba03e40e84255afd47b167b864e0ac9a7fae26ac0c87016c5c1b85a99cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Administration:pages/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6cba03e40e84255afd47b167b864e0ac9a7fae26ac0c87016c5c1b85a99cec->leave($__internal_de6cba03e40e84255afd47b167b864e0ac9a7fae26ac0c87016c5c1b85a99cec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9920fcc3a2032113b1fe494f256812468a4846cf648616aa3511a1194207c675 = $this->env->getExtension("native_profiler");
        $__internal_9920fcc3a2032113b1fe494f256812468a4846cf648616aa3511a1194207c675->enter($__internal_9920fcc3a2032113b1fe494f256812468a4846cf648616aa3511a1194207c675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Ajouter Page</h2>
<div class=\"span9\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
<div class=\"span12\">
    <dl class=\"record_actions\">
        <dt>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\" class=\"btn\">
                Retour
            </a>
        </dt>
    </dl>
</div>
";
        
        $__internal_9920fcc3a2032113b1fe494f256812468a4846cf648616aa3511a1194207c675->leave($__internal_9920fcc3a2032113b1fe494f256812468a4846cf648616aa3511a1194207c675_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Administration:pages/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <h2>Ajouter Page</h2>*/
/* <div class="span9">*/
/*     {{ form(form) }}*/
/* </div>*/
/* <div class="span12">*/
/*     <dl class="record_actions">*/
/*         <dt>*/
/*             <a href="{{ path('adminPages') }}" class="btn">*/
/*                 Retour*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* </div>*/
/* {% endblock %}*/
/* */
