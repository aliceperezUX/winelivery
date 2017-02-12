<?php

/* /home/winelivery/themes/winelivery/partials/quantity.htm */
class __TwigTemplate_7583daae8015fc980a4590b8eb8915c25ff72580e748b552fd29aef40ee86022 extends Twig_Template
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
        echo "<li class=\"white cart_update_quantity\">
    <a ";
        // line 2
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            echo "href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("deseos");
            echo "\"";
        } else {
            echo "href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\"";
        }
        echo "><i class=\"fa fa-heart white\"></i> (";
        if ((isset($context["wishlist_counter"]) ? $context["wishlist_counter"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["wishlist_counter"]) ? $context["wishlist_counter"] : null), "html", null, true);
        } else {
            echo " 0 ";
        }
        echo ")</a>
</li>
<li class=\"white cart_update_quantity\">
    <a ";
        // line 5
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            echo "href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("carrito");
            echo "\"";
        } else {
            echo "href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\"";
        }
        echo "><i class=\"fa fa-shopping-cart white\" aria-hidden=\"true\"></i> (";
        if ((isset($context["cart_counter"]) ? $context["cart_counter"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        } else {
            echo " 0 ";
        }
        echo ")</a>
</li>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/quantity.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"white cart_update_quantity\">
    <a {% if loggedIn %}href=\"{{\"deseos\"|page}}\"{% else %}href=\"{{\"login\"|page}}\"{% endif %}><i class=\"fa fa-heart white\"></i> ({% if wishlist_counter %}{{wishlist_counter}}{% else %} 0 {% endif %})</a>
</li>
<li class=\"white cart_update_quantity\">
    <a {% if loggedIn %}href=\"{{\"carrito\"|page}}\"{% else %}href=\"{{\"login\"|page}}\"{% endif %}><i class=\"fa fa-shopping-cart white\" aria-hidden=\"true\"></i> ({% if cart_counter %}{{cart_counter}}{% else %} 0 {% endif %})</a>
</li>", "/home/winelivery/themes/winelivery/partials/quantity.htm", "");
    }
}
