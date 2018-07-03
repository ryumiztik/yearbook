<?php

/* modules/custom/yearbook_custom/templates/block--featured-person.html.twig */
class __TwigTemplate_a4b2322848339c8ab2708b6def066ed1510b6b72647c29c348e47192d081a8a1 extends Twig_Template
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
        $tags = array();
        $filters = array("upper" => 8);
        $functions = array("drupal_entity" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('upper'),
                array('drupal_entity')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 6
        echo " 
<div class=\"featured-person\">  
 <h2>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, ($context["featured_person_title"] ?? null)), "html", null, true));
        echo "</h2>  
 <div>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("node", ($context["featured_person_node"] ?? null), "teaser"), "html", null, true));
        echo "</div> 
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/yearbook_custom/templates/block--featured-person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 8,  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**  
* @file  
* Featured Person block.  
*/ 
#} 
<div class=\"featured-person\">  
 <h2>{{ featured_person_title|upper }}</h2>  
 <div>{{ drupal_entity('node', featured_person_node, 'teaser') }}</div> 
</div>", "modules/custom/yearbook_custom/templates/block--featured-person.html.twig", "/Applications/MAMP/htdocs/yearbook/modules/custom/yearbook_custom/templates/block--featured-person.html.twig");
    }
}
