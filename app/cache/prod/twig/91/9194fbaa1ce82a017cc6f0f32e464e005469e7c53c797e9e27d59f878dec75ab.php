<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_ebfb6a76271b2303ef2eb3d6b48d45d7433127bebdb79db7c77abdc3481d6dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
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
        echo "    <!-- content-section-starts -->
    <div class=\"container\">
        <div class=\"products-page\">
            
            <div class=\"new-product\">
                <div class=\"col-md-5 zoom-grid\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            <li data-thumb=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\">
                                <div class=\"thumb-image\"> <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "name", array()), "html", null, true);
        echo "\" /> </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class=\"col-md-7 dress-info\">
                    <div class=\"dress-name\">
                        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom", array()), "html", null, true);
        echo "</h3>
                        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix", array()), "html", null, true);
        echo " DT</span>
                        <div class=\"clearfix\"></div>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "description", array()), "html", null, true);
        echo "</p>

                    </div>

                    </br>
                    <div class=\"span span2\">
                        ";
        // line 31
        echo "                        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
                            <p class=\"left \"><span class=\"selection-box\">
                                    <select name=\"qte\" class=\"domains valid\">
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                    </select></span></p>
                            <p class=\"right\">
                            <div>  
                                <button class=\"btn btn-info\">Ajouter au panier</button>
                            </div>
                        </form>
                        ";
        // line 49
        echo "                        </p>
                        <div class=\"clearfix\"></div>
                    </div>
                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "                        <div>
                            <a class=\"btn btn-info\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("favoris_create", array("id" => $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : null), "id", array()), "produit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array()))), "html", null, true);
            echo "\">Favoris</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        }
        // line 58
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/imagezoom.js"), "html", null, true);
        echo "\"></script>
                    <!-- FlexSlider -->
                    <script defer src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        // Can also be used with \$(document).ready()
                        \$(window).load(function () {
                            \$('.flexslider').flexslider({
                                animation: \"slide\",
                                controlNav: \"thumbnails\"
                            });
                        });
                    </script>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"reviews-tabs\">
                    <!-- Main component for a primary marketing message or call to action -->
                    <ul class=\"nav nav-tabs responsive hidden-xs hidden-sm\" id=\"myTab\">
                        <li class=\"test-class\"><a class=\"deco-none\" href=\"#source\">Avis</a></li>
                    </ul>

                    <div class=\"tab-content responsive hidden-xs hidden-sm\">
                        <div class=\"tab-pane\" id=\"source\">
                            <div class=\"response\">
                                <div class=\"clearfix\"> </div>
                                <form method=\"post\">
                                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 84
            echo "                                        <div class=\"media response-info\">
                                            <div class=\"media-left response-text-left\">
                                                <h5><a href=\"#\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "username", array()), "html", null, true);
            echo "</a></h5>
                                            </div>
                                            <div class=\"media-body response-text-right\">
                                                <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "corps", array()), "html", null, true);
            echo "</p>
                                                <ul>
                                                    <li>";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCom", array()), "y-m-d"), "html", null, true);
            echo " </li>
                                                    <li> ";
            // line 92
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 93
                echo "                                                        ";
                if (($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "id", array()) == $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "id", array()))) {
                    // line 94
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\"> Supprimer</a>\t\t
                                                        </li>
                                                    ";
                }
                // line 96
                echo "  
                                                    ";
            }
            // line 98
            echo "                                                    </ul>\t\t
                                                </div>
                                                <div class=\"clearfix\"> </div>
                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                                <div class=\"toogle\">

                                                    <p class=\"m_text\">
                                                        ";
        // line 106
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 107
            echo "                                                        <div class=\"controls\">             
                                                            ";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Corps", array()), 'widget');
            echo "
                                                        </div>
                                                        </p>
                                                        <div class=\"form-actions align-right\">
                                                            </br><button type=\"submit\" class=\"btn btn-info\">Commenter</button>
                                                            <ul class=\"record_actions\" style=\"display: inline-block\"></ul>
                                                        </div>
                                                    ";
        }
        // line 116
        echo "                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                </div>\t\t
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>


                <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/EcommerceBundle/js/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                        \$('#myTab a').click(function (e) {
                            e.preventDefault();
                            \$(this).tab('show');
                        });

                        \$('#moreTabs a').click(function (e) {
                            e.preventDefault();
                            \$(this).tab('show');
                        });

                        (function (\$) {
                            // Test for making sure event are maintained
                            \$('.js-alert-test').click(function () {
                                alert('Button Clicked: Event was maintained');
                            });
                            fakewaffle.responsiveTabs(['xs', 'sm']);
                        })(jQuery);

                </script>
            </body>
        </html>
        ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 128,  225 => 116,  214 => 108,  211 => 107,  209 => 106,  204 => 103,  194 => 98,  190 => 96,  183 => 94,  180 => 93,  178 => 92,  174 => 91,  169 => 89,  163 => 86,  159 => 84,  155 => 83,  129 => 60,  123 => 58,  116 => 54,  113 => 53,  111 => 52,  106 => 49,  98 => 37,  87 => 35,  83 => 34,  76 => 31,  67 => 24,  62 => 22,  58 => 21,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <!-- content-section-starts -->*/
