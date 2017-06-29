<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_03a20da0231068ef424091b7627c501af6ca97a7e162665ba5ce15af363fbc04 extends Twig_Template
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
        $__internal_0cb420b4a3fb4e44c5e3852452b82421f8fbc2533455e268148216c30c5f6c8e = $this->env->getExtension("native_profiler");
        $__internal_0cb420b4a3fb4e44c5e3852452b82421f8fbc2533455e268148216c30c5f6c8e->enter($__internal_0cb420b4a3fb4e44c5e3852452b82421f8fbc2533455e268148216c30c5f6c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span3\">
        ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <div class=\"registration-grids\">
                        <div class=\"reg-form\">
                            <div class=\"reg\">
                                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                    <br />
                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_0cb420b4a3fb4e44c5e3852452b82421f8fbc2533455e268148216c30c5f6c8e->leave($__internal_0cb420b4a3fb4e44c5e3852452b82421f8fbc2533455e268148216c30c5f6c8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  46 => 16,  40 => 15,  29 => 6,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span3">*/
/*         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*     </div>*/
/*     <div class="span9">*/
/*         <h2>Mes informations</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <div class="registration-grids">*/
/*                         <div class="reg-form">*/
/*                             <div class="reg">*/
/*                                 <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST">*/
/*                                     {{ form_widget(form) }}*/
/*                                     <br />*/
/*                                     <input class="btn btn-primary" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
