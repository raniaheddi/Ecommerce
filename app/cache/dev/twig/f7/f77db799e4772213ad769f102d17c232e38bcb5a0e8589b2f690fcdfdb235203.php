<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_e48e5a84b74cb697e502f9c878d72bf0dbc0535ab7c48bb1a5792c8832b1c9b6 extends Twig_Template
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
        $__internal_06c2ec74637cd876a90da3bf5b18c2563c718306ea051c7e3398cce5370f6af9 = $this->env->getExtension("native_profiler");
        $__internal_06c2ec74637cd876a90da3bf5b18c2563c718306ea051c7e3398cce5370f6af9->enter($__internal_06c2ec74637cd876a90da3bf5b18c2563c718306ea051c7e3398cce5370f6af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"product-listy\">
    <h2>Infos Compte</h2>
    <ul class=\"product-list\">
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("factures");
        echo "\">Mes factures</a>
        </li>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("favoris_show", array("id" => 4));
        echo "\">Mes favoris</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a>
        </li>
    </ul>
</div>";
        
        $__internal_06c2ec74637cd876a90da3bf5b18c2563c718306ea051c7e3398cce5370f6af9->leave($__internal_06c2ec74637cd876a90da3bf5b18c2563c718306ea051c7e3398cce5370f6af9_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  52 => 17,  46 => 14,  40 => 11,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* <div class="product-listy">*/
/*     <h2>Infos Compte</h2>*/
/*     <ul class="product-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('factures') }}">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('favoris_show', { 'id': 4 }) }}">Mes favoris</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
