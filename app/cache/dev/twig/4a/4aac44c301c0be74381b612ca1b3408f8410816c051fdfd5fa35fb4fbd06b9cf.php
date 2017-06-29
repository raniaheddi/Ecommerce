<?php

/* EcommerceBundle:Default:categories/modulesUsed/topMenu.html.twig */
class __TwigTemplate_1c309d6a0ad219e58a7dfde28537743901385eefd58269dd8141051253ff8180 extends Twig_Template
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
        $__internal_0487ca948c2cc196a551c3e342183cae4cf35d5e3e67146ad150a74048bee1f7 = $this->env->getExtension("native_profiler");
        $__internal_0487ca948c2cc196a551c3e342183cae4cf35d5e3e67146ad150a74048bee1f7->enter($__internal_0487ca948c2cc196a551c3e342183cae4cf35d5e3e67146ad150a74048bee1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/topMenu.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) != 0)) {
            // line 2
            echo "
    ";
            // line 3
            $context["i"] = 0;
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            // line 6
            echo "

    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 9
                echo "        ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    echo " 
            <li>
                <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo " </a>
            </li>
            ";
                    // line 13
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
    ";
            // line 18
            echo "    ";
            // line 19
            echo "    ";
            echo " 
    ";
            // line 20
            $context["i"] = 0;
            // line 21
            echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tous les Catégories <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu multi-column columns-3\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <ul class=\"multi-column-dropdown\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 28
                echo "
                            ";
                // line 29
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 4)) {
                    echo " 
                                <li>
                                    <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo " </a>
                                </li>
                                ";
                    // line 33
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 34
                    echo "

                            ";
                } elseif ((                // line 36
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    // line 37
                    echo "                            </ul>
                        </div>
                        <div class=\"col-sm-4\">
                            <ul class=\"multi-column-dropdown\">
                                <li>
                                    <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo " </a>
                                </li>
                                ";
                    // line 44
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 45
                    echo "

                            ";
                } elseif (((                // line 47
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) > 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 8))) {
                    echo " 
                                <li>
                                    <a href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo " </a>
                                </li>
                                ";
                    // line 51
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 52
                    echo "
                            ";
                } elseif ((                // line 53
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 8)) {
                    // line 54
                    echo "                            </ul>
                        </div>
                        <div class=\"col-sm-4\">
                            <ul class=\"multi-column-dropdown\">
                                <li>
                                    <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo " </a>
                                </li>
                                ";
                    // line 61
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 62
                    echo "



                            ";
                }
                // line 66
                echo " 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                    </ul>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </ul>
    </li>

    ";
            // line 78
            echo "

";
        }
        
        $__internal_0487ca948c2cc196a551c3e342183cae4cf35d5e3e67146ad150a74048bee1f7->leave($__internal_0487ca948c2cc196a551c3e342183cae4cf35d5e3e67146ad150a74048bee1f7_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/topMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 78,  180 => 68,  173 => 66,  166 => 62,  164 => 61,  157 => 59,  150 => 54,  148 => 53,  145 => 52,  143 => 51,  136 => 49,  131 => 47,  127 => 45,  125 => 44,  118 => 42,  111 => 37,  109 => 36,  105 => 34,  103 => 33,  96 => 31,  91 => 29,  88 => 28,  84 => 27,  76 => 21,  74 => 20,  70 => 19,  68 => 18,  65 => 16,  59 => 15,  56 => 14,  54 => 13,  47 => 11,  41 => 9,  37 => 8,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if (categories|length != 0)%}*/
/* */
/*     {% set i = 0 %}*/
/*     {# block 1 #}*/
/*     {# afficher 3 gatégories seulement #}*/
/* */
/* */
/*     {% for categorie in categories %}*/
/*         {% if (i<3)%} */
/*             <li>*/
/*                 <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{categorie.nom}} </a>*/
/*             </li>*/
/*             {% set i = i+1 %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {# endblock 1 #}*/
/*     {# block 2 #}*/
/*     {# afficher tous les catégoris #} */
/*     {% set i = 0 %}*/
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tous les Catégories <b class="caret"></b></a>*/
/*         <ul class="dropdown-menu multi-column columns-3">*/
/*             <div class="row">*/
/*                 <div class="col-sm-4">*/
/*                     <ul class="multi-column-dropdown">*/
/*                         {% for categorie in categories %}*/
/* */
/*                             {% if (i<4)%} */
/*                                 <li>*/
/*                                     <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{categorie.nom}} </a>*/
/*                                 </li>*/
/*                                 {% set i = i+1 %}*/
/* */
/* */
/*                             {% elseif (i==4)%}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <ul class="multi-column-dropdown">*/
/*                                 <li>*/
/*                                     <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{categorie.nom}} </a>*/
/*                                 </li>*/
/*                                 {% set i = i+1 %}*/
/* */
/* */
/*                             {% elseif (i>4 and i<8)%} */
/*                                 <li>*/
/*                                     <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{categorie.nom}} </a>*/
/*                                 </li>*/
/*                                 {% set i = i+1 %}*/
/* */
/*                             {% elseif (i==8)%}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-sm-4">*/
/*                             <ul class="multi-column-dropdown">*/
/*                                 <li>*/
/*                                     <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{categorie.nom}} </a>*/
/*                                 </li>*/
/*                                 {% set i = i+1 %}*/
/* */
/* */
/* */
/* */
/*                             {% endif %} */
/*                         {% endfor %}*/
/* */
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </ul>*/
/*     </li>*/
/* */
/*     {# endblock 2 #}*/
/* */
/* */
/* {% endif %}*/
