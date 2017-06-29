<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_26eca08146cee5e97fae8f19140d7187902364d63edbbf94164221f405b7ebe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_487836ebdd3880ddcea95ab3a0a90d26b12e48e7e648aa3735cfa142b1181663 = $this->env->getExtension("native_profiler");
        $__internal_487836ebdd3880ddcea95ab3a0a90d26b12e48e7e648aa3735cfa142b1181663->enter($__internal_487836ebdd3880ddcea95ab3a0a90d26b12e48e7e648aa3735cfa142b1181663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487836ebdd3880ddcea95ab3a0a90d26b12e48e7e648aa3735cfa142b1181663->leave($__internal_487836ebdd3880ddcea95ab3a0a90d26b12e48e7e648aa3735cfa142b1181663_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c107301ceab36b280efabd3420a34383de3b7ecc97303549f326957363b8b0d = $this->env->getExtension("native_profiler");
        $__internal_5c107301ceab36b280efabd3420a34383de3b7ecc97303549f326957363b8b0d->enter($__internal_5c107301ceab36b280efabd3420a34383de3b7ecc97303549f326957363b8b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"cart-items\">
        <div class=\"container\">
            <div class=\"dreamcrub\">
                <ul class=\"breadcrumbs\">
                    <li class=\"home\">
                        <a href=\"\" title=\"Go to Home Page\">Accueil</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class=\"women\">
                        Votre Panier
                    </li>
                </ul>
                <ul class=\"previous\">
                    <li><a href=\"index.html\">Retour à La Page Précédente</a></li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>

            <div class=\"row\">


                <div class=\"span9\">

                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                    <h2>MON PANIER</h2>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Dispo</th>
                                <th>Prix unitaire</th>
                                <th>Quantité</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 50
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                            </tr>
                        ";
        } else {
            // line 54
            echo "
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 56
                echo "                            <tr>
                            <form action=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" method=\"get\">
                                
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</td>
                            
                                <td><img src=";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/images/en-stock.jpg"), "html", null, true);
                echo " alt=\"\" class=\"v-middle\"></td>
                                <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT</td>
                                <td>
                                    <select name=\"qte\"  onChange=\"this.form.submit()\" width=\"100px\" >
                                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 66
                    echo "                                           <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" ";
                    if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                    </select>&nbsp;
                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/images/delete.gif"), "html", null, true);
                echo " alt=\"\" ></i></a>
                                </td>
                                <td>";
                // line 71
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
                echo " DT</td>
                            </form>
                            </tr>
                            ";
                // line 74
                $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
                // line 75
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            ";
        }
        // line 77
        echo "                        </tbody>
                    </table>
                        
                    ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 81
            echo "                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " DT</dd>

                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 85
                echo "                                <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " DT</dd>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                        </dl>
                        <div class=\"clearfix\"></div>
                        <a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                    ";
        }
        // line 91
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
                </div>
            </div>
        </div>
                <br/><br/><br/>

    ";
        
        $__internal_5c107301ceab36b280efabd3420a34383de3b7ecc97303549f326957363b8b0d->leave($__internal_5c107301ceab36b280efabd3420a34383de3b7ecc97303549f326957363b8b0d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 91,  221 => 89,  217 => 87,  206 => 85,  202 => 84,  197 => 82,  194 => 81,  192 => 80,  187 => 77,  184 => 76,  178 => 75,  176 => 74,  170 => 71,  163 => 69,  160 => 68,  145 => 66,  141 => 65,  135 => 62,  131 => 61,  126 => 59,  121 => 57,  118 => 56,  114 => 55,  111 => 54,  105 => 50,  103 => 49,  88 => 36,  79 => 33,  76 => 32,  72 => 31,  47 => 8,  41 => 7,  34 => 1,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
/* {% set refTva = 0 %}*/
/* */
/* {% block body %}*/
/*     <div class="cart-items">*/
/*         <div class="container">*/
/*             <div class="dreamcrub">*/
/*                 <ul class="breadcrumbs">*/
/*                     <li class="home">*/
/*                         <a href="" title="Go to Home Page">Accueil</a>&nbsp;*/
/*                         <span>&gt;</span>*/
/*                     </li>*/
/*                     <li class="women">*/
/*                         Votre Panier*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="previous">*/
/*                     <li><a href="index.html">Retour à La Page Précédente</a></li>*/
/*                 </ul>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/* */
/*                 <div class="span9">*/
/* */
/*                     {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                         <div class="alert alert-success">*/
/*                             {{ flashMessage }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                     <h2>MON PANIER</h2>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Produit</th>*/
/*                                 <th>Dispo</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Total</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% if produits|length == 0 %}*/
/*                                 <tr>*/
/*                                     <td colspan="4"><center>Aucun articles dans votre panier</center></td>*/
/*                             </tr>*/
/*                         {% else %}*/
/* */
/*                         {% for produit in produits %}*/
/*                             <tr>*/
/*                             <form action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get">*/
/*                                 */
/*                                 <td>{{ produit.nom }}</td>*/
/*                             */
/*                                 <td><img src={{ asset('bundles/EcommerceBundle/images/en-stock.jpg')}} alt="" class="v-middle"></td>*/
/*                                 <td>{{ produit.prix }} DT</td>*/
/*                                 <td>*/
/*                                     <select name="qte"  onChange="this.form.submit()" width="100px" >*/
/*                                         {% for i in 1..10 %}*/
/*                                            <option value="{{ i }}" {% if i == panier[produit.id] %} selected="selected" {% endif %}>{{ i }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>&nbsp;*/
/*                                     <a href="{{ path('supprimer', { 'id' : produit.id }) }}"><img src={{ asset('bundles/EcommerceBundle/images/delete.gif')}} alt="" ></i></a>*/
/*                                 </td>*/
/*                                 <td>{{ produit.prix * panier[produit.id] }} DT</td>*/
/*                             </form>*/
/*                             </tr>*/
/*                             {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}*/
/*                         {% endfor %}*/
/*                             {% endif %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     {% if produits|length != 0 %}*/
/*                         <dl class="dl-horizontal pull-right">*/
/*                             <dt>Total HT :</dt><dd>{{ totalHT }} DT</dd>*/
/* */
/*                             {% for key, tva in refTva %}*/
/*                                 <dt>TVA {{ key }} :</dt><dd>{{ tva }} DT</dd>*/
/*                             {% endfor %}*/
/*                         </dl>*/
/*                         <div class="clearfix"></div>*/
/*                         <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path('produits') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*                 <br/><br/><br/>*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
