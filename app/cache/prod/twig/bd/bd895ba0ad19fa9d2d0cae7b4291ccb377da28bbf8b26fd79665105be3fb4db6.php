<?php

/* EcommerceBundle:Default\Favoris:show.html.twig */
class __TwigTemplate_801cc941432f8685d3ff6dd4aac00e816ee4f86ecf70dbd2cb874e67e3fbada0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    </br>
    </br>
    ";
        // line 7
        if (twig_test_empty((isset($context["produits"]) ? $context["produits"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("favoris_remove", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "favoris", array()), "id", array()), "produit" => $this->getAttribute(                // line 58
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
        return array (  137 => 66,  129 => 61,  120 => 58,  119 => 57,  115 => 56,  111 => 55,  107 => 54,  103 => 53,  95 => 50,  87 => 47,  58 => 21,  54 => 19,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
