<?php

/* /var/www/html/themes/winelivery/partials/cart_total.htm */
class __TwigTemplate_8544bd52c4401ba2fa2792c26dd0125710f17cdd201febb3d0ec6ab9b6d32270 extends Twig_Template
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
        echo "<div class=\"col-md-3 cart-detailbox\">
  <h4>Orden de Compra</h4>
  <p class=\"detailbox-items\">Total Productos:<span class=\"detailbox-content\">  ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        echo "</span></p>
  <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$";
        // line 4
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
  <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> RD\$90</span></p>
  <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$";
        // line 6
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p>
  <p></p>IMPUESTOS INCLUIDOS</p>
  <a id=\"procesar_orden_button\" ";
        // line 8
        if ((isset($context["now"]) ? $context["now"] : null)) {
            echo " class=\"btn btn-theme\" data-toggle=\"modal\" data-target=\"#horario_minimo\" ";
        } elseif (((isset($context["cart_total"]) ? $context["cart_total"] : null) < 1100)) {
            echo " data-toggle=\"modal\" data-target=\"#consumo_minimo\" ";
        } elseif (((isset($context["cart_total"]) ? $context["cart_total"] : null) > 19999)) {
            echo " data-toggle=\"modal\" data-target=\"#consumo_maximo\" ";
        } else {
            echo " href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("checkout");
            echo "\" ";
        }
        echo " class=\"btn btn-theme col-md-12\">Procesar Orden</a>
    <br><br><div id=\"quantity_min\" class=\"alert alert-warning\" style=\"display:none;\">
        Debe pedir como mínimo 1 de cada producto. 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/cart_total.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 cart-detailbox\">
  <h4>Orden de Compra</h4>
  <p class=\"detailbox-items\">Total Productos:<span class=\"detailbox-content\">  {{cart_counter}}</span></p>
  <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\${{ cart_total|number_format}}</span></p>
  <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> RD\$90</span></p>
  <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\${{ cart_total_envio|number_format}}</span></p>
  <p></p>IMPUESTOS INCLUIDOS</p>
  <a id=\"procesar_orden_button\" {% if now %} class=\"btn btn-theme\" data-toggle=\"modal\" data-target=\"#horario_minimo\" {% elseif cart_total < 1100 %} data-toggle=\"modal\" data-target=\"#consumo_minimo\" {% elseif cart_total > 19999 %} data-toggle=\"modal\" data-target=\"#consumo_maximo\" {% else %} href=\"{{\"checkout\"|page}}\" {% endif %} class=\"btn btn-theme col-md-12\">Procesar Orden</a>
    <br><br><div id=\"quantity_min\" class=\"alert alert-warning\" style=\"display:none;\">
        Debe pedir como mínimo 1 de cada producto. 
    </div>
</div>", "/var/www/html/themes/winelivery/partials/cart_total.htm", "");
    }
}
