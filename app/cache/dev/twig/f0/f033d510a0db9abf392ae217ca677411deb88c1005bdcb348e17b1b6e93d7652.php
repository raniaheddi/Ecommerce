<?php

/* EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_b403cc4b26d5a4d2f8b249d5c2462825126ac8f8ab753ae6065e9b248abfa901 extends Twig_Template
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
        $__internal_3c2961a9bd3f5d12f864bb5f445bfd02534d7aea59795202b42e8de858d605f4 = $this->env->getExtension("native_profiler");
        $__internal_3c2961a9bd3f5d12f864bb5f445bfd02534d7aea59795202b42e8de858d605f4->enter($__internal_3c2961a9bd3f5d12f864bb5f445bfd02534d7aea59795202b42e8de858d605f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig"));

        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username", array()), "html", null, true);
        echo "
<br />
Votre commande est validée.
Vous pouvez accèder à votre facture sur votre espace client.
<br /><br />
Merci pour votre commande.
<br />
Cordialement.";
        
        $__internal_3c2961a9bd3f5d12f864bb5f445bfd02534d7aea59795202b42e8de858d605f4->leave($__internal_3c2961a9bd3f5d12f864bb5f445bfd02534d7aea59795202b42e8de858d605f4_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Bonjour {{ utilisateur.username }}*/
/* <br />*/
/* Votre commande est validée.*/
/* Vous pouvez accèder à votre facture sur votre espace client.*/
/* <br /><br />*/
/* Merci pour votre commande.*/
/* <br />*/
/* Cordialement.*/
