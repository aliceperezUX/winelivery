<?php

/* /home/winelivery/themes/winelivery/partials/quantity_wishlist.htm */
class __TwigTemplate_19e852ffb9b0a335d5a0465ceca67f6e064fab2eeac142617fb65bd70c8d1169 extends Twig_Template
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
        echo "<a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("deseos");
        echo "\"><i class=\"fa fa-heart white\"></i> (";
        if ((isset($context["wishlist_counter"]) ? $context["wishlist_counter"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["wishlist_counter"]) ? $context["wishlist_counter"] : null), "html", null, true);
        } else {
            echo " 0 ";
        }
        echo ")</a>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/quantity_wishlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{\"deseos\"|page}}\"><i class=\"fa fa-heart white\"></i> ({% if wishlist_counter %}{{wishlist_counter}}{% else %} 0 {% endif %})</a>", "/home/winelivery/themes/winelivery/partials/quantity_wishlist.htm", "");
    }
}
