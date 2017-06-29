<?php

/* EcommerceBundle:Administration:Produits/layout/index.html.twig */
class __TwigTemplate_8f162551fda84553d0de8e19ea7255862d3e504a78b4264ae708fd625e219e3a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
        return array (  125 => 47,  118 => 42,  110 => 39,  103 => 36,  95 => 34,  89 => 31,  85 => 30,  81 => 29,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
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
