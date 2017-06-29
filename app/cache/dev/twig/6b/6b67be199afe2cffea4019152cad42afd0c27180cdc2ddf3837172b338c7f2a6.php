<?php

/* PagesBundle:Administration:pages/layout/index.html.twig */
class __TwigTemplate_b9ea716f4c5cea22dd0cf014047b2307f1b6f817f9c73a67573211a65336da8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesBundle:Administration:pages/layout/index.html.twig", 1);
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
        $__internal_66823dfdf37ee528018f55d233d24f49593d78000db48132e581c5ee41e2e1ca = $this->env->getExtension("native_profiler");
        $__internal_66823dfdf37ee528018f55d233d24f49593d78000db48132e581c5ee41e2e1ca->enter($__internal_66823dfdf37ee528018f55d233d24f49593d78000db48132e581c5ee41e2e1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Administration:pages/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66823dfdf37ee528018f55d233d24f49593d78000db48132e581c5ee41e2e1ca->leave($__internal_66823dfdf37ee528018f55d233d24f49593d78000db48132e581c5ee41e2e1ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9543307431e4ff087bf81a1756f4ff6ba4af2eafc35d206da8f9b4f7eb5d9b10 = $this->env->getExtension("native_profiler");
        $__internal_9543307431e4ff087bf81a1756f4ff6ba4af2eafc35d206da8f9b4f7eb5d9b10->enter($__internal_9543307431e4ff087bf81a1756f4ff6ba4af2eafc35d206da8f9b4f7eb5d9b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Liste Des Pages</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

    <dl>
        <dt>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("adminPages_new");
        echo "\" class=\"btn\">
                Nouvelle page
            </a>
        </dt>
    </dl>
";
        
        $__internal_9543307431e4ff087bf81a1756f4ff6ba4af2eafc35d206da8f9b4f7eb5d9b10->leave($__internal_9543307431e4ff087bf81a1756f4ff6ba4af2eafc35d206da8f9b4f7eb5d9b10_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Administration:pages/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  79 => 24,  68 => 19,  64 => 18,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Liste Des Pages</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{ entity.titre }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('adminPages_show', { 'id': entity.id }) }}"><i class="icon-book"></i></a>*/
/*                         <a href="{{ path('adminPages_edit', { 'id': entity.id }) }}"><i class="icon-edit"></i></a>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <dl>*/
/*         <dt>*/
/*             <a href="{{ path('adminPages_new') }}" class="btn">*/
/*                 Nouvelle page*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
