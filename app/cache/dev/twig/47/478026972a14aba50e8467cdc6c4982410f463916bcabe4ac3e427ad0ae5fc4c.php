<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_045e93dd85a8eec1bbf7eec2ebb73908892e14f6d30297c9d9395b5530f7b0bc extends Twig_Template
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
        $__internal_8ec5c514ee9190fc3b5a4cbc4ae38a11f18f485ff4b1611f56f03a5ac0812844 = $this->env->getExtension("native_profiler");
        $__internal_8ec5c514ee9190fc3b5a4cbc4ae38a11f18f485ff4b1611f56f03a5ac0812844->enter($__internal_8ec5c514ee9190fc3b5a4cbc4ae38a11f18f485ff4b1611f56f03a5ac0812844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

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
        
        $__internal_8ec5c514ee9190fc3b5a4cbc4ae38a11f18f485ff4b1611f56f03a5ac0812844->leave($__internal_8ec5c514ee9190fc3b5a4cbc4ae38a11f18f485ff4b1611f56f03a5ac0812844_prof);

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
        return array (  73 => 35,  63 => 28,  52 => 20,  46 => 17,  35 => 9,  29 => 6,  22 => 1,);
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
