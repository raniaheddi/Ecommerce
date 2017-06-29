<?php

/* EcommerceBundle:Administration:Commandes/layout/index.html.twig */
class __TwigTemplate_13e973d04d6fc056616f65076d8cf0a9ab3b5fcc3170465dda04fcb90da5e24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Commandes/layout/index.html.twig", 1);
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
        $__internal_b16d0f713621b3aede28df14bccc3f8cb6d7325cd6120ab8f63192c2c5c7e17f = $this->env->getExtension("native_profiler");
        $__internal_b16d0f713621b3aede28df14bccc3f8cb6d7325cd6120ab8f63192c2c5c7e17f->enter($__internal_b16d0f713621b3aede28df14bccc3f8cb6d7325cd6120ab8f63192c2c5c7e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Commandes/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16d0f713621b3aede28df14bccc3f8cb6d7325cd6120ab8f63192c2c5c7e17f->leave($__internal_b16d0f713621b3aede28df14bccc3f8cb6d7325cd6120ab8f63192c2c5c7e17f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09d158a0abd7473b45a82e69154ee4765c7ff4600036dcdc181aa32f5a2a1e6c = $this->env->getExtension("native_profiler");
        $__internal_09d158a0abd7473b45a82e69154ee4765c7ff4600036dcdc181aa32f5a2a1e6c->enter($__internal_09d158a0abd7473b45a82e69154ee4765c7ff4600036dcdc181aa32f5a2a1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste Des Commandes</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Référence</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d-m-Y h:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminShowFacture", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_09d158a0abd7473b45a82e69154ee4765c7ff4600036dcdc181aa32f5a2a1e6c->leave($__internal_09d158a0abd7473b45a82e69154ee4765c7ff4600036dcdc181aa32f5a2a1e6c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Commandes/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste Des Commandes</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>Référence</th>*/
/*                 <th>Client</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for commande in commandes %}*/
/*             <tr>*/
/*                 <td>{{ commande.date|date('d-m-Y h:i:s') }}</td>*/
/*                 <td>{{ commande.reference }}</td>*/
/*                 <td>{{ commande.utilisateur.username }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('adminShowFacture', { 'id' : commande.id }) }}"><i class="icon-book"></i></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
