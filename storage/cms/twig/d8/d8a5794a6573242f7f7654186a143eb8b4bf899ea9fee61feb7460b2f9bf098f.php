<?php

/* /home/winelivery/themes/winelivery/pages/deseos.htm */
class __TwigTemplate_cbf29513f6e6348867c348084281239498c9408a845b4be529b34aa9af184078 extends Twig_Template
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
      <div class=\"table-responsive\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['wishlist'] = (isset($context["wishlist"]) ? $context["wishlist"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("wishlist"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/deseos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  27 => 7,  19 => 1,);
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
      <div class=\"table-responsive\">
        {% partial \"wishlist\" wishlist = wishlist %}
      </div>
    </div>
  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/deseos.htm", "");
    }
}
