<?php

/* EcommerceBundle:Default:Sujet/showAll.html.twig */
class __TwigTemplate_9bc9125b6aa4defd510d15fadaf4dd9c0326504ea3b4ed5bbed6d921c7368a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:Sujet/showAll.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    
        <head>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <link href=";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/bootstrap-theme.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/form.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" /> 
            <script type=\"text/javascript\" src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery1.min.js"), "html", null, true);
        echo "></script>
            <!-- start menu -->
            <link href=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/megamenu.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <script type=\"text/javascript\" src=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/megamenu.js"), "html", null, true);
        echo "></script>
            <script  src=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/Megamenufunction.js"), "html", null, true);
        echo " ></script>
            <!--start slider -->
            <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/fwslider.css"), "html", null, true);
        echo " media=\"all\">
            <script src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery-ui.min.js"), "html", null, true);
        echo " ></script>
            <script src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/css3-mediaqueries.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/fwslider.js"), "html", null, true);
        echo "></script>
            <!--end slider -->
            <script src=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.easydropdown.js"), "html", null, true);
        echo "></script>
            <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/backOffice/css/icons/icons.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/backOffice/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/backOffice/css/plugins.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <script src=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ckeditor/ckeditor.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>

        </head>
        <body>

            <div id=\"main-content\">
                <div class=\"row\">
                    <div class=\"col-lg-8 blog-results\">
                        <!-- blog entry -->
                        <div class=\"panel panel-default\">
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "                                ";
            $context["nb"] = 0;
            echo "  
                                <tr ";
            // line 38
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo "> 
                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["com"]);
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                // line 40
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute($context["com"], "sujet", array()), "id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 41
                    echo "                                            ";
                    $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : null) + 1);
                    echo "  
                                        ";
                }
                // line 43
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                <div class=\"panel-body\" >
                                    <h1><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_sujet", array("sujet" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"c-dark\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></h1>
                                    <p class=\"lead\">Par <a href=\"#\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                    </p>
                                    <hr>
                                    <p>
                                        <i class=\"fa fa-calendar\"></i>  Publié le ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateAjout", array()), "j M \\à g:ia \\e\\n Y "), "html", null, true);
            echo " </p>
                                    <i class=\"fa fa-comments\"></i>  ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : null), "html", null, true);
            echo "
                                    <hr>
                                    <center><a ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_sujet", array("sujet" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo ">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sujet_image", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" width=\"200px\" class=\"img-responsive\">
                                        </a> </center>  <hr>
                                    <p> ";
            // line 55
            echo twig_slice($this->env, $this->getAttribute($context["entity"], "sujet", array()), 0, 20);
            echo " </p>
                                    <a class=\"btn btn-info\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_sujet", array("sujet" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Lire la suite <i class=\"fa fa-angle-right\"></i> </a>

                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </div>
                        
                    </div>
                    <!-- Ajouter sujet -->
                    <div class=\"rsingle span_1_of_single\">
                        <h5 class=\"m_1\">Ajouter un sujet</h5>
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body\" >

                                Si vous desirez ajouter un sujet clique au-dessous<br>
                                <center>  <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("sujet_create");
        echo "\" >  <button type=\"submit\" action=\"";
        echo $this->env->getExtension('routing')->getPath("sujet_create");
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-plus-square\"></i>  Sujet</button></a>
                                </center>   

                            </div>
                        </div>
                    </div>
                    <!-- End -->

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END WRAPPER -->


<script src=";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jquery-1.11.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jquery-ui/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-select/bootstrap-select.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/icheck/icheck.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/mmenu/js/jquery.mmenu.min.all.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/nprogress/nprogress.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/charts-sparkline/sparkline.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/breakpoints/breakpoints.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/numerator/jquery-numerator.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/mailbox.js"), "html", null, true);
        echo "></script>
<!-- END MANDATORY SCRIPTS -->
<script src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/application.js"), "html", null, true);
        echo "></script>
