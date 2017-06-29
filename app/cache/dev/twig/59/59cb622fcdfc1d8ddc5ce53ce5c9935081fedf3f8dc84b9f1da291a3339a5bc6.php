<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_533d5b468c5228b2eda1112fe7278609a79c8ab5ebab55ecadfc197e725acc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_2ecef064de71a9edbd9e47a2bfeb547f1d0a2690ecb8441f58159898059be4a0 = $this->env->getExtension("native_profiler");
        $__internal_2ecef064de71a9edbd9e47a2bfeb547f1d0a2690ecb8441f58159898059be4a0->enter($__internal_2ecef064de71a9edbd9e47a2bfeb547f1d0a2690ecb8441f58159898059be4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecef064de71a9edbd9e47a2bfeb547f1d0a2690ecb8441f58159898059be4a0->leave($__internal_2ecef064de71a9edbd9e47a2bfeb547f1d0a2690ecb8441f58159898059be4a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f0d4dc459f677c1ac081c7742ff29bb459b58c8f35b7626b9ef6c0b6125bb8 = $this->env->getExtension("native_profiler");
        $__internal_52f0d4dc459f677c1ac081c7742ff29bb459b58c8f35b7626b9ef6c0b6125bb8->enter($__internal_52f0d4dc459f677c1ac081c7742ff29bb459b58c8f35b7626b9ef6c0b6125bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
                <h2>VALIDER MON PANIER</h2>
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 18
            echo "                            <tr>
                                <td>
                                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " DT</td>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " DT</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </tbody>
                </table>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " DT</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison|</h4></dt>
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "codePostal", array()), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>
                
                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>|Adresse de facturation</h4></dt>
                        <dt>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "codePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>

                <div class=\"clearfix\"></div>

                <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\" />

                <input name=\"date\" type=\"hidden\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
                </form>

                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">Retour</a>
            </div>

        </div>
    </div>
";
        
        $__internal_52f0d4dc459f677c1ac081c7742ff29bb459b58c8f35b7626b9ef6c0b6125bb8->leave($__internal_52f0d4dc459f677c1ac081c7742ff29bb459b58c8f35b7626b9ef6c0b6125bb8_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  148 => 56,  143 => 54,  139 => 53,  128 => 47,  124 => 46,  118 => 45,  106 => 38,  102 => 37,  96 => 36,  87 => 30,  81 => 26,  72 => 23,  68 => 22,  63 => 20,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span9">*/
/*                 <h2>VALIDER MON PANIER</h2>*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Quantité</th>*/
/*                             <th>Prix unitaire</th>*/
/*                             <th>Total HT</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for produit in commande.commande.produit %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     {{ produit.quantite }}*/
/*                                 </td>*/
/*                                 <td>{{ produit.prixHT }} DT</td>*/
/*                                 <td>{{ produit.prixHT * produit.quantite }} DT</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} DT</dd>*/
/*                 </dl>*/
/* */
/*                 <div class="span3 pull-left">*/
/*                     <dl class="pull-left">*/
/*                         <dt><h4>Adresse de livraison|</h4></dt>*/
/*                         <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>*/
/*                         <dt>{{ commande.commande.livraison.adresse }}</dt>*/
/*                         <dt>{{ commande.commande.livraison.codePostal }}  - {{ commande.commande.livraison.pays }}</dt>*/
/*                     </dl>*/
/*                 </div>*/
/*                 */
/*                 <div class="span3 pull-left">*/
/*                     <dl class="pull-left">*/
/*                         <dt><h4>|Adresse de facturation</h4></dt>*/
/*                         <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>*/
/*                         <dt>{{ commande.commande.facturation.adresse }}</dt>*/
/*                         <dt>{{ commande.commande.facturation.codePostal }} - {{ commande.commande.facturation.pays }}</dt>*/
/*                     </dl>*/
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/* */
/*                 <form action="{{ path('validationCommande', { 'id' : commande.id }) }}" method="POST"/>*/
/*                 <input name="token" type="hidden" value="{{ commande.commande.token }}" />*/
/* */
/*                 <input name="date" type="hidden" value="{{ commande.date|date('dmyhms') }}" />*/
/*                 <button type="submit" class="btn btn-success pull-right">Payer</button>*/
/*                 </form>*/
/* */
/*                 <a href="{{ path('livraison') }}" class="btn btn-primary">Retour</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
