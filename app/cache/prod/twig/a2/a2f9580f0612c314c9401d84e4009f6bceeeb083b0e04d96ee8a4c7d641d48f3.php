<?php

/* EcommerceBundle:Default:categories/modulesUsed/topMenu.html.twig */
class __TwigTemplate_280b2dc957b9d65ad5ff7c2b20af1fdc4279fc70488238e5e2a18683cdd075d8 extends Twig_Template
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
        // line 1
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) != 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 9
                echo "        ";
                if (((isset($context["i"]) ? $context["i"] : null) < 3)) {
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
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 28
                echo "
                            ";
                // line 29
                if (((isset($context["i"]) ? $context["i"] : null) < 4)) {
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
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 34
                    echo "

                            ";
                } elseif ((                // line 36
(isset($context["i"]) ? $context["i"] : null) == 4)) {
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
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 45
                    echo "

                            ";
                } elseif (((                // line 47
(isset($context["i"]) ? $context["i"] : null) > 4) && ((isset($context["i"]) ? $context["i"] : null) < 8))) {
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
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 52
                    echo "
                            ";
                } elseif ((                // line 53
(isset($context["i"]) ? $context["i"] : null) == 8)) {
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
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
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
        return array (  188 => 78,  177 => 68,  170 => 66,  163 => 62,  161 => 61,  154 => 59,  147 => 54,  145 => 53,  142 => 52,  140 => 51,  133 => 49,  128 => 47,  124 => 45,  122 => 44,  115 => 42,  108 => 37,  106 => 36,  102 => 34,  100 => 33,  93 => 31,  88 => 29,  85 => 28,  81 => 27,  73 => 21,  71 => 20,  67 => 19,  65 => 18,  62 => 16,  56 => 15,  53 => 14,  51 => 13,  44 => 11,  38 => 9,  34 => 8,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
