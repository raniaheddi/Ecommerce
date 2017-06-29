<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_ecc386d7dd9c9e75fd733c1f85e28d4b461303842fb9b097696d4852c7570ad9 extends Twig_Template
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
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">Produits</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("adminUtilisateurs");
        echo "\">Clients</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("adminCommande");
        echo "\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>   
              <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("statistique");
        echo "\">Statistique</a>
            </li>
            
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  60 => 28,  49 => 20,  43 => 17,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <div class="span3">*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('adminProduits') }}">Produits</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('adminCategories') }}">Catégories produits</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('adminUtilisateurs') }}">Clients</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('adminCommande') }}">Commandes</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('adminPages') }}">Pages</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>   */
/*               <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('statistique') }}">Statistique</a>*/
/*             </li>*/
/*             */
/*         </ul>*/
/*     </div>*/
/* </div>*/
