<?php

/* UtilisateursBundle:Default:layout/facturePDF.html.twig */
class __TwigTemplate_a2a3f031f8ae77f2eb79b97801c3b4a7a363aa4706a92708685bc9aeed3e2e77 extends Twig_Template
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
        $__internal_3c0bb57ec556e1910632048591fb94735beecda783dbace206b9cd8c68bb1100 = $this->env->getExtension("native_profiler");
        $__internal_3c0bb57ec556e1910632048591fb94735beecda783dbace206b9cd8c68bb1100->enter($__internal_3c0bb57ec556e1910632048591fb94735beecda783dbace206b9cd8c68bb1100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pathDefault"]) ? $context["pathDefault"] : $this->getContext($context, "pathDefault")), "html", null, true);
        echo "css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>ProgressEshop</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "codePostal", array()), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
            </tr>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "                <tr>
                    <td class=\"color2\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color2\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td class=\"color2\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " DT</td>
                    <td class=\"color2\">";
            // line 44
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " DT</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color2\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " DT</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
        </div>
    </body>
</html>";
        
        $__internal_3c0bb57ec556e1910632048591fb94735beecda783dbace206b9cd8c68bb1100->leave($__internal_3c0bb57ec556e1910632048591fb94735beecda783dbace206b9cd8c68bb1100_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  125 => 55,  118 => 51,  112 => 47,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  88 => 40,  84 => 39,  70 => 30,  66 => 29,  60 => 28,  53 => 24,  49 => 23,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>Facture</title>*/
/*         <link href="{{ pathDefault }}css/facture.css" rel="stylesheet" type="text/css" />*/
/*     </head>*/
/*     <body>*/
/*         <h1>ProgressEshop</h1>*/
/*         <table id="enTete">*/
/*             <tr>*/
/*                 <td colspan="1"></td>*/
/*                 <td colspan="1"><h1>Facture</h1></td>*/
/*                 <td colspan="1"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td width="80">Page</td>*/
/*                 <td width="100">Date</td>*/
/*                 <td width="120">Ref</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td class="color">[[page_nb]]</td>*/
/*                 <td class="color">{{ facture.date|date('d-m-Y') }}</td>*/
/*                 <td class="color">{{ facture.reference }}</td>*/
/*             </tr>*/
/*         </table>*/
/*         <ul id="coordonnes">*/
/*             <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>*/
/*             <li>{{ facture.commande.facturation.adresse}}</li>*/
/*             <li>{{ facture.commande.facturation.codePostal }}  - {{ facture.commande.facturation.pays }}</li>*/
/*         </ul>*/
/*         <table id="entity">*/
/*             <tr>*/
/*                 <td width="280">DESIGNATION</td>*/
/*                 <td width="105">QUANTITE</td>*/
/*                 <td width="100">P.U - HT</td>*/
/*                 <td width="105">MONTANT HT</td>*/
/*             </tr>*/
/*                 {% for produit in facture.commande.produit %}*/
/*                 <tr>*/
/*                     <td class="color2">{{ produit.reference }}</td>*/
/*                     <td class="color2">{{ produit.quantite }}</td>*/
/*                     <td class="color2">{{ produit.prixHT }} DT</td>*/
/*                     <td class="color2">{{ produit.prixHT * produit.quantite }} DT</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*         </table>*/
/*         <table id="total">*/
/*             <tr>*/
/*                 <td width="110">TOTAL HT :</td>*/
/*                 <td width="100" class="color2">{{ facture.commande.prixHT }} DT</td>*/
/*             </tr>*/
/*         </table>*/
/*         <div id="footer">*/
/*             <span class="color strong">{{ adresse }}</span>*/
/*             <br />*/
/*             {{ telephone }}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
