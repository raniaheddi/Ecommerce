<?php

/* EcommerceBundle:Administration:Produits/layout/index.html.twig */
class __TwigTemplate_9511f6ff5bab79ff8f37a870e9a095c56400e2703b06de9143e600615089e2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/index.html.twig", 1);
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
        $__internal_06f03dc8d131d2dfdd97931ce2eff99e8bfeb8b477ae73dab355bbc7f9ca1114 = $this->env->getExtension("native_profiler");
        $__internal_06f03dc8d131d2dfdd97931ce2eff99e8bfeb8b477ae73dab355bbc7f9ca1114->enter($__internal_06f03dc8d131d2dfdd97931ce2eff99e8bfeb8b477ae73dab355bbc7f9ca1114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f03dc8d131d2dfdd97931ce2eff99e8bfeb8b477ae73dab355bbc7f9ca1114->leave($__internal_06f03dc8d131d2dfdd97931ce2eff99e8bfeb8b477ae73dab355bbc7f9ca1114_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0aa602542a8e9f08e4849ac01323946536c94e6a4926f5941155cea0d8827d = $this->env->getExtension("native_profiler");
        $__internal_fb0aa602542a8e9f08e4849ac01323946536c94e6a4926f5941155cea0d8827d->enter($__internal_fb0aa602542a8e9f08e4849ac01323946536c94e6a4926f5941155cea0d8827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste Des Produits</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Quantite</th>
                <th>Promotion</th>
                <th>Marque</th>
                <th>Actions</th>
                <th>Catalogue</th>         
            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponible", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "promotion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marque", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_catalogue", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">  
                    </td>
                    <td>
                        ";
            // line 34
            if (($this->getAttribute($context["entity"], "catalogue", array()) == true)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_catalogue", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check\"></i></a> 
                        ";
            } else {
                // line 36
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_catalogue", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"icon-check-empty\"></i> </a>
                            ";
            }
            // line 39
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <dl>
        <dt>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("adminProduits_new");
        echo "\" class=\"btn\">
                Nouveau produit
            </a>
        </dt>
    </dl>
";
        
        $__internal_fb0aa602542a8e9f08e4849ac01323946536c94e6a4926f5941155cea0d8827d->leave($__internal_fb0aa602542a8e9f08e4849ac01323946536c94e6a4926f5941155cea0d8827d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  127 => 42,  119 => 39,  112 => 36,  104 => 34,  98 => 31,  94 => 30,  90 => 29,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste Des Produits</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Disponible</th>*/
/*                 <th>Quantite</th>*/
/*                 <th>Promotion</th>*/
/*                 <th>Marque</th>*/
/*                 <th>Actions</th>*/
/*                 <th>Catalogue</th>         */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                     <td>{{ entity.prix }}</td>*/
/*                     <td>{{ entity.disponible }}</td>*/
/*                     <td>{{ entity.quantite }}</td>*/
/*                     <td>{{ entity.promotion }}</td>*/
/*                     <td>{{ entity.marque }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('adminProduits_show', { 'id': entity.id }) }}"><i class="icon-book"></i></a>*/
/*                         <a href="{{ path('adminProduits_edit', { 'id': entity.id }) }}"><i class="icon-edit"></i></a>*/
/*                         <a href="{{ path('adminProduits_catalogue', { 'id': entity.id }) }}">  */
/*                     </td>*/
/*                     <td>*/
/*                         {% if entity.catalogue==true %}<a href="{{ path('adminProduits_catalogue', { 'id': entity.id }) }}">*/
/*                                 <i class="icon-check"></i></a> */
/*                         {% else %}<a href="{{ path('adminProduits_catalogue', { 'id': entity.id }) }}">*/
/*                                 <i class="icon-check-empty"></i> </a>*/
/*                             {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <dl>*/
/*         <dt>*/
/*             <a href="{{ path('adminProduits_new') }}" class="btn">*/
/*                 Nouveau produit*/
/*             </a>*/
/*         </dt>*/
/*     </dl>*/
/* {% endblock %}*/
/* */
