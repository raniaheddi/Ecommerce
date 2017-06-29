<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ff19ffe97da60a69d762d1594f249ba41a2620fa14b865948c4a1d984454d42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2c42d25a60eb859b83ca0fcbcb00c181d709dc998357d6b3680062e3cca72ef = $this->env->getExtension("native_profiler");
        $__internal_a2c42d25a60eb859b83ca0fcbcb00c181d709dc998357d6b3680062e3cca72ef->enter($__internal_a2c42d25a60eb859b83ca0fcbcb00c181d709dc998357d6b3680062e3cca72ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c42d25a60eb859b83ca0fcbcb00c181d709dc998357d6b3680062e3cca72ef->leave($__internal_a2c42d25a60eb859b83ca0fcbcb00c181d709dc998357d6b3680062e3cca72ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6685f853a663cea197a54f3b3cdcf2c9ed8c2eefe07bd8225428c47394cf48 = $this->env->getExtension("native_profiler");
        $__internal_4d6685f853a663cea197a54f3b3cdcf2c9ed8c2eefe07bd8225428c47394cf48->enter($__internal_4d6685f853a663cea197a54f3b3cdcf2c9ed8c2eefe07bd8225428c47394cf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_4d6685f853a663cea197a54f3b3cdcf2c9ed8c2eefe07bd8225428c47394cf48->leave($__internal_4d6685f853a663cea197a54f3b3cdcf2c9ed8c2eefe07bd8225428c47394cf48_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31d062d36061194ec51fc36ec463295b754354da565889600f7eddd3825694bf = $this->env->getExtension("native_profiler");
        $__internal_31d062d36061194ec51fc36ec463295b754354da565889600f7eddd3825694bf->enter($__internal_31d062d36061194ec51fc36ec463295b754354da565889600f7eddd3825694bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_31d062d36061194ec51fc36ec463295b754354da565889600f7eddd3825694bf->leave($__internal_31d062d36061194ec51fc36ec463295b754354da565889600f7eddd3825694bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}        */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 <strong>{{ message }}</strong>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
