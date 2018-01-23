<?php

/* /var/www/html/themes/winelivery/pages/deseos.htm */
class __TwigTemplate_9f2eed5ac0a9c34e98e4722411a9b870899c0deaf84c3fc4b833e9fd7c9ddabe extends Twig_Template
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
        echo "<!-- Main Content -->
<div class=\"container m-t-3\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"title\"><span>LISTA DE DESEOS</span></div>
        ";
        // line 6
        if ( !twig_test_empty((isset($context["wishlist"]) ? $context["wishlist"] : null))) {
            // line 7
            echo "            <div class=\"table-responsive\">
                ";
            // line 8
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['wishlist'] = (isset($context["wishlist"]) ? $context["wishlist"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("wishlist"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "            </div>
        ";
        } else {
            // line 11
            echo "            <div class=\"col-md-12\" style=\"text-align: center\"><img style=\"width: 600px\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wish.png");
            echo "\"></div>
        ";
        }
        // line 13
        echo "    </div>
  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/deseos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 11,  36 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Main Content -->
<div class=\"container m-t-3\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"title\"><span>LISTA DE DESEOS</span></div>
        {% if wishlist is not empty %}
            <div class=\"table-responsive\">
                {% partial \"wishlist\" wishlist = wishlist %}
            </div>
        {% else %}
            <div class=\"col-md-12\" style=\"text-align: center\"><img style=\"width: 600px\" src=\"{{\"assets/images/wish.png\"|theme}}\"></div>
        {% endif %}
    </div>
  </div>
</div>
<!-- End Main Content -->", "/var/www/html/themes/winelivery/pages/deseos.htm", "");
    }
}
