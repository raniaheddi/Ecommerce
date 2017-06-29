<?php

/* EcommerceBundle:Default\Favoris:show.html.twig */
class __TwigTemplate_ac5e0fa913447af0018c2ef4e5b0c2bd9a89ed67ccf2fde3b712097a92cee945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default\\Favoris:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b181c21f8814352d8866dcee7a4879bab87d3791d8844558d3ca849ff7c99918 = $this->env->getExtension("native_profiler");
        $__internal_b181c21f8814352d8866dcee7a4879bab87d3791d8844558d3ca849ff7c99918->enter($__internal_b181c21f8814352d8866dcee7a4879bab87d3791d8844558d3ca849ff7c99918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default\\Favoris:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b181c21f8814352d8866dcee7a4879bab87d3791d8844558d3ca849ff7c99918->leave($__internal_b181c21f8814352d8866dcee7a4879bab87d3791d8844558d3ca849ff7c99918_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4726f920f0a0cfae3e9e2a80582b56d1ee9c28940b7d921e2cef6716e6b1ba3e = $this->env->getExtension("native_profiler");
        $__internal_4726f920f0a0cfae3e9e2a80582b56d1ee9c28940b7d921e2cef6716e6b1ba3e->enter($__internal_4726f920f0a0cfae3e9e2a80582b56d1ee9c28940b7d921e2cef6716e6b1ba3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    </br>
    </br>
    ";
        // line 7
        if (twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            // line 8
            echo "    </div>
    <div class=\"register_account\">
        <div class=\"wrap\">
            <h4 class=\"title\">Votre liste d'envie est vide</h4>
            <p class=\"cart\">Vous n'avez aucun produit dans votre liste.<br>Cliquer<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("produits");
            echo "\"> ici</a> 
                pour continuer le shopping</p>
        </div>
    </div>


";
        } else {
            // line 19
            echo "    <ul class=\"record_actions \">
        <li>
            <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("produits");
            echo "\"class=\"btn btn-success \">
                Continuer vos achats
            </a>    
        </li>
    </ul>




    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">

            <h3 class=\"panel-title\">Vos Favoris</h3>
        </div>
        <!-- Table -->
        <table class=\"table table-striped panel panel-info\">
            <thead>
            <th class=\"info\"></th>
            <th class=\"info\">Nom</th>
            <th class=\"info\">Prix</th>
            <th class=\"info\">Déscription</th>
            <th class=\"info\">Détail</th>
            <th class=\"info\">Retirer</th>
            </thead>

            <tbody> 
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "            
                    <tr>
                        <td>
                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["i"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "image", array()), "name", array()), "html", null, true);
                echo "\" width=\"150\" height=\"100\">
                        </td>

                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
                echo " DT</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["i"], "description", array()), 0, 50), "html", null, true);
                echo "</td>
                        <td>  <a href=";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo ">Détail</a></td>
                        <td><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("favoris_remove", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "favoris", array()), "id", array()), "produit" => $this->getAttribute(                // line 58
$context["i"], "id", array()))), "html", null, true);
                echo "\">retirer</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
            </tbody>
        </table>
    </div>

";
        }
        // line 66
        echo "      

";
        
        $__internal_4726f920f0a0cfae3e9e2a80582b56d1ee9c28940b7d921e2cef6716e6b1ba3e->leave($__internal_4726f920f0a0cfae3e9e2a80582b56d1ee9c28940b7d921e2cef6716e6b1ba3e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default\\Favoris:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 66,  138 => 61,  129 => 58,  128 => 57,  124 => 56,  120 => 55,  116 => 54,  112 => 53,  104 => 50,  96 => 47,  67 => 21,  63 => 19,  53 => 12,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     </br>*/
/*     </br>*/
/*     {% if produits is empty  %}*/
/*     </div>*/
/*     <div class="register_account">*/
/*         <div class="wrap">*/
/*             <h4 class="title">Votre liste d'envie est vide</h4>*/
/*             <p class="cart">Vous n'avez aucun produit dans votre liste.<br>Cliquer<a href="{{ path('produits') }}"> ici</a> */
/*                 pour continuer le shopping</p>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% else %}*/
/*     <ul class="record_actions ">*/
/*         <li>*/
/*             <a href="{{ path('produits') }}"class="btn btn-success ">*/
/*                 Continuer vos achats*/
/*             </a>    */
/*         </li>*/
/*     </ul>*/
/* */
/* */
/* */
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">*/
/* */
/*             <h3 class="panel-title">Vos Favoris</h3>*/
/*         </div>*/
/*         <!-- Table -->*/
/*         <table class="table table-striped panel panel-info">*/
/*             <thead>*/
/*             <th class="info"></th>*/
/*             <th class="info">Nom</th>*/
/*             <th class="info">Prix</th>*/
/*             <th class="info">Déscription</th>*/
/*             <th class="info">Détail</th>*/
/*             <th class="info">Retirer</th>*/
/*             </thead>*/
/* */
/*             <tbody> */
/*                 {% for i in produits %}            */
/*                     <tr>*/
/*                         <td>*/
/*                             <img src="{{ i.image.AssetPath|imagine_filter('produit') }}" alt="{{ i.image.name }}" width="150" height="100">*/
/*                         </td>*/
/* */
/*                         <td>{{ i.nom}}</td>*/
/*                         <td>{{ i.prix}} DT</td>*/
/*                         <td>{{ i.description|slice(0,50)}}</td>*/
/*                         <td>  <a href={{ path('presentation', { 'id': i.id }) }}>Détail</a></td>*/
/*                         <td><a href="{{ path('favoris_remove', { 'id': entity.favoris.id ,*/
/*                                    'produit': i.id }  ) }}">retirer</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endif %}      */
/* */
/* {% endblock %}*/
