<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_d025ef7ab8845aa46d8d3d2aa65d58af7ce5ad7926c7ea3fa6829868bc7e4525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6d46d15e5acc75db89d2a33c44ae9359ea5e662ad639cab1f9da4b9e72a7f3 = $this->env->getExtension("native_profiler");
        $__internal_7d6d46d15e5acc75db89d2a33c44ae9359ea5e662ad639cab1f9da4b9e72a7f3->enter($__internal_7d6d46d15e5acc75db89d2a33c44ae9359ea5e662ad639cab1f9da4b9e72a7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7d6d46d15e5acc75db89d2a33c44ae9359ea5e662ad639cab1f9da4b9e72a7f3->leave($__internal_7d6d46d15e5acc75db89d2a33c44ae9359ea5e662ad639cab1f9da4b9e72a7f3_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*     <li><a href="{{ path('page', { 'slug' : page.slug }) }}">{{ page.titre }}</a>*/
/* {% endfor %}*/
