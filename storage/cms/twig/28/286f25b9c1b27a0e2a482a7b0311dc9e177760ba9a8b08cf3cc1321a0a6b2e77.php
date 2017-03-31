<?php

/* /home/winelivery/themes/winelivery/partials/quantity_cart.htm */
class __TwigTemplate_c00406d75a4580dfa67d0f1e55609d75d8bd85b51b8494079f4a133e1e94cce1 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("carrito");
        echo "\"><i class=\"fa fa-shopping-cart white\" aria-hidden=\"true\"></i> (";
        if ((isset($context["cart_counter"]) ? $context["cart_counter"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        } else {
            echo " 0 ";
        }
        echo ")</a>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/quantity_cart.htm";
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
        return new Twig_Source("<a href=\"{{\"carrito\"|page}}\"><i class=\"fa fa-shopping-cart white\" aria-hidden=\"true\"></i> ({% if cart_counter %}{{cart_counter}}{% else %} 0 {% endif %})</a>", "/home/winelivery/themes/winelivery/partials/quantity_cart.htm", "");
    }
}
