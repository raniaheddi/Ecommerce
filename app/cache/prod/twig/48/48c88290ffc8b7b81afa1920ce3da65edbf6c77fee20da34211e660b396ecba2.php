<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_372cf8c94aa08631aa82c8eea2a0ff8b73eae158dd07f9491b2859b0d694cbed extends Twig_Template
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
        return array (  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="product-listy">*/
/*     <h2>Nos produits</h2>*/
/*     <ul class="product-list">*/
/*         */
/*         {% render(controller('EcommerceBundle:Categories:menu')) %}*/
/*     </ul>*/
/* </div>*/
