<?php

/* EcommerceBundle:Administration:statistique/statistique.html.twig */
class __TwigTemplate_8d71e3892d791d21b47a941b51502a0fdc75b076dafc77f2b91e0855d1ce1f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:statistique/statistique.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a225fa7a1fadd850043aaab30662d2e2c016577df9db43486d7d98ff8a23bf65 = $this->env->getExtension("native_profiler");
        $__internal_a225fa7a1fadd850043aaab30662d2e2c016577df9db43486d7d98ff8a23bf65->enter($__internal_a225fa7a1fadd850043aaab30662d2e2c016577df9db43486d7d98ff8a23bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:statistique/statistique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a225fa7a1fadd850043aaab30662d2e2c016577df9db43486d7d98ff8a23bf65->leave($__internal_a225fa7a1fadd850043aaab30662d2e2c016577df9db43486d7d98ff8a23bf65_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad224281e09d75065c8ea4e73095fbf4a43b973c49b16ac9e48b17d87cdb2969 = $this->env->getExtension("native_profiler");
        $__internal_ad224281e09d75065c8ea4e73095fbf4a43b973c49b16ac9e48b17d87cdb2969->enter($__internal_ad224281e09d75065c8ea4e73095fbf4a43b973c49b16ac9e48b17d87cdb2969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
    type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>


    <div class=\"col-md-4 general-grids grids-right widget-shadow\">
        <h4 class=\"title2\"></h4>
        <ul id=\"myTabs\" class=\"nav nav-tabs\" role=\"tablist\">

            <li role=\"presentation\" class=\"\">
            <li role=\"presentation\" class=\"\">
                <a href=\"#produit\" id=\"produit-tab\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"produit\" aria-expanded=\"false\">Produits</a></li>
            <li role=\"presentation\" class=\"\">
                <a href=\"#profile\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-controls=\"profile\" aria-expanded=\"false\">Bilan financier</a></li>
        </ul>
        <div id=\"myTabContent\" class=\"tab-content scrollbar1\"> 
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"home\" aria-labelledby=\"home-tab\"> 
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade \" id=\"produit\" aria-labelledby=\"produit-tab\"> 
                <script type=\"text/javascript\">
                    ";
        // line 25
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
                </script> 
                <div id=\"linechart\" style=\"min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto\"></div>

                <script type=\"text/javascript\">
                    ";
        // line 30
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart2"]) ? $context["chart2"] : $this->getContext($context, "chart2")));
        echo "
                </script> 
                <div id=\"piechart\" style=\"min-width: 300px; height: 400px; max-width: 1000px; width: 100%; margin: 0 auto\"></div>
            </div> 
            <div role=\"tabpanel\" class=\"tab-pane fade \" id=\"profile\" aria-labelledby=\"profile-tab\">
                <script type=\"text/javascript\">
                    ";
        // line 36
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart1"]) ? $context["chart1"] : $this->getContext($context, "chart1")));
        echo "
                </script> 
                <div id=\"container1\" style=\"min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto\"></div> 
                <script type=\"text/javascript\">
                    ";
        // line 40
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart3"]) ? $context["chart3"] : $this->getContext($context, "chart3")));
        echo "
                </script> 
                <div id=\"container2\" style=\"min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto\"></div> 

            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dropdown1\" aria-labelledby=\"dropdown1-tab\"> </div>
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"dropdown2\" aria-labelledby=\"dropdown2-tab\"></div> </div>
    </div>

";
        
        $__internal_ad224281e09d75065c8ea4e73095fbf4a43b973c49b16ac9e48b17d87cdb2969->leave($__internal_ad224281e09d75065c8ea4e73095fbf4a43b973c49b16ac9e48b17d87cdb2969_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:statistique/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  81 => 36,  72 => 30,  64 => 25,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* {% block body %}   */
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"*/
/*     type="text/javascript"></script>*/
/* */
/*     <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* */
/* */
/*     <div class="col-md-4 general-grids grids-right widget-shadow">*/
/*         <h4 class="title2"></h4>*/
/*         <ul id="myTabs" class="nav nav-tabs" role="tablist">*/
/* */
/*             <li role="presentation" class="">*/
/*             <li role="presentation" class="">*/
/*                 <a href="#produit" id="produit-tab" role="tab" data-toggle="tab" aria-controls="produit" aria-expanded="false">Produits</a></li>*/
/*             <li role="presentation" class="">*/
/*                 <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Bilan financier</a></li>*/
/*         </ul>*/
/*         <div id="myTabContent" class="tab-content scrollbar1"> */
/*             <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab"> */
/*             </div>*/
/*             <div role="tabpanel" class="tab-pane fade " id="produit" aria-labelledby="produit-tab"> */
/*                 <script type="text/javascript">*/
/*                     {{ chart(chart) }}*/
/*                 </script> */
/*                 <div id="linechart" style="min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto"></div>*/
/* */
/*                 <script type="text/javascript">*/
/*                     {{ chart(chart2) }}*/
/*                 </script> */
/*                 <div id="piechart" style="min-width: 300px; height: 400px; max-width: 1000px; width: 100%; margin: 0 auto"></div>*/
/*             </div> */
/*             <div role="tabpanel" class="tab-pane fade " id="profile" aria-labelledby="profile-tab">*/
/*                 <script type="text/javascript">*/
/*                     {{ chart(chart1) }}*/
/*                 </script> */
/*                 <div id="container1" style="min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto"></div> */
/*                 <script type="text/javascript">*/
/*                     {{ chart(chart3) }}*/
/*                 </script> */
/*                 <div id="container2" style="min-width: 300px; height: 400px; max-width: 900px; width: 100%; margin: 0 auto"></div> */
/* */
/*             </div>*/
/*             <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab"> </div>*/
/*             <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab"></div> </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
