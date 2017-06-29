<?php

/* EcommerceBundle:Default:produits/layout/home.html.twig */
class __TwigTemplate_cd6135d7f0e412cbfe1fa405f5b00fff08e113ed5768976c3c4284d2bf858e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:produits/layout/home.html.twig", 1);
        $this->blocks = array(
            'buy' => array($this, 'block_buy'),
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

    // line 2
    public function block_buy($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"banner\">
        <div class=\"container\">
            <div class=\"banner-bottom\">
                <div class=\"banner-bottom-left\">
                    <h2>E<br>S<br>H<br>O<br>P</h2>
                </div>
                <div class=\"banner-bottom-right\">
                    <div  class=\"callbacks_container\">
                        <ul class=\"rslides\" id=\"slider4\">

                            <li>
                                <div class=\"banner-info\">
                                    <h3>Bienvenue</h3>
                                    <p>Commencez vos achats ici...</p>
                                </div>\t\t\t\t\t\t\t\t
                            </li>
                            <li>
                                <div class=\"banner-info\">
                                    <h3>Chez Nous</h3>
                                    <p>Commencez vos achats ici...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        // You can also use \"\$(window).load(function() {\"
                        \$(function () {
                            // Slideshow 4
                            \$(\"#slider4\").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: false,
                                speed: 500,
                                namespace: \"callbacks\",
                                before: function () {
                                    \$('.events').append(\"<li>before event fired.</li>\");
                                },
                                after: function () {
                                    \$('.events').append(\"<li>after event fired.</li>\");
                                }
                            });

                        });
                    </script>
                </div>
                <div class=\"clearfix\"> </div>

            </div>
            <div class=\"shop\">
                <a href=\"";
        // line 54
        echo "produits";
        echo "\">NOTRE BOUTIQUE</a>
            </div>
        </div>
    </div>

";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/css/component.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- content-section-starts-here -->
    <div class=\"container\">
        <div class=\"main-content\">
            <div class=\"products-grid\">
                <header>
                    <h3 class=\"head text-center\">Top Produits</h3>
                </header>
                ";
        // line 69
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) != 0)) {
            // line 70
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 71
                echo "                        <div class=\"col-md-4 product simpleCart_shelfItem text-center\">
                            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                echo "\" alt=\"\" /></a>
                            <div class=\"mask\">
                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Fiche Technique</a>
                            </div>
                            <a class=\"product_name\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</a>
                            ";
                // line 77
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 78
                    echo "                                <p><a class=\"item_add\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\"><i></i> <span class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                    echo " DT</span></a></p>
                                        ";
                } else {
                    // line 80
                    echo "                                <p> <span class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                    echo " DT</span></p>

                            ";
                }
                // line 83
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
                    <div class=\"clearfix\"></div>
                    <script src=";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/cbpViewModeSwitch.js"), "html", null, true);
            echo " type=\"text/javascript\"></script>
                    <script src=";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/classie.js"), "html", null, true);
            echo " type=\"text/javascript\"></script>

                </div>
            </div>
        </div>
        ";
            // line 93
            if ((twig_length_filter($this->env, (isset($context["catalogue"]) ? $context["catalogue"] : null)) != 0)) {
                echo "                      
            <div class=\"other-products\">
                <div class=\"container\">
                    <h3 class=\"like text-center\">Nouvelle Collection</h3>        \t\t\t
                    <ul id=\"flexiselDemo3\">
                        ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["catalogue"]) ? $context["catalogue"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 99
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">
                                    <div class=\"thumb-image\"> <img src=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                    echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                    echo "\" /> 
                                    </div>   </a>
                                <div class=\"product liked-product simpleCart_shelfItem\">
                                    <a class=\"like_name\" href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                    echo "</a>
                                    <p><a class=\"item_add\" href=\"#\"><i></i> <span class=\" item_price\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                    echo " DT</span></a></p>
                                </div>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                    </ul>
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
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/jquery.flexisel.js"), "html", null, true);
                echo "\"></script>
                </div>
            </div>
        ";
            }
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        Aucun produit
    ";
        }
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 141,  259 => 140,  252 => 136,  222 => 108,  212 => 104,  206 => 103,  198 => 100,  193 => 99,  189 => 98,  181 => 93,  173 => 88,  169 => 87,  165 => 85,  158 => 83,  151 => 80,  143 => 78,  141 => 77,  135 => 76,  130 => 74,  123 => 72,  120 => 71,  115 => 70,  113 => 69,  101 => 61,  98 => 60,  88 => 54,  59 => 28,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* {% block buy %}*/
/*     <div class="banner">*/
/*         <div class="container">*/
/*             <div class="banner-bottom">*/
/*                 <div class="banner-bottom-left">*/
/*                     <h2>E<br>S<br>H<br>O<br>P</h2>*/
/*                 </div>*/
/*                 <div class="banner-bottom-right">*/
/*                     <div  class="callbacks_container">*/
/*                         <ul class="rslides" id="slider4">*/
/* */
/*                             <li>*/
/*                                 <div class="banner-info">*/
/*                                     <h3>Bienvenue</h3>*/
/*                                     <p>Commencez vos achats ici...</p>*/
/*                                 </div>								*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="banner-info">*/
/*                                     <h3>Chez Nous</h3>*/
/*                                     <p>Commencez vos achats ici...</p>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!--banner-->*/
/*                     <script src="{{ asset('bundles/EcommerceBundle/js/responsiveslides.min.js')}}"></script>*/
/*                     <script>*/
/*                         // You can also use "$(window).load(function() {"*/
/*                         $(function () {*/
/*                             // Slideshow 4*/
/*                             $("#slider4").responsiveSlides({*/
/*                                 auto: true,*/
/*                                 pager: true,*/
/*                                 nav: false,*/
/*                                 speed: 500,*/
/*                                 namespace: "callbacks",*/
/*                                 before: function () {*/
/*                                     $('.events').append("<li>before event fired.</li>");*/
/*                                 },*/
/*                                 after: function () {*/
/*                                     $('.events').append("<li>after event fired.</li>");*/
/*                                 }*/
/*                             });*/
/* */
/*                         });*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="clearfix"> </div>*/
/* */
/*             </div>*/
/*             <div class="shop">*/
/*                 <a href="{{ ('produits') }}">NOTRE BOUTIQUE</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/*     <link href="{{ asset('bundles/EcommerceBundle/css/component.css') }}" rel='stylesheet' type='text/css' />*/
/*     <!-- content-section-starts-here -->*/
/*     <div class="container">*/
/*         <div class="main-content">*/
/*             <div class="products-grid">*/
/*                 <header>*/
/*                     <h3 class="head text-center">Top Produits</h3>*/
/*                 </header>*/
/*                 {% if produits|length != 0 %}*/
/*                     {% for produit in produits %}*/
/*                         <div class="col-md-4 product simpleCart_shelfItem text-center">*/
/*                             <a href="{{ path('presentation', { 'id' : produit.id }) }}"><img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" alt="" /></a>*/
/*                             <div class="mask">*/
/*                                 <a href="{{ path('presentation', { 'id' : produit.id }) }}">Fiche Technique</a>*/
/*                             </div>*/
/*                             <a class="product_name" href="{{ path('presentation', { 'id' : produit.id }) }}">{{ produit.nom }}</a>*/
/*                             {% if panier[produit.id] is not defined %}*/
/*                                 <p><a class="item_add" href="{{ path('ajouter', { 'id' : produit.id }) }}"><i></i> <span class="item_price">{{ produit.prix }} DT</span></a></p>*/
/*                                         {% else %}*/
/*                                 <p> <span class="item_price">{{ produit.prix }} DT</span></p>*/
/* */
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                     <div class="clearfix"></div>*/
/*                     <script src={{ asset('bundles/EcommerceBundle/js/cbpViewModeSwitch.js')}} type="text/javascript"></script>*/
/*                     <script src={{ asset('bundles/EcommerceBundle/js/classie.js')}} type="text/javascript"></script>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% if catalogue|length != 0 %}                      */
/*             <div class="other-products">*/
/*                 <div class="container">*/
/*                     <h3 class="like text-center">Nouvelle Collection</h3>        			*/
/*                     <ul id="flexiselDemo3">*/
/*                         {% for produit in catalogue %}*/
/*                             <li><a href="{{ path('presentation', { 'id' : produit.id }) }}">*/
/*                                     <div class="thumb-image"> <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" data-imagezoom="true" class="img-responsive" alt="{{ produit.image.name }}" /> */
/*                                     </div>   </a>*/
/*                                 <div class="product liked-product simpleCart_shelfItem">*/
/*                                     <a class="like_name" href="{{ path('presentation', { 'id' : produit.id }) }}">{{ produit.nom }}</a>*/
/*                                     <p><a class="item_add" href="#"><i></i> <span class=" item_price">{{ produit.prix }} DT</span></a></p>*/
/*                                 </div>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <script type="text/javascript">*/
/*                         $(window).load(function () {*/
/*                             $("#flexiselDemo3").flexisel({*/
/*                                 visibleItems: 4,*/
/*                                 animationSpeed: 1000,*/
/*                                 autoPlay: true,*/
/*                                 autoPlaySpeed: 3000,*/
/*                                 pauseOnHover: true,*/
/*                                 enableResponsiveBreakpoints: true,*/
/*                                 responsiveBreakpoints: {*/
/*                                     portrait: {*/
/*                                         changePoint: 480,*/
/*                                         visibleItems: 1*/
/*                                     },*/
/*                                     landscape: {*/
/*                                         changePoint: 640,*/
/*                                         visibleItems: 2*/
/*                                     },*/
/*                                     tablet: {*/
/*                                         changePoint: 768,*/
/*                                         visibleItems: 3*/
/*                                     }*/
/*                                 }*/
/*                             });*/
/* */
/*                         });*/
/*                     </script>*/
/*                     <script type="text/javascript" src="{{ asset('bundles/EcommerceBundle/js/jquery.flexisel.js') }}"></script>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         Aucun produit*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
