<?php

/* /var/www/html/themes/winelivery/partials/stock.htm */
class __TwigTemplate_d277d3ea777fefda6a30564d4f966d833ddd818b28a41cf2fb395a511c33836f extends Twig_Template
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
        if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) < 1)) {
            // line 2
            echo "    <div class=\"tags\">
        <span class=\"label-tags\"><span class=\"label label-danger arrowed\">AGOTADO</span></span>
    </div> 
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/stock.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if p.stock < 1 %}
    <div class=\"tags\">
        <span class=\"label-tags\"><span class=\"label label-danger arrowed\">AGOTADO</span></span>
    </div> 
{% endif %}", "/var/www/html/themes/winelivery/partials/stock.htm", "");
    }
}
