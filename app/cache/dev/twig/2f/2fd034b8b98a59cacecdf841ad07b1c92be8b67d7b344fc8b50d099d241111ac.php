<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4f5708b169316001fea33e63ce1cbc6e18fc77d44b5f4195f70e6128448bdb57 extends Twig_Template
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
        $__internal_5a80f92f97e28889a5a6cc575e5302a9ceed34abf7d0d83141eeb9c4fb060eee = $this->env->getExtension("native_profiler");
        $__internal_5a80f92f97e28889a5a6cc575e5302a9ceed34abf7d0d83141eeb9c4fb060eee->enter($__internal_5a80f92f97e28889a5a6cc575e5302a9ceed34abf7d0d83141eeb9c4fb060eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "<div class=\"registration-form\">
    <div class=\"container\">

        <h2>Inscription</h2>
        <div class=\"registration-grids\">
            <div class=\"reg-form\">
                <div class=\"reg\">
                    <p>Bienvenue, s'il vous plaît entrer les détails suivants pour continuer.</p>
                    <p>Si vous êtes déjà enregistré avec nous, <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">cliquez ici</a></p>
                    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                        <ul>
                            <li class=\"text-info\">Nom d'utilisateur: </li>
                            <li>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</li>
                        </ul>
                        <ul>
                            <li class=\"text-info\">Email: </li>
                            <li>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</li>
                        </ul>

                        <ul>
                            <li class=\"text-info\">Mot de passe: </li>
                            <li>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</li>
                        </ul>
                        <ul>
                            <li class=\"text-info\">Confirmer mot de passe: </li>
                            <li>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</li>
                        </ul>


                        <input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </form>
                </div>
            </div>
            <div class=\"reg-right\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"strip\"></div>
                <div class=\"strip\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!-- registration-form -->

</body>
</html>




































";
        
        $__internal_5a80f92f97e28889a5a6cc575e5302a9ceed34abf7d0d83141eeb9c4fb060eee->leave($__internal_5a80f92f97e28889a5a6cc575e5302a9ceed34abf7d0d83141eeb9c4fb060eee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  76 => 32,  69 => 28,  62 => 24,  54 => 19,  47 => 15,  39 => 12,  35 => 11,  25 => 3,  22 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="registration-form">*/
/*     <div class="container">*/
/* */
/*         <h2>Inscription</h2>*/
/*         <div class="registration-grids">*/
/*             <div class="reg-form">*/
/*                 <div class="reg">*/
/*                     <p>Bienvenue, s'il vous plaît entrer les détails suivants pour continuer.</p>*/
/*                     <p>Si vous êtes déjà enregistré avec nous, <a href="{{ path('fos_user_security_login')}}">cliquez ici</a></p>*/
/*                     <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                         <ul>*/
/*                             <li class="text-info">Nom d'utilisateur: </li>*/
/*                             <li>{{ form_widget(form.username) }}</li>*/
/*                         </ul>*/
/*                         <ul>*/
/*                             <li class="text-info">Email: </li>*/
/*                             <li>{{ form_widget(form.email) }}</li>*/
/*                         </ul>*/
/* */
/*                         <ul>*/
/*                             <li class="text-info">Mot de passe: </li>*/
/*                             <li>{{ form_widget(form.plainPassword.first) }}</li>*/
/*                         </ul>*/
/*                         <ul>*/
/*                             <li class="text-info">Confirmer mot de passe: </li>*/
/*                             <li>{{ form_widget(form.plainPassword.second) }}</li>*/
/*                         </ul>*/
/* */
/* */
/*                         <input type="submit" value="{{ 'registration.submit'|trans }}">*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="reg-right">*/
/*                 {{form_errors(form)}}*/
/*                 <div class="strip"></div>*/
/*                 <div class="strip"></div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- registration-form -->*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
