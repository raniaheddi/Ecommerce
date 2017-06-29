<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_e38cb4922170f172a52a7994c4d08f509cd040b62e07cd8fd1e29fca6ebd8f98 extends Twig_Template
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
        $__internal_d47931cdeda32bfbc176f9c350eb89b84a6d36cd165ea310c2d9c4f70bbfa459 = $this->env->getExtension("native_profiler");
        $__internal_d47931cdeda32bfbc176f9c350eb89b84a6d36cd165ea310c2d9c4f70bbfa459->enter($__internal_d47931cdeda32bfbc176f9c350eb89b84a6d36cd165ea310c2d9c4f70bbfa459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47931cdeda32bfbc176f9c350eb89b84a6d36cd165ea310c2d9c4f70bbfa459->leave($__internal_d47931cdeda32bfbc176f9c350eb89b84a6d36cd165ea310c2d9c4f70bbfa459_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2f61fa09a8dfaf5ccaf4ae739f3b8bd467630dfcd87e2691c43b2de46ab480 = $this->env->getExtension("native_profiler");
        $__internal_cf2f61fa09a8dfaf5ccaf4ae739f3b8bd467630dfcd87e2691c43b2de46ab480->enter($__internal_cf2f61fa09a8dfaf5ccaf4ae739f3b8bd467630dfcd87e2691c43b2de46ab480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\">
                                <div class=\"thumb-image\"> <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "name", array()), "html", null, true);
        echo "\" /> </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class=\"col-md-7 dress-info\">
                    <div class=\"dress-name\">
                        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h3>
                        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo " DT</span>
                        <div class=\"clearfix\"></div>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>

                    </div>

                    </br>
                    <div class=\"span span2\">
                        ";
        // line 31
        echo "                        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("favoris_create", array("id" => $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "produit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
                if (($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "id", array()) == $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))) {
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Corps", array()), 'widget');
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
        
        $__internal_cf2f61fa09a8dfaf5ccaf4ae739f3b8bd467630dfcd87e2691c43b2de46ab480->leave($__internal_cf2f61fa09a8dfaf5ccaf4ae739f3b8bd467630dfcd87e2691c43b2de46ab480_prof);

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
        return array (  248 => 128,  234 => 116,  223 => 108,  220 => 107,  218 => 106,  213 => 103,  203 => 98,  199 => 96,  192 => 94,  189 => 93,  187 => 92,  183 => 91,  178 => 89,  172 => 86,  168 => 84,  164 => 83,  138 => 60,  132 => 58,  125 => 54,  122 => 53,  120 => 52,  115 => 49,  107 => 37,  96 => 35,  92 => 34,  85 => 31,  76 => 24,  71 => 22,  67 => 21,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
