<?php

/* EcommerceBundle:Default:Sujet/Detail.html.twig */
class __TwigTemplate_a2dab0fb47a919ab411a834a9138ac02d3d5f8898f1a7c020bbe08cafcd4b6e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:Sujet/Detail.html.twig", 1);
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
        $__internal_4ca950c9f00732429df5f2d0b82fed0dabf98993e28a25e4c11a68a59f9d838c = $this->env->getExtension("native_profiler");
        $__internal_4ca950c9f00732429df5f2d0b82fed0dabf98993e28a25e4c11a68a59f9d838c->enter($__internal_4ca950c9f00732429df5f2d0b82fed0dabf98993e28a25e4c11a68a59f9d838c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Sujet/Detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca950c9f00732429df5f2d0b82fed0dabf98993e28a25e4c11a68a59f9d838c->leave($__internal_4ca950c9f00732429df5f2d0b82fed0dabf98993e28a25e4c11a68a59f9d838c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_486c6ab8dbadadb6b3500673d8b39c5b8399c91aacbc0de9fa7f2e791bcc6913 = $this->env->getExtension("native_profiler");
        $__internal_486c6ab8dbadadb6b3500673d8b39c5b8399c91aacbc0de9fa7f2e791bcc6913->enter($__internal_486c6ab8dbadadb6b3500673d8b39c5b8399c91aacbc0de9fa7f2e791bcc6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <html>
        <head>
            <title>Ecommerce </title>

            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome-4.5.0/css/font-awesome.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome-4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/bootstrap-theme.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/form.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />  
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/starrating/css/style.css"), "html", null, true);
        echo "\" />
            <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
            <script type=\"text/javascript\" src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery1.min.js"), "html", null, true);
        echo "></script>
            <!-- start menu -->
            <link href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/megamenu.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <script type=\"text/javascript\" src=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/megamenu.js"), "html", null, true);
        echo "></script>
            <script  src=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/Megamenufunction.js"), "html", null, true);
        echo " ></script>
            <!--start slider -->
            <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/fwslider.css"), "html", null, true);
        echo " media=\"all\">
            <script src=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery-ui.min.js"), "html", null, true);
        echo " ></script>
            <script src=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/css3-mediaqueries.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/fwslider.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.easydropdown.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commande/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commande/js/customjs.js"), "html", null, true);
        echo "></script>
            <link rel=\"stylesheet\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commande/css/bootstrap.min.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" /> 
            <link rel=\"stylesheet\" href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commande/css/custom.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" /> 
            <!--end slider -->
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/style.css"), "html", null, true);
        echo "\">

            <script src=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.load.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.ready.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.slides.js"), "html", null, true);
        echo "></script>
            <!-- start details -->
            <script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/slides.min.jquery.js"), "html", null, true);
        echo "></script>

            <link rel=\"stylesheet\" href=";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css2/etalage.css"), "html", null, true);
        echo ">
            <script src=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js2/jquery.etalage.min.js"), "html", null, true);
        echo "></script>

        </head>
        <body>

            <div class=\"mens\">    
                <div class=\"main\">
                    <div class=\"wrap\">
                        <div class=\"cont span_2_of_3\">
                            <div class=\"clear\"></div>\t

                            <div class=\"toogle\">

                                <h1>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "titre", array()), "html", null, true);
        echo "</h1>
                                <p class=\"lead\">by <a>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "user", array()), "username", array()), "html", null, true);
        echo "</a></p>
                                <hr>
                                <p><i class=\"fa fa-calendar\"></i> Publié le ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "dateAjout", array()), "j M \\à g:ia \\e\\n Y "), "html", null, true);
        echo "</p>
                                <hr>
                                <center>     <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sujet_image", array("id" => $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "id", array()))), "html", null, true);
        echo "\" width=\"200px\" height=\"100px\" class=\"img-responsive\">
                                </center>   <hr>
                                ";
        // line 63
        echo $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "sujet", array());
        echo "

                                <hr>
                                <h3 class=\"m_3\">Commentaires</h3> 
                                <div class=\"well\">
                                    <h4>Ajouter un commentaire:</h4>
                                    <form name=\"commentaire\" action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_sujet", array("sujet" => $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                        <div class=\"form-group\">
                                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
                                        </div>
                                        <button type=\"submit\" action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_sujet", array("sujet" => $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-comment\"></i> Commenter</button>
                                    </form>
                                </div>
                                <hr>
                                <div>

                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 80
            echo "
                                        <h4> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "username", array()), "html", null, true);
            echo ": <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "DateCom", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
                                            ";
            // line 82
            if (($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "id", array()) == $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))) {
                // line 83
                echo "                                                <span class=\"popbtn\"><a class=\"arrow\"></a></span></h4>
                                                ";
            }
            // line 85
            echo "                                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaire", array()), "html", null, true);
            echo " </p> 


                                        ";
            // line 88
            if (($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "id", array()) == $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))) {
                // line 89
                echo "                                            <div id=\"popover\" style=\"display: none\">
                                                <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentairesujet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentairesujet_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>\t\t\t

                                            </div>



                                        ";
            }
            // line 97
            echo "  
                                        <hr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_486c6ab8dbadadb6b3500673d8b39c5b8399c91aacbc0de9fa7f2e791bcc6913->leave($__internal_486c6ab8dbadadb6b3500673d8b39c5b8399c91aacbc0de9fa7f2e791bcc6913_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Sujet/Detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 100,  267 => 97,  257 => 91,  253 => 90,  250 => 89,  248 => 88,  241 => 85,  237 => 83,  235 => 82,  229 => 81,  226 => 80,  222 => 79,  213 => 73,  208 => 71,  203 => 69,  194 => 63,  189 => 61,  184 => 59,  179 => 57,  175 => 56,  159 => 43,  155 => 42,  150 => 40,  145 => 38,  141 => 37,  137 => 36,  132 => 34,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  90 => 22,  86 => 21,  82 => 20,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <html>*/
/*         <head>*/
/*             <title>Ecommerce </title>*/
/* */
/*             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*             <link href={{asset('font-awesome-4.5.0/css/font-awesome.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('font-awesome-4.5.0/css/font-awesome.min.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/bootstrap-theme.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/style.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/form.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <link href={{asset('css2/bootstrap.css')}} rel="stylesheet" type="text/css" media="all" />  */
/*             <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/style.css') }}" />*/
/*             <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>*/
/*             <script type="text/javascript" src={{asset('js/jquery1.min.js')}}></script>*/
/*             <!-- start menu -->*/
/*             <link href={{asset('css2/megamenu.css')}} rel="stylesheet" type="text/css" media="all" />*/
/*             <script type="text/javascript" src={{asset('js2/megamenu.js')}}></script>*/
/*             <script  src={{asset('js2/Megamenufunction.js')}} ></script>*/
/*             <!--start slider -->*/
/*             <link rel="stylesheet" href={{asset('css2/fwslider.css')}} media="all">*/
/*             <script src={{asset('js2/jquery-ui.min.js')}} ></script>*/
/*             <script src={{asset('js2/css3-mediaqueries.js')}}></script>*/
/*             <script src={{asset('js2/fwslider.js')}}></script>*/
/*             <script src={{asset('js2/jquery.easydropdown.js')}}></script>*/
/*             <script src={{asset('bundles/commande/js/bootstrap.min.js')}}></script>*/
/*             <script src={{asset('bundles/commande/js/customjs.js')}}></script>*/
/*             <link rel="stylesheet" href={{asset('bundles/commande/css/bootstrap.min.css')}} type="text/css" media="all" /> */
/*             <link rel="stylesheet" href={{asset('bundles/commande/css/custom.css')}} type="text/css" media="all" /> */
/*             <!--end slider -->*/
/*             <link rel="stylesheet" href="{{asset('css2/style.css')}}">*/
/* */
/*             <script src={{asset('js2/jquery.load.js')}}></script>*/
/*             <script src={{asset('js2/jquery.ready.js')}}></script>*/
/*             <script src={{asset('js2/jquery.slides.js')}}></script>*/
/*             <!-- start details -->*/
/*             <script src={{asset('js2/slides.min.jquery.js')}}></script>*/
/* */
/*             <link rel="stylesheet" href={{asset('css2/etalage.css')}}>*/
/*             <script src={{asset('js2/jquery.etalage.min.js')}}></script>*/
/* */
/*         </head>*/
/*         <body>*/
/* */
/*             <div class="mens">    */
/*                 <div class="main">*/
/*                     <div class="wrap">*/
/*                         <div class="cont span_2_of_3">*/
/*                             <div class="clear"></div>	*/
/* */
/*                             <div class="toogle">*/
/* */
/*                                 <h1>{{sujet.titre}}</h1>*/
/*                                 <p class="lead">by <a>{{sujet.user.username}}</a></p>*/
/*                                 <hr>*/
/*                                 <p><i class="fa fa-calendar"></i> Publié le {{sujet.dateAjout|date('j M \\à g:ia \\e\\n Y ')}}</p>*/
/*                                 <hr>*/
/*                                 <center>     <img src="{{path('sujet_image',{'id':sujet.id})}}" width="200px" height="100px" class="img-responsive">*/
/*                                 </center>   <hr>*/
/*                                 {{sujet.sujet|raw}}*/
/* */
/*                                 <hr>*/
/*                                 <h3 class="m_3">Commentaires</h3> */
/*                                 <div class="well">*/
/*                                     <h4>Ajouter un commentaire:</h4>*/
/*                                     <form name="commentaire" action="{{path('detail_sujet',{'sujet':sujet.id})}}" method="post">*/
/*                                         <div class="form-group">*/
/*                                             {{ form_widget(form.commentaire)}}*/
/*                                         </div>*/
/*                                         <button type="submit" action="{{path('detail_sujet',{'sujet':sujet.id})}}" class="btn btn-info"><i class="fa fa-comment"></i> Commenter</button>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <hr>*/
/*                                 <div>*/
/* */
/*                                     {% for entity in entities %}*/
/* */
/*                                         <h4> {{ entity.user.username }}: <small>{{entity.DateCom|date('Y-m-d H:i:s')}}</small>*/
/*                                             {% if entity.user.id == utilisateur.id %}*/
/*                                                 <span class="popbtn"><a class="arrow"></a></span></h4>*/
/*                                                 {% endif %}*/
/*                                         <p>{{ entity.commentaire }} </p> */
/* */
/* */
/*                                         {% if entity.user.id == utilisateur.id %}*/
/*                                             <div id="popover" style="display: none">*/
/*                                                 <a href="{{path('commentairesujet_edit',{'id':entity.id})}}"><span class="glyphicon glyphicon-pencil"></span></a>*/
/*                                                 <a href="{{path('commentairesujet_delete',{'id':entity.id})}}"><span class="glyphicon glyphicon-remove"></span></a>			*/
/* */
/*                                             </div>*/
/* */
/* */
/* */
/*                                         {% endif %}  */
/*                                         <hr>*/
/*                                     {% endfor %}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
