<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_542e4571a0567468da882e109e83079345e070f91c23b9f984099487686527c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_f2ea4aeb9cce41699943e3d7c3172826111ed61b6e68097d2566842e9c330777 = $this->env->getExtension("native_profiler");
        $__internal_f2ea4aeb9cce41699943e3d7c3172826111ed61b6e68097d2566842e9c330777->enter($__internal_f2ea4aeb9cce41699943e3d7c3172826111ed61b6e68097d2566842e9c330777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ea4aeb9cce41699943e3d7c3172826111ed61b6e68097d2566842e9c330777->leave($__internal_f2ea4aeb9cce41699943e3d7c3172826111ed61b6e68097d2566842e9c330777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe736f6b00dcda89632aec3244348824a21e25ced3086415d4fb40884763f30 = $this->env->getExtension("native_profiler");
        $__internal_7fe736f6b00dcda89632aec3244348824a21e25ced3086415d4fb40884763f30->enter($__internal_7fe736f6b00dcda89632aec3244348824a21e25ced3086415d4fb40884763f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"registration-form\">
        <div class=\"container\">
            <div class=\"registration-grids\">
                <div class=\"reg-form\">
                    <div class=\"reg\">
                        <h2>Livraison</h2>

                        ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 12
            echo "                            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" method=\"POST\">

                                <h4>Adresse de livraison</h4>
                                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 16
                echo "                                    <label class=\"radio\">
                                        <input type=\"radio\" name=\"livraison\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                        ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                        <br />";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                                    </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
                                <br /><br />

                                <h4>Adresse de facturation</h4>
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 27
                echo "                                    <label class=\"radio\">
                                        <input type=\"radio\" name=\"facturation\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                        <br />";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                                    </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
                                <br />
                                <input type=\"submit\" value=\"Valider mes adresses\">

                            </form>
                        ";
        }
        // line 39
        echo "                    </div>
                </div>

                <div class=\"reg-right\">
                    <div class=\"registration-grids\">
                        <div class=\"reg-form\">
                            <div class=\"reg\">
                                <h2>Ajouter une nouvelle adresse</h2>
                                <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" method=\"POST\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                    </br>
                                    <input type=\"submit\" value=\"Ajouter\">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_7fe736f6b00dcda89632aec3244348824a21e25ced3086415d4fb40884763f30->leave($__internal_7fe736f6b00dcda89632aec3244348824a21e25ced3086415d4fb40884763f30_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 48,  200 => 47,  190 => 39,  182 => 33,  163 => 30,  151 => 29,  143 => 28,  140 => 27,  123 => 26,  117 => 22,  98 => 19,  86 => 18,  78 => 17,  75 => 16,  58 => 15,  51 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}     */
/* */
/* {% block body %}*/
/*     <div class="registration-form">*/
/*         <div class="container">*/
/*             <div class="registration-grids">*/
/*                 <div class="reg-form">*/
/*                     <div class="reg">*/
/*                         <h2>Livraison</h2>*/
/* */
/*                         {% if utilisateur.adresses|length != 0 %}*/
/*                             <form action="{{ path('validation') }}" method="POST">*/
/* */
/*                                 <h4>Adresse de livraison</h4>*/
/*                                 {% for adresse in utilisateur.adresses %}*/
/*                                     <label class="radio">*/
/*                                         <input type="radio" name="livraison" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                         {{ adresse.adresse }}, {{ adresse.codePostal }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}"><i class="icon-trash"></i></a>*/
/*                                         <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/*                                     </label>*/
/*                                 {% endfor %}*/
/* */
/*                                 <br /><br />*/
/* */
/*                                 <h4>Adresse de facturation</h4>*/
/*                                 {% for adresse in utilisateur.adresses %}*/
/*                                     <label class="radio">*/
/*                                         <input type="radio" name="facturation" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                         {{ adresse.adresse }}, {{ adresse.codePostal }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}"><i class="icon-trash"></i></a>*/
/*                                         <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/*                                     </label>*/
/*                                 {% endfor %}*/
/* */
/*                                 <br />*/
/*                                 <input type="submit" value="Valider mes adresses">*/
/* */
/*                             </form>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="reg-right">*/
/*                     <div class="registration-grids">*/
/*                         <div class="reg-form">*/
/*                             <div class="reg">*/
/*                                 <h2>Ajouter une nouvelle adresse</h2>*/
/*                                 <form action="{{ path('livraison') }}" method="POST">*/
/*                                     {{ form_widget(form) }}*/
/*                                     </br>*/
/*                                     <input type="submit" value="Ajouter">*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
