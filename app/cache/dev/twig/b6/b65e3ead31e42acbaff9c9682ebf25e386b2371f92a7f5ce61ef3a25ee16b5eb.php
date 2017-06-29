<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_f50e322a14179e09c10deb5d60b7ebd46571e02226ca2bf6659ac6ee9537ca51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0555d787ba55e1795b13309532b6acd0b3bc12c79483c69d8c7153a56eeab1d = $this->env->getExtension("native_profiler");
        $__internal_f0555d787ba55e1795b13309532b6acd0b3bc12c79483c69d8c7153a56eeab1d->enter($__internal_f0555d787ba55e1795b13309532b6acd0b3bc12c79483c69d8c7153a56eeab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"product-listy\">
    <h2>Nos produits</h2>
    <ul class=\"product-list\">
        
        ";
        // line 5
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 6
        echo "    </ul>
</div>";
        
        $__internal_f0555d787ba55e1795b13309532b6acd0b3bc12c79483c69d8c7153a56eeab1d->leave($__internal_f0555d787ba55e1795b13309532b6acd0b3bc12c79483c69d8c7153a56eeab1d_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="product-listy">*/
/*     <h2>Nos produits</h2>*/
/*     <ul class="product-list">*/
/*         */
/*         {% render(controller('EcommerceBundle:Categories:menu')) %}*/
/*     </ul>*/
/* </div>*/
