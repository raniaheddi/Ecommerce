<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_9b5641380462df044a8b07a728c760d91d7adebdab8185a2cb91e1f26a372027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_cc0af355ab28cbc349a85d99c3cc6049ca01886b3259c8178b9cc1e835784036 = $this->env->getExtension("native_profiler");
        $__internal_cc0af355ab28cbc349a85d99c3cc6049ca01886b3259c8178b9cc1e835784036->enter($__internal_cc0af355ab28cbc349a85d99c3cc6049ca01886b3259c8178b9cc1e835784036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0af355ab28cbc349a85d99c3cc6049ca01886b3259c8178b9cc1e835784036->leave($__internal_cc0af355ab28cbc349a85d99c3cc6049ca01886b3259c8178b9cc1e835784036_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35dc0708a14939666058e8840bf59a01fb2c83dff7b6430d8504df4f94e04b67 = $this->env->getExtension("native_profiler");
        $__internal_35dc0708a14939666058e8840bf59a01fb2c83dff7b6430d8504df4f94e04b67->enter($__internal_35dc0708a14939666058e8840bf59a01fb2c83dff7b6430d8504df4f94e04b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/css/component.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

    <!-- content-section-starts -->

    <div class=\"container\">
        <div class=\"products-page\">
            <div class=\"products\">
                <div class=\"product-listy\">
                    ";
        // line 12
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 12)->display($context);
        // line 13
        echo "
                </div>
            </div>
            <div class=\"new-product\">
                <div class=\"new-product-top\">
                    <ul class=\"product-top-list\">
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Accueil</a>&nbsp;<span>&gt;</span></li>
                        <li><span class=\"act\">Liste des Produits</span>&nbsp;</li>
                    </ul>
                    <p class=\"back\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Retour au précédent</a></p>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"mens-toolbar\">
                    <div class=\"sort\">
                        <div class=\"sort-by\">
                            <label>Trier Par</label>
                            <select>
                                <option value=\"\">Nom</option>
                                <option value=\"\">Prix</option>
                            </select>
                            <a href=\"\"><img src=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/images/arrow2.gif"), "html", null, true);
        echo " alt=\"\" class=\"v-middle\"></a>
                        </div>
                    </div>
                    <ul class=\"women_pagenation\">                       
                        ";
        // line 37
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "

                    </ul>
                    <div class=\"clearfix\"></div>\t\t
                </div>
                <div id=\"cbp-vm\" class=\"cbp-vm-switcher cbp-vm-view-grid\">
                    <div class=\"cbp-vm-options\">
                        <a href=\"#\" class=\"cbp-vm-icon cbp-vm-grid cbp-vm-selected\" data-view=\"cbp-vm-view-grid\" title=\"grid\">Grid View</a>
                        <a href=\"#\" class=\"cbp-vm-icon cbp-vm-list\" data-view=\"cbp-vm-view-list\" title=\"list\">List View</a>
                    </div>
                    <div class=\"clearfix\"></div>
                    ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 49
            echo "                        <ul>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 51
                echo "                                <li>
                                    <a class=\"cbp-vm-image\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">
                                        <div class=\"simpleCart_shelfItem\">
                                            <div class=\"view view-first\">
                                                <div class=\"inner_content clearfix\">
                                                    <div class=\"product_image\">  
                                                        <div class=\"thumb-image\"> <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" /> 
                                                        </div>
                                                        <div class=\"mask\">
                                                            <div class=\"info\">Fiche Technique</div>
                                                        </div>
                                                        <div class=\"product_container\">
                                                            <div class=\"cart-left\">
                                                                <p class=\"title\">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"pricey\"><span class=\"item_price\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT</span></div>
                                                            <div class=\"clearfix\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </a>
                                    <div class=\"cbp-vm-details\">
                                        ";
                // line 74
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["produit"], "description", array()), 0, 100), "html", null, true);
                echo "
                                    </div>
                                    ";
                // line 76
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 77
                    echo "                                        <a class=\"cbp-vm-icon cbp-vm-add item_add\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                    ";
                }
                // line 79
                echo "                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                        </ul>


                    </div>
                    <script src=";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/cbpViewModeSwitch.js"), "html", null, true);
            echo " type=\"text/javascript\"></script>
                    <script src=";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/classie.js"), "html", null, true);
            echo " type=\"text/javascript\"></script>

                </div>
                <div class=\"clearfix\"></div>
            </div>

        </div>

    ";
        } else {
            // line 96
            echo "        Aucun produit
    ";
        }
        // line 98
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["catalogue"]) ? $context["catalogue"] : $this->getContext($context, "catalogue"))) != 0)) {
            echo "                      
        <div class=\"other-products\">
            <div class=\"container\">
                <h3 class=\"like text-center\">Nouvelle Collection</h3>        \t\t\t
                <ul id=\"flexiselDemo3\">
                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalogue"]) ? $context["catalogue"] : $this->getContext($context, "catalogue")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 104
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">
                                <div class=\"thumb-image\"> <img src=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" /> 
                                </div>   </a>
                            <div class=\"product liked-product simpleCart_shelfItem\">
                                <a class=\"like_name\" href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</a>
                                <p><a class=\"item_add\" href=\"#\"><i></i> <span class=\" item_price\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " DT</span></a></p>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                </ul>
                <script type=\"text/javascript\">
                    \$(window).load(function () {
                        \$(\"#flexiselDemo3\").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type=\"text/javascript\" src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/jquery.flexisel.js"), "html", null, true);
            echo "\"></script>
            </div>
        </div>
    ";
        }
        // line 145
        echo "</div>
";
        
        $__internal_35dc0708a14939666058e8840bf59a01fb2c83dff7b6430d8504df4f94e04b67->leave($__internal_35dc0708a14939666058e8840bf59a01fb2c83dff7b6430d8504df4f94e04b67_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 145,  270 => 141,  240 => 113,  230 => 109,  224 => 108,  216 => 105,  211 => 104,  207 => 103,  198 => 98,  194 => 96,  182 => 87,  178 => 86,  172 => 82,  164 => 79,  158 => 77,  156 => 76,  151 => 74,  140 => 66,  135 => 64,  123 => 57,  115 => 52,  112 => 51,  108 => 50,  105 => 49,  103 => 48,  89 => 37,  82 => 33,  68 => 22,  62 => 19,  54 => 13,  52 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <link href="{{ asset('bundles/EcommerceBundle/css/component.css') }}" rel='stylesheet' type='text/css' />*/
/* */
/*     <!-- content-section-starts -->*/
/* */
/*     <div class="container">*/
/*         <div class="products-page">*/
/*             <div class="products">*/
/*                 <div class="product-listy">*/
/*                     {% include '::modulesUsed/navigation.html.twig' %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="new-product">*/
/*                 <div class="new-product-top">*/
/*                     <ul class="product-top-list">*/
/*                         <li><a href="{{ path('index') }}">Accueil</a>&nbsp;<span>&gt;</span></li>*/
/*                         <li><span class="act">Liste des Produits</span>&nbsp;</li>*/
/*                     </ul>*/
/*                     <p class="back"><a href="{{ path('produits') }}">Retour au précédent</a></p>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="mens-toolbar">*/
/*                     <div class="sort">*/
/*                         <div class="sort-by">*/
/*                             <label>Trier Par</label>*/
/*                             <select>*/
/*                                 <option value="">Nom</option>*/
/*                                 <option value="">Prix</option>*/
/*                             </select>*/
/*                             <a href=""><img src={{ asset('bundles/EcommerceBundle/images/arrow2.gif')}} alt="" class="v-middle"></a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul class="women_pagenation">                       */
/*                         {{ knp_pagination_render(produits) }}*/
/* */
/*                     </ul>*/
/*                     <div class="clearfix"></div>		*/
/*                 </div>*/
/*                 <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">*/
/*                     <div class="cbp-vm-options">*/
/*                         <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>*/
/*                         <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     {% if produits|length != 0 %}*/
/*                         <ul>*/
/*                             {% for produit in produits %}*/
/*                                 <li>*/
/*                                     <a class="cbp-vm-image" href="{{ path('presentation', { 'id' : produit.id }) }}">*/
/*                                         <div class="simpleCart_shelfItem">*/
/*                                             <div class="view view-first">*/
/*                                                 <div class="inner_content clearfix">*/
/*                                                     <div class="product_image">  */
/*                                                         <div class="thumb-image"> <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" data-imagezoom="true" class="img-responsive" alt="{{ produit.image.name }}" /> */
/*                                                         </div>*/
/*                                                         <div class="mask">*/
/*                                                             <div class="info">Fiche Technique</div>*/
/*                                                         </div>*/
/*                                                         <div class="product_container">*/
/*                                                             <div class="cart-left">*/
/*                                                                 <p class="title">{{ produit.nom }}</p>*/
/*                                                             </div>*/
/*                                                             <div class="pricey"><span class="item_price">{{ produit.prix }} DT</span></div>*/
/*                                                             <div class="clearfix"></div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                     </a>*/
/*                                     <div class="cbp-vm-details">*/
/*                                         {{ produit.description [0:100]}}*/
/*                                     </div>*/
/*                                     {% if panier[produit.id] is not defined %}*/
/*                                         <a class="cbp-vm-icon cbp-vm-add item_add" href="{{ path('ajouter', { 'id' : produit.id }) }}">Ajouter au panier</a>*/
/*                                     {% endif %}*/
/*                                     </div>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/* */
/* */
/*                     </div>*/
/*                     <script src={{ asset('bundles/EcommerceBundle/js/cbpViewModeSwitch.js')}} type="text/javascript"></script>*/
/*                     <script src={{ asset('bundles/EcommerceBundle/js/classie.js')}} type="text/javascript"></script>*/
/* */
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     {% else %}*/
/*         Aucun produit*/
/*     {% endif %}*/
/*     {% if catalogue|length != 0 %}                      */
/*         <div class="other-products">*/
/*             <div class="container">*/
/*                 <h3 class="like text-center">Nouvelle Collection</h3>        			*/
/*                 <ul id="flexiselDemo3">*/
/*                     {% for produit in catalogue %}*/
/*                         <li><a href="{{ path('presentation', { 'id' : produit.id }) }}">*/
/*                                 <div class="thumb-image"> <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" data-imagezoom="true" class="img-responsive" alt="{{ produit.image.name }}" /> */
/*                                 </div>   </a>*/
/*                             <div class="product liked-product simpleCart_shelfItem">*/
/*                                 <a class="like_name" href="{{ path('presentation', { 'id' : produit.id }) }}">{{ produit.nom }}</a>*/
/*                                 <p><a class="item_add" href="#"><i></i> <span class=" item_price">{{ produit.prix }} DT</span></a></p>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 <script type="text/javascript">*/
/*                     $(window).load(function () {*/
/*                         $("#flexiselDemo3").flexisel({*/
/*                             visibleItems: 4,*/
/*                             animationSpeed: 1000,*/
/*                             autoPlay: true,*/
/*                             autoPlaySpeed: 3000,*/
/*                             pauseOnHover: true,*/
/*                             enableResponsiveBreakpoints: true,*/
/*                             responsiveBreakpoints: {*/
/*                                 portrait: {*/
/*                                     changePoint: 480,*/
/*                                     visibleItems: 1*/
/*                                 },*/
/*                                 landscape: {*/
/*                                     changePoint: 640,*/
/*                                     visibleItems: 2*/
/*                                 },*/
/*                                 tablet: {*/
/*                                     changePoint: 768,*/
/*                                     visibleItems: 3*/
/*                                 }*/
/*                             }*/
/*                         });*/
/* */
/*                     });*/
/*                 </script>*/
/*                 <script type="text/javascript" src="{{ asset('bundles/EcommerceBundle/js/jquery.flexisel.js') }}"></script>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
