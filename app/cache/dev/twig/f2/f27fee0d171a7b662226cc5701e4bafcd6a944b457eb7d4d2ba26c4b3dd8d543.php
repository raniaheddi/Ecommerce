<?php

/* UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig */
class __TwigTemplate_5b9649f8f79a7e0210eb2bc4b4e03461ce2413eea3ce130a88a7939a65d257b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig", 1);
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
        $__internal_da336a7b01cb33a359c268dd2062f13974c718f6c14b7a8ff8e5f6fcd722fcc3 = $this->env->getExtension("native_profiler");
        $__internal_da336a7b01cb33a359c268dd2062f13974c718f6c14b7a8ff8e5f6fcd722fcc3->enter($__internal_da336a7b01cb33a359c268dd2062f13974c718f6c14b7a8ff8e5f6fcd722fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da336a7b01cb33a359c268dd2062f13974c718f6c14b7a8ff8e5f6fcd722fcc3->leave($__internal_da336a7b01cb33a359c268dd2062f13974c718f6c14b7a8ff8e5f6fcd722fcc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ba584d18cb1cf8782532165dcd198a5c158b47e7957a84de5345605318756a4 = $this->env->getExtension("native_profiler");
        $__internal_0ba584d18cb1cf8782532165dcd198a5c158b47e7957a84de5345605318756a4->enter($__internal_0ba584d18cb1cf8782532165dcd198a5c158b47e7957a84de5345605318756a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Utilisateurs liste</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "adresses", array())) != 0)) {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminAdressesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les adresses\"><i class=\"icon-book\"></i></a>
                    ";
            }
            // line 21
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "commandes", array())) != 0)) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminFacturesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les factures\"><i class=\"icon-book\"></i></a>
                    ";
            }
            // line 24
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_0ba584d18cb1cf8782532165dcd198a5c158b47e7957a84de5345605318756a4->leave($__internal_0ba584d18cb1cf8782532165dcd198a5c158b47e7957a84de5345605318756a4_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  81 => 24,  75 => 22,  72 => 21,  66 => 19,  64 => 18,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Utilisateurs liste</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for utilisateur in utilisateurs %}*/
/*             <tr>*/
/*                 <td>{{ utilisateur.username }}</td>*/
/*                 <td>*/
/*                     {% if utilisateur.adresses|length != 0 %}*/
/*                         <a href="{{ path('adminAdressesUtilisateurs', { 'id': utilisateur.id }) }}" title="Consulter les adresses"><i class="icon-book"></i></a>*/
/*                     {% endif %}*/
/*                     {% if utilisateur.commandes|length != 0 %}*/
/*                         <a href="{{ path('adminFacturesUtilisateurs', { 'id': utilisateur.id }) }}" title="Consulter les factures"><i class="icon-book"></i></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
