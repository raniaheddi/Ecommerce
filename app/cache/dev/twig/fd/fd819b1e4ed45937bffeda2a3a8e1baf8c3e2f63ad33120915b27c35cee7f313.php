<?php

/* UtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_1c5fc3a86fa3147d36b673c0a84fcb5bf40c92bc193b603efe88a36b15b0195f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "UtilisateursBundle:Default:layout/facture.html.twig", 1);
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
        $__internal_011d3d358412409ff439e136584cf7002d85e9e656e2d77102edcbf1fb6ba47d = $this->env->getExtension("native_profiler");
        $__internal_011d3d358412409ff439e136584cf7002d85e9e656e2d77102edcbf1fb6ba47d->enter($__internal_011d3d358412409ff439e136584cf7002d85e9e656e2d77102edcbf1fb6ba47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011d3d358412409ff439e136584cf7002d85e9e656e2d77102edcbf1fb6ba47d->leave($__internal_011d3d358412409ff439e136584cf7002d85e9e656e2d77102edcbf1fb6ba47d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96d07f1b0276fc8a5202a32056b388f91c94a094bbec5feff03233989eb14570 = $this->env->getExtension("native_profiler");
        $__internal_96d07f1b0276fc8a5202a32056b388f91c94a094bbec5feff03233989eb14570->enter($__internal_96d07f1b0276fc8a5202a32056b388f91c94a094bbec5feff03233989eb14570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">\t\t\t\t
            <div class=\"span9\">

                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                <h2>FACTURES</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix HT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 32
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                            </tr>
                        ";
        }
        // line 36
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 37
            echo "                            <tr>
                                <td>ref : ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixHT", array()), "html", null, true);
            echo " DT</td>
                                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_96d07f1b0276fc8a5202a32056b388f91c94a094bbec5feff03233989eb14570->leave($__internal_96d07f1b0276fc8a5202a32056b388f91c94a094bbec5feff03233989eb14570_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  102 => 36,  96 => 32,  94 => 31,  79 => 18,  70 => 15,  67 => 14,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %} */
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">				*/
/*             <div class="span9">*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                     <div class="alert alert-success">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 {% for flashMessage in app.session.flashbag.get('error') %}*/
/*                     <div class="alert alert-errors">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 <h2>FACTURES</h2>*/
/*                 <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>Prix HT</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% if factures|length == 0 %}*/
/*                                 <tr>*/
/*                                     <td colspan="4"><center>Ancunne facture actuellement.</center></td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                         {% for facture in factures %}*/
/*                             <tr>*/
/*                                 <td>ref : {{ facture.reference }}</td>*/
/*                                 <td>{{ facture.date|date('d/m/Y') }}</td>*/
/*                                 <td>{{ facture.commande.prixHT }} DT</td>*/
/*                                 <td><a href="{{ path('facturesPDF', { 'id' : facture.id }) }}" target="_blank"><i class="icon-refresh"></i></a></td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
