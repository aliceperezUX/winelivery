<?php

/* /home/winelivery/themes/winelivery/pages/historial.htm */
class __TwigTemplate_0df843e7db329b12a5e0bf9501dea462c60f476c60a2881043c62b9aac00457a extends Twig_Template
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

    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("perfilmenu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    
    <!-- End Account Sidebar -->

    <!-- My Profile Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Historial de compras</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead>
                <tr>
                  <td>Cantidad de productos</td>
                  <td>Fecha</td>
                  <td class=\"text-right\">Monto total</td>
                  <td class=\"text-center\">Estatus</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2 items</td>
                  <td>2016-12-19</td>
                  <td class=\"text-right\">\$74.00</td>
                  <td class=\"text-center\"><span class=\"label label-warning\">Processing</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- End My Profile Content -->

  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/historial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
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

    {% partial \"perfilmenu\" %}
    
    <!-- End Account Sidebar -->

    <!-- My Profile Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Historial de compras</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead>
                <tr>
                  <td>Cantidad de productos</td>
                  <td>Fecha</td>
                  <td class=\"text-right\">Monto total</td>
                  <td class=\"text-center\">Estatus</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2 items</td>
                  <td>2016-12-19</td>
                  <td class=\"text-right\">\$74.00</td>
                  <td class=\"text-center\"><span class=\"label label-warning\">Processing</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- End My Profile Content -->

  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/historial.htm", "");
    }
}