</body>
<div class=\"navigation\" align=\"center\">
    ";
        // line 107
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo " </div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Sujet/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 107,  311 => 104,  306 => 102,  302 => 101,  298 => 100,  294 => 99,  290 => 98,  286 => 97,  282 => 96,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  254 => 89,  231 => 71,  218 => 60,  200 => 56,  196 => 55,  189 => 53,  184 => 51,  180 => 50,  173 => 46,  167 => 45,  158 => 43,  152 => 41,  149 => 40,  145 => 39,  139 => 38,  134 => 37,  117 => 36,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  66 => 15,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* {% block body %}*/
/*     */
/*         <head>*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*             <link href={{asset('css2/bootstrap-theme.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/style.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/form.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/bootstrap.css')}} rel="stylesheet" type="text/css" media="all" /> */
/*             <script type="text/javascript" src={{asset('js2/jquery1.min.js')}}></script>*/
/*             <!-- start menu -->*/
/*             <link href={{asset('css2/megamenu.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <script type="text/javascript" src={{asset('js2/megamenu.js')}}></script>*/
/*             <script  src={{asset('js2/Megamenufunction.js')}} ></script>*/
/*             <!--start slider -->*/
/*             <link rel="stylesheet" href={{asset('css2/fwslider.css')}} media="all">*/
/*             <script src={{asset('js2/jquery-ui.min.js')}} ></script>*/
/*             <script src={{asset('js2/css3-mediaqueries.js')}}></script>*/
/*             <script src={{asset('js2/fwslider.js')}}></script>*/
/*             <!--end slider -->*/
/*             <script src={{asset('js2/jquery.easydropdown.js')}}></script>*/
/*             <link href={{asset('bundles/backOffice/css/icons/icons.min.css')}} rel="stylesheet">*/
/*             <link href={{asset('bundles/backOffice/css/bootstrap.min.css')}} rel="stylesheet">*/
/*             <link href={{asset('bundles/backOffice/css/plugins.min.css')}} rel="stylesheet">*/
/*             <script src={{asset('bundles/ckeditor/ckeditor.js')}} type="text/javascript"></script>*/
/* */
/*         </head>*/
/*         <body>*/
/* */
/*             <div id="main-content">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 blog-results">*/
/*                         <!-- blog entry -->*/
/*                         <div class="panel panel-default">*/
/*                             {% for entity in pagination %}*/
/*                                 {% set nb=0%}  */
/*                                 <tr {% if loop.index is odd %}class="color"{% endif %}> */
/*                                     {% for com in com %}*/
/*                                         {% if com.sujet.id==entity.id %}*/
/*                                             {% set nb=nb+1%}  */
/*                                         {% endif %}*/
/*                                     {% endfor %} */
/*                                 <div class="panel-body" >*/
/*                                     <h1><a href="{{path('detail_sujet',{'sujet':entity.id})}}" class="c-dark">{{entity.titre}}</a></h1>*/
/*                                     <p class="lead">Par <a href="#">{{entity.user.username}}</a>*/
/*                                     </p>*/
/*                                     <hr>*/
/*                                     <p>*/
/*                                         <i class="fa fa-calendar"></i>  Publié le {{entity.dateAjout|date('j M \\à g:ia \\e\\n Y ')}} </p>*/
/*                                     <i class="fa fa-comments"></i>  {{ nb }}*/
/*                                     <hr>*/
/*                                     <center><a {{path('detail_sujet',{'sujet':entity.id})}}>  <img src="{{path('sujet_image',{'id':entity.id})}}" width="200px" class="img-responsive">*/
/*                                         </a> </center>  <hr>*/
/*                                     <p> {{entity.sujet|slice(0,20)|raw}} </p>*/
/*                                     <a class="btn btn-info" href="{{path('detail_sujet',{'sujet':entity.id})}}">Lire la suite <i class="fa fa-angle-right"></i> </a>*/
/* */
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                     <!-- Ajouter sujet -->*/
/*                     <div class="rsingle span_1_of_single">*/
/*                         <h5 class="m_1">Ajouter un sujet</h5>*/
/*                         <div class="panel panel-default">*/
/* */
/*                             <div class="panel-body" >*/
/* */
/*                                 Si vous desirez ajouter un sujet clique au-dessous<br>*/
/*                                 <center>  <a href="{{path('sujet_create')}}" >  <button type="submit" action="{{path('sujet_create')}}" class="btn btn-info"><i class="fa fa-plus-square"></i>  Sujet</button></a>*/
/*                                 </center>   */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- End -->*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- END MAIN CONTENT -->*/
/*     </div>*/
/*     <!-- END WRAPPER -->*/
/* </div>*/
/* <!-- END WRAPPER -->*/
/* */
/* */
/* <script src={{asset('plugins/jquery-1.11.js')}}></script>*/
/* <script src={{asset('plugins/jquery-migrate-1.2.1.js')}}></script>*/
/* <script src={{asset('plugins/jquery-ui/jquery-ui-1.10.4.min.js')}}></script>*/
/* <script src={{asset('plugins/bootstrap/bootstrap.min.js')}}></script>*/
/* <script src={{asset('plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')}}></script>*/
/* <script src={{asset('plugins/bootstrap-select/bootstrap-select.js')}}></script>*/
/* <script src={{asset('plugins/icheck/icheck.js')}}></script>*/
/* <script src={{asset('plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}></script>*/
/* <script src={{asset('plugins/mmenu/js/jquery.mmenu.min.all.js')}}></script>*/
/* <script src={{asset('plugins/nprogress/nprogress.js')}}></script>*/
/* <script src={{asset('plugins/charts-sparkline/sparkline.min.js')}}></script>*/
/* <script src={{asset('plugins/breakpoints/breakpoints.js')}}></script>*/
/* <script src={{asset('plugins/numerator/jquery-numerator.js')}}></script>*/
/* <script src={{asset('js2/mailbox.js')}}></script>*/
/* <!-- END MANDATORY SCRIPTS -->*/
/* <script src={{asset('js2/application.js')}}></script>*/
/* </body>*/
/* <div class="navigation" align="center">*/
/*     {{ knp_pagination_render(pagination) }} </div>*/
/* <div class="clear"></div>*/
/* {% endblock %}*/
/* */
