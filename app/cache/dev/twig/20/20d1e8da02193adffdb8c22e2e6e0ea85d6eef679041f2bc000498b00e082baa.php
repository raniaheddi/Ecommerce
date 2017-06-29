<?php

/* EcommerceBundle:Default:Contact\new.html.twig */
class __TwigTemplate_e5d1d1a674adb299d622e097e7915c65973e528d187484c56156815ad4a59925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:Contact\\new.html.twig", 1);
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
        $__internal_abdffa1187762cf305ba3531591049171aaf566991c564c000635c62eff52fbf = $this->env->getExtension("native_profiler");
        $__internal_abdffa1187762cf305ba3531591049171aaf566991c564c000635c62eff52fbf->enter($__internal_abdffa1187762cf305ba3531591049171aaf566991c564c000635c62eff52fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Contact\\new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdffa1187762cf305ba3531591049171aaf566991c564c000635c62eff52fbf->leave($__internal_abdffa1187762cf305ba3531591049171aaf566991c564c000635c62eff52fbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2f775a9c728d83e4bb4837098b138bf43670d37d93585285ba2ebaf0e7f223 = $this->env->getExtension("native_profiler");
        $__internal_9b2f775a9c728d83e4bb4837098b138bf43670d37d93585285ba2ebaf0e7f223->enter($__internal_9b2f775a9c728d83e4bb4837098b138bf43670d37d93585285ba2ebaf0e7f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"contact\">
\t<div class=\"container\">
\t<div class=\"dreamcrub\">
\t\t<div class=\"contact-info\">
\t\t\t<h2>TROUVER NOUS ICI</h2>
\t\t</div>
\t\t\t<div class=\"contact-map\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259\" style=\"border:0\"></iframe>
\t\t</div>
\t\t<div class=\"contact-form\">
\t\t\t<div class=\"contact-info\">
\t\t\t\t<h3>FORMULAIRE DE CONTACT</h3>
\t\t\t</div>
\t\t\t<form id=\"fr\" method=\"POST\" action='";
        // line 17
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t<div class=\"contact-left\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Nom\" required>
\t\t\t\t\t<input type=\"text\" name=\"from\" placeholder=\"Email\" required>
\t\t\t\t\t<input type=\"text\" name=\"subject\" placeholder=\"Sujet\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-right\">
\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\" required></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<input type=\"submit\" value=\"ENVOYER\">
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_9b2f775a9c728d83e4bb4837098b138bf43670d37d93585285ba2ebaf0e7f223->leave($__internal_9b2f775a9c728d83e4bb4837098b138bf43670d37d93585285ba2ebaf0e7f223_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Contact\\new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}  */
/* */
/* {% block body %}*/
/* <div class="contact">*/
/* 	<div class="container">*/
/* 	<div class="dreamcrub">*/
/* 		<div class="contact-info">*/
/* 			<h2>TROUVER NOUS ICI</h2>*/
/* 		</div>*/
/* 			<div class="contact-map">*/
/* 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>*/
/* 		</div>*/
/* 		<div class="contact-form">*/
/* 			<div class="contact-info">*/
/* 				<h3>FORMULAIRE DE CONTACT</h3>*/
/* 			</div>*/
/* 			<form id="fr" method="POST" action='{{path('my_app_mail_sendpage')}}' {{form_enctype(form)}}>*/
/* 				<div class="contact-left">*/
/* 					<input type="text" placeholder="Nom" required>*/
/* 					<input type="text" name="from" placeholder="Email" required>*/
/* 					<input type="text" name="subject" placeholder="Sujet" required>*/
/* 				</div>*/
/* 				<div class="contact-right">*/
/* 					<textarea name="message" placeholder="Message" required></textarea>*/
/* 				</div>*/
/* 				<div class="clearfix"></div>*/
/* 				<input type="submit" value="ENVOYER">*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