/*     <div class="container">*/
/*         <div class="products-page">*/
/*             */
/*             <div class="new-product">*/
/*                 <div class="col-md-5 zoom-grid">*/
/*                     <div class="flexslider">*/
/*                         <ul class="slides">*/
/*                             <li data-thumb="{{ produit.image.AssetPath|imagine_filter('produit') }}">*/
/*                                 <div class="thumb-image"> <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" data-imagezoom="true" class="img-responsive" alt="{{ produit.image.name }}" /> </div>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-7 dress-info">*/
/*                     <div class="dress-name">*/
/*                         <h3>{{ produit.nom }}</h3>*/
/*                         <span>{{ produit.prix }} DT</span>*/
/*                         <div class="clearfix"></div>*/
/*                         <p>{{ produit.description }}</p>*/
/* */
/*                     </div>*/
/* */
/*                     </br>*/
/*                     <div class="span span2">*/
/*                         {#  {% if panier[produit.id] is not defined %} #}*/
/*                         <form action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get">*/
/*                             <p class="left "><span class="selection-box">*/
/*                                     <select name="qte" class="domains valid">*/
/*                                         {% for i in 1..10 %}*/
/*                                             <option value="{{ i }}">{{ i }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select></span></p>*/
/*                             <p class="right">*/
/*                             <div>  */
/*                                 <button class="btn btn-info">Ajouter au panier</button>*/
/*                             </div>*/
/*                         </form>*/
/*                         {#   {% else %}*/
/*                               <div>*/
/*                                   <a href="{{ path('panier') }}" class="btn-primary">Le produit est déjà dans votre panier</a>*/
/*   */
/*                               </div>*/
/*                           {% endif %} #}*/
/*                         </p>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         <div>*/
/*                             <a class="btn btn-info" href="{{path('favoris_create',{'id':favoris.id,'produit':produit.id})}}">Favoris</a>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <script src="{{ asset('bundles/EcommerceBundle/js/imagezoom.js')}}"></script>*/
/*                     <!-- FlexSlider -->*/
/*                     <script defer src="{{ asset('bundles/EcommerceBundle/js/jquery.flexslider.js')}}"></script>*/
/*                     <script>*/
/*                         // Can also be used with $(document).ready()*/
/*                         $(window).load(function () {*/
/*                             $('.flexslider').flexslider({*/
/*                                 animation: "slide",*/
/*                                 controlNav: "thumbnails"*/
/*                             });*/
/*                         });*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="reviews-tabs">*/
/*                     <!-- Main component for a primary marketing message or call to action -->*/
/*                     <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">*/
/*                         <li class="test-class"><a class="deco-none" href="#source">Avis</a></li>*/
/*                     </ul>*/
/* */
/*                     <div class="tab-content responsive hidden-xs hidden-sm">*/
/*                         <div class="tab-pane" id="source">*/
/*                             <div class="response">*/
/*                                 <div class="clearfix"> </div>*/
/*                                 <form method="post">*/
/*                                     {% for entity in entities %}*/
/*                                         <div class="media response-info">*/
/*                                             <div class="media-left response-text-left">*/
/*                                                 <h5><a href="#">{{ entity.user.username }}</a></h5>*/
/*                                             </div>*/
/*                                             <div class="media-body response-text-right">*/
/*                                                 <p>{{ entity.corps }}</p>*/
/*                                                 <ul>*/
/*                                                     <li>{{ entity.dateCom|date('y-m-d')}} </li>*/
/*                                                     <li> {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                                         {% if entity.user.id == utilisateur.id %}*/
/*                                                             <a href="{{path('commentaire_delete',{'id':entity.id})}}"> Supprimer</a>		*/
/*                                                         </li>*/
/*                                                     {% endif %}  */
/*                                                     {% endif %}*/
/*                                                     </ul>		*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"> </div>*/
/*                                             </div>*/
/*                                             {% endfor %}*/
/*                                                 <div class="toogle">*/
/* */
/*                                                     <p class="m_text">*/
/*                                                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                                         <div class="controls">             */
/*                                                             {{ form_widget(form.Corps)}}*/
/*                                                         </div>*/
/*                                                         </p>*/
/*                                                         <div class="form-actions align-right">*/
/*                                                             </br><button type="submit" class="btn btn-info">Commenter</button>*/
/*                                                             <ul class="record_actions" style="display: inline-block"></ul>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 </div>  */
/*                                             </form>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>		*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <script src="{{asset('bundles/EcommerceBundle/js/responsive-tabs.js')}}"></script>*/
/*                 <script type="text/javascript">*/
/*                         $('#myTab a').click(function (e) {*/
/*                             e.preventDefault();*/
/*                             $(this).tab('show');*/
/*                         });*/
/* */
/*                         $('#moreTabs a').click(function (e) {*/
/*                             e.preventDefault();*/
/*                             $(this).tab('show');*/
/*                         });*/
/* */
/*                         (function ($) {*/
/*                             // Test for making sure event are maintained*/
/*                             $('.js-alert-test').click(function () {*/
/*                                 alert('Button Clicked: Event was maintained');*/
/*                             });*/
/*                             fakewaffle.responsiveTabs(['xs', 'sm']);*/
/*                         })(jQuery);*/
/* */
/*                 </script>*/
/*             </body>*/
/*         </html>*/
/*         {% endblock %}*/
